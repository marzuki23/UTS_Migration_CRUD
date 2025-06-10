<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerAuthController extends Controller
{
    //fungsi  untuk menampilkan halaman login
    public function login()
    {
        return view('web.customer.login', [
            'title' => 'Login'
        ]);
    }
    //fungsi  untuk menampilkan halaman register
    public function register()
    {
        return view('web.customer.register', [
            'title' => 'Register'
        ]);
    }

    //fungsi untuk aksi login, ketika tombol login di klik
    public function store_login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $validasi = \Validator::make($credentials, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        //jika validasi gagal, maka kita kembalikan ke halaman login
        if ($validasi->fails()) {
            //jika validasi gagal
            //redirect ke halaman sebelumnya
            //dengan pesan error
            //dan list errornya apa saja
            return redirect()->back()
                ->with('errorMessage', 'Validasi error, silahkan cek kembali data anda')
                ->withErrors($validasi)
                ->withInput();
        }

        //cek dulu di table customer, email yang diisi ada atau tidak
        $customer = Customer::where('email', $credentials['email'])->first();
        //kita cek apakah customer ini ada,
        //jika ada kita cek passwordnya
        if ($customer && \Hash::check($credentials['password'], $customer->password)) {
            // Login
            \Auth::guard('customer')->login($customer);
            return redirect()->route('home')
                ->with('successMessage', 'Login berhasil');
        } else {
            return redirect()->back()
                ->with('errorMessage', 'Email atau password salah')
                ->withInput();
        }
    }

    //fungsi untuk aksi regiater, ketika tombol register di klik
    public function store_register(Request $request)
    {
        $validasi = \Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|max:255|unique:customers,email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);

        //kita cek, apakah validasi gagal atau tidak
        //jika validasi gagal, maka kita kembalikan ke halaman register
        if ($validasi->fails()) {
            return redirect()->back()
                ->with('errorMessage', 'Validasi error, silahkan cek kembali data anda')
                ->withErrors($validasi)
                ->withInput();
        } else {
            $customer = new Customer;
            $customer->name = $request->name;
            $customer->email = $request->email;
            $customer->password = \Hash::make($request->password);
            $customer->save();
            //jika berhasil tersimpan, maka redirect ke halaman login
            return redirect()->route('customer.login')
                ->with('successMessage', 'Registrasi Berhasil');
        }
    }

    public function logout(Request $request)
    {
        \Auth::guard('customer')->logout();
        return redirect()->route('customer.login')
            ->with('successMessage', 'Anda telah berhasil logout');
    }

}