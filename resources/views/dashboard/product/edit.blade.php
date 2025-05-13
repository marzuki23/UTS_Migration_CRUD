<x-layouts.app :title="'Edit Produk'">
    <div class="relative mb-6 w-full">
        <flux:heading size="xl">Edit Produk</flux:heading>
        <flux:subheading size="lg" class="mb-6">Perbarui data produk</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    @if(session()->has('successMessage'))
        <flux:badge color="lime" class="mb-3 w-full">
            {{ session()->get('successMessage') }}
        </flux:badge>
    @elseif(session()->has('errorMessage'))
        <flux:badge color="red" class="mb-3 w-full">
            {{ session()->get('errorMessage') }}
        </flux:badge>
    @endif

    <form action="{{ route('product.update', $product->id) }}" method="post">
        @csrf
        @method('PUT')

        <flux:input label="Nama Produk" name="name" class="mb-3" value="{{ old('name', $product->name) }}" />
        <flux:input label="Slug" name="slug" class="mb-3" value="{{ old('slug', $product->slug) }}" />
        <flux:textarea label="Deskripsi" name="description" class="mb-3">{{ old('description', $product->description) }}</flux:textarea>
        <flux:input label="SKU" name="sku" class="mb-3" value="{{ old('sku', $product->sku) }}" />
        <flux:input label="Harga" name="price" type="number" step="0.01" class="mb-3" value="{{ old('price', $product->price) }}" />
        <flux:input label="Stok" name="stock" type="number" class="mb-3" value="{{ old('stock', $product->stock) }}" />

        <flux:select label="Kategori Produk" name="product_category_id" class="mb-3">
            <option value="">-- Pilih Kategori --</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ old('product_category_id', $product->product_category_id) == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </flux:select>

        <flux:input label="URL Gambar" name="image_url" type="url" class="mb-3" value="{{ old('image_url', $product->image_url) }}" />

        <flux:select label="Status Aktif" name="is_active" class="mb-3">
            <option value="1" {{ old('is_active', $product->is_active) == 1 ? 'selected' : '' }}>Aktif</option>
            <option value="0" {{ old('is_active', $product->is_active) == 0 ? 'selected' : '' }}>Tidak Aktif</option>
        </flux:select>

        <flux:separator />

        <div class="mt-4">
            <flux:button type="submit" variant="primary">Perbarui</flux:button>
            <flux:link href="{{ route('product.index') }}" variant="ghost" class="ml-3">Kembali</flux:link>
        </div>
    </form>
</x-layouts.app>