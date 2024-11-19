<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\Post;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Str;

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
        $nomorPemesanan = strtoupper(Str::random(8)); // misalnya kode unik 8 karakter
        $resi = strtolower(str_replace(' ', '_', $request->nama_pemesan)) . '_' . $nomorPemesanan;

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
            'resi' => $resi,
        ]);
        return redirect('/pemesanan')->with('success', 'Data pemesanan berhasil disimpan dengan resi: ' . $resi);
        
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
