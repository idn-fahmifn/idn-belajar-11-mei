<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UmurController extends Controller
{
    // function untuk menamilkan halaman form

    public function formUmur()
    {
        return view('umur.form');
    }

    // function untuk mengolah data yang dikirimkan

    public function proses(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:30',
            'age' => 'required|integer|min:3|max:99',
        ], [
            'name.required' => 'Input name wajib diisi',
            'name.string' => 'Input name wajib berupa karakter',
            'name.min' => 'Input name wajib minimal 3 karakter',
            'name.max' => 'Input name wajib maximal 30 karakter',

            'age.required' => 'Input name wajib diisi',
            'age.integer' => 'Input name wajib berupa angka',
            'age.min' => 'Input name wajib minimal 3 tahun',
            'age.max' => 'Input name wajib maximal 99 tahun',
        ]);

        // menambahkan session agar data umur dan nama bisa dibaca oleh route sukses dan middleware.
        $request->session()->put('umur', $request->input('age'));

        return redirect()->route('umur-sukses');
    }

    // function untuk menampilkan halaman sukses.

    public function sukses()
    {
        return view('umur.sukses');
    }
}
