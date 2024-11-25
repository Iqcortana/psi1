<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\Post;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Str;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;

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
        'nomor_telp' => 'required|string',
        'berat' => 'numeric|required',
        'sayur_buah' => 'boolean',
        'ikan' => 'boolean',
        'ayam' => 'boolean',
        'daging' => 'boolean',
        'eskrim' => 'boolean',
        'makanan_kemasan' => 'boolean',
        'makanan_olahan' => 'boolean',
        'kota_asal' => 'required|string',
        'kota_tujuan' => 'required|string',
        ]);

        // Generate nomor pemesanan jika belum ada
        $nomorPemesanan = strtoupper(Str::random(8)); // misalnya kode unik 8 karakter
        $resi = strtolower(str_replace(' ', '_', $request->nama_pemesan)) . '_' . $nomorPemesanan;
        $pemesanan = Pemesanan::latest()->first(); // Ambil data pemesanan terakhir

    
        Pemesanan::create([
            'nama_pemesan' => $request->nama_pemesan,
            'nomor_pemesanan' => $nomorPemesanan,
            'nomor_telp' => $request->nomor_telp,
            'berat' => $request->berat,
            'sayur_buah' => $request->sayur_buah,
            'ikan' => $request->ikan,
            'ayam' => $request->ayam,
            'daging' => $request->daging,
            'eskrim' => $request->eskrim,
            'makanan_kemasan' => $request->kemasan,
            'makanan_olahan' => $request->olahan,
            'kota_asal' => $request->kota_asal,
            'kota_tujuan' => $request->kota_tujuan,
            'resi' => $resi,
        ]);
        $pdf = FacadePdf::loadView('struk_pemesanan', compact('pemesanan'));
        return $pdf->download('struk_' . $pemesanan->resi . '.pdf');
    }

    public function track(Request $request)
    {
        $resi = $request->input('resi');
        $nomorPemesanan = substr($resi, strrpos($resi, '_') + 1);
        $posts = Post::all();
        

        $pemesanan = Pemesanan::where('nomor_pemesanan', $nomorPemesanan)->first();

        if ($pemesanan) {
            return view('home', [
                'pemesanan' => $pemesanan,
                'posts' => $posts
            ], );
        } else {
            return redirect()->back()->with('error', 'Resi tidak ditemukan.');
        }
    }
}
