<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use function pest\Laravel\{actingAs, get};

use App\Models\User;
use App\Models\Categories;

// scenario 1

test('admin user can access product categories page', function () {
    // perintahnya disini
    // sistem akan membuat sebuah user fake/palsu
    $admin = User::factory()->create();

    // dia akan ber-acting seperti seorang admin, dalam arti dia akan login
    actingAs($admin)
        ->get('/dashboard/categories')
        ->assertStatus(200)
        ->assertSee('Categories'); // Assuming the page has this text
});

// scenario 2

test('admin user can create new product categories', function () {
    $admin = User::factory()->create();
    actingAs($admin)
        ->get('/dashboard/categories/create')
        ->assertStatus(200)
        ->assertSee('Product Categories');
    $newCategori = [
        'name' => 'Testing New Category',
        'slug' => 'testing new-category',
        'description' => 'This is a new testing category.',
        'image' => 'https://picsum.photos/640/480?random=1', // Uncomment if you want to test image upload
    ];
    actingAs($admin)
        ->post('/dashboard/categories', $newCategori)
        ->assertRedirect();
    $latestCategory = Categories::latest('id')->first();

    expect($latestCategory)
        ->name->toBe($newCategori['name'])
        ->slug->toBe($newCategori['slug'])
        ->description->toBe($newCategori['description']);
});

// scenario 3

test('admin user can update product categories', function () {
    $admin = User::factory()->create();
    $category = Categories::factory()->create();

    actingAs($admin)
        ->get('/dashboard/categories/' . $category->id . '/edit')
        ->assertStatus(200)
        ->assertSee('Product Categories');

    $updatedCategory = [
        'name' => 'Updated Category Name',
        'slug' => 'updated-category-name',
        'description' => 'This is an updated category description.',
        'image' => 'https://picsum.photos/640/480?random=2', // Uncomment if you want to test image upload
    ];

    actingAs($admin)
        ->put('/dashboard/categories/' . $category->id, $updatedCategory)
        ->assertRedirect();

    $category->refresh();

    expect($category)
        ->name->toBe($updatedCategory['name'])
        ->slug->toBe($updatedCategory['slug'])
        ->description->toBe($updatedCategory['description']);
});

// scenario 4

test('admin user can delete product categories', function () {
    $admin = User::factory()->create();
    $category = Categories::factory()->create();

    actingAs($admin)
        ->delete('/dashboard/categories/' . $category->id)
        ->assertRedirect();

    expect(Categories::find($category->id))->toBeNull();
});