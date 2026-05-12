<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = "Hallo ini adalah halaman barang";

        $dataBarang = [];

        $dataBarangs = collect([
            (object)[
                'id' => 1,
                'status' => 'Masuk',
                'new_location' => 'Gudang Utama - Rak A1',
                'created_at' => Carbon::now()->subMinutes(15),
                'asset' => (object)[
                    'name' => 'MacBook Pro M2 2023',
                    'serial_number' => 'APP-MBP-9901'
                ]
            ],
            (object)[
                'id' => 2,
                'status' => 'Keluar',
                'new_location' => 'Ruang Meeting Lt. 2',
                'created_at' => Carbon::now()->subHours(2),
                'asset' => (object)[
                    'name' => 'Proyektor Epson EB-X400',
                    'serial_number' => 'EPS-PRJ-2231'
                ]
            ],
            (object)[
                'id' => 3,
                'status' => 'Masuk',
                'new_location' => 'Laboratorium Komputer',
                'created_at' => Carbon::now()->subDays(1),
                'asset' => (object)[
                    'name' => 'Monitor Dell UltraSharp 24',
                    'serial_number' => 'DEL-MON-5542'
                ]
            ],
            (object)[
                'id' => 4,
                'status' => 'Keluar',
                'new_location' => 'Area Coworking',
                'created_at' => Carbon::now()->subDays(2),
                'asset' => (object)[
                    'name' => 'Ergonomic Chair Herman Miller',
                    'serial_number' => 'HM-CHR-0082'
                ]
            ],
            (object)[
                'id' => 5,
                'status' => 'Masuk',
                'new_location' => 'Studio Kreatif',
                'created_at' => Carbon::now()->subDays(3),
                'asset' => (object)[
                    'name' => 'iPad Pro 12.9 Inch',
                    'serial_number' => 'APP-IPD-1120'
                ]
            ],
        ]);

        return view('halaman.contoh', [
            'data' => $data,
            'dataBarang' => $dataBarang,
            'dataBarangs' => $dataBarangs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Ini adalah halaman create barang";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
