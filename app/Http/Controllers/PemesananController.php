<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class PemesananController extends Controller
{
    public function create(Request $request)
    {
        return view('pemesanan');
    }



    public function store(Request $request)
    {
        $request->validate([
        'nama_pemesan' => 'required|string|max:255',
        'nomor_telp' => 'required|string|regex:/^\\+62[\\s\\-]?[\\d]{10,12}$/',
        'berat' => 'numeric|required',
        'sayuran_beku' => 'boolean',
        'ikan_beku' => 'boolean',
        'daging_beku' => 'boolean',
        'makanan_beku' => 'boolean',
        'kota_asal' => 'required|string',
        'kota_tujuan' => 'required|string',
        ]);

        // Generate nomor pemesanan jika belum ada
        $nomorPemesanan = $request->nomor_pemesanan ?? Uuid::uuid4()->toString();

        Pemesanan::create([
            'nama_pemesan' => $request->nama_pemesan,
            'nomor_pemesanan' => $nomorPemesanan,
            'nomor_telp' => $request->nomor_telp,
            'berat' => $request->berat,
            'sayuran_beku' => $request->sayuran_beku,
            'ikan_beku' => $request->ikan_beku,
            'daging_beku' => $request->daging_beku,
            'makanan_beku' => $request->makanan_beku,
            'kota_asal' => $request->kota_asal,
            'kota_tujuan' => $request->kota_tujuan,
        ]);
        return redirect('/pemesanan')->with('success', 'Data pemesanan berhasil disimpan.');
        
    }

    // public function generateNomorPemesanan()
    // {
    //     // Generate UUID versi 4 (random)
    //     $uuid = Uuid::uuid4();

    //     // Jika ingin format tertentu, misalnya tanpa tanda kurung kurawal
    //     $nomorPemesanan = $uuid->toString();

    //     // Atau jika ingin format dengan prefix tertentu, misalnya 'PO-'
    //     $nomorPemesanan = 'PO-' . $uuid->toString();

    //     // Simpan nomor pemesanan ke database atau lakukan tindakan lainnya
    //     // ...

    //     return $nomorPemesanan;
    // }
}
