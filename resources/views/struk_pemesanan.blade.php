<!DOCTYPE html>
<html>
<head>
    <title>Struk Pemesanan</title>
    <style>
        /* Gaya CSS untuk struk */
        @page {
            size: A4 portrait;
            margin: 30mm; /* Atur margin sesuai kebutuhan */
        }
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }
        .struk {
            border: 1px solid #ccc;
            padding: 20px;
            width: 100%; /* Sesuaikan lebar struk sesuai kebutuhan */
            margin: 0 auto;
        }
        .header {
            text-align: center;
        }
        .pemesanan {
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        .pengiriman {
            margin-top: 20px;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="struk">
        <div class="header">
          <img src="{{ asset('img/platinum.png') }}" alt="Logo Perusahaan" class="logo">
          <h2>Struk Pemesanan</h2>
          <p>Nama Perusahaan: Platinum Transport</p>
          <p>Alamat: Jl. H. A. M. M. Rifaddin Perum Grand Taman Sari No.CP.17, Harapan Baru, Kec. Loa Janan Ilir, Kota Samarinda, Kalimantan Timur 75251</p>
          <p>Telepon: 085754389354</p>
        </div>
        <div class="pemesanan">
            <p><strong>Nama Pemesan:</strong> {{ $pemesanan->nama_pemesan }}</p>
            <p><strong>Nomor Pemesanan:</strong> {{ $pemesanan->nomor_pemesanan }}</p>
            <p><strong>Nomor Resi(untuk lacak barang):</strong> {{ $pemesanan->resi }}</p>
            <p><strong>Tanggal Pemesanan:</strong> {{ $pemesanan->created_at->format('d M Y') }}</p>
            <p><strong>Total Berat:</strong> {{ $pemesanan->berat }} kg</p>
            <p><strong>Total Harga:</strong> Rp {{ number_format($pemesanan->total_harga, 0, ',', '.') }}</p>
        </div>

        <div class="pengiriman">
            <p><strong>Alamat Asal:</strong></p>
            <p>{{ $pemesanan->kota_asal }}</p>
            <p><strong>Alamat Pengiriman:</strong></p>
            <p>{{ $pemesanan->kota_tujuan }}</p>
        </div>

        <div class="footer">
            <p>Terima kasih atas pesanan Anda.</p>
            <p>Silakan simpan struk ini sebagai bukti pemesanan.</p>
        </div>
    </div>
</body>
</html>