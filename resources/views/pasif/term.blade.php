<x-template title="Term Condition">
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syarat dan Ketentuan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', Arial, sans-serif;
            line-height: 1.8;
            background: linear-gradient(to bottom, #f9f9f9, #eef2f3);
            color: #444;
            margin: 0;
        }
        .header {
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: white;
            padding: 60px 20px;
            text-align: center;
            border-radius: 0 0 15px 15px;
        }
        .header h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
        }
        .header p {
            font-size: 1.2rem;
        }
        .content-section {
            padding: 40px;
            background: #fff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            margin-bottom: 40px;
            transition: transform 0.3s ease;
        }
        .content-section:hover {
            transform: translateY(-5px);
        }
        .content-section h2 {
            color: #0056b3;
            font-weight: 600;
            margin-bottom: 20px;
        }
        .content-section ol {
            padding-left: 25px;
        }
        .content-section ol li {
            margin-bottom: 15px;
        }
        .content-section ol li ul {
            list-style-type: disc;
            padding-left: 25px;
        }
        .table {
            background: #fff;
            border: 1px solid #dee2e6;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            overflow: hidden;
        }
        .table th {
            background-color: #007bff;
            color: white;
            text-align: center;
        }
        .table td {
            text-align: center;
            padding: 15px;
        }
        footer {
            text-align: center;
            padding: 20px;
            background: #f8f9fa;
            border-top: 1px solid #e9ecef;
        }
        footer p {
            margin: 0;
            color: #666;
        }
        footer a {
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        footer a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Syarat dan Ketentuan</h1>
        <p>Selamat datang di Toko Olahraga! Harap baca syarat dan ketentuan berikut dengan seksama.</p>
    </div>

    <div class="container mt-5">
        <div class="content-section">
            <h2 class="text-center">Ketentuan Umum</h2>
            <p>Dengan mengakses situs ini, Anda dianggap telah menyetujui semua syarat dan ketentuan berikut:</p>
            <ol>
                <li><strong>Penggunaan Situs Web</strong>
                    <ul>
                        <li>Situs ini hanya untuk tujuan transaksi legal.</li>
                        <li>Informasi yang ditampilkan dapat berubah sewaktu-waktu tanpa pemberitahuan.</li>
                    </ul>
                </li>
                <li><strong>Akun Pengguna</strong>
                    <ul>
                        <li>Anda bertanggung jawab atas keamanan akun Anda.</li>
                        <li>Segera laporkan jika ada aktivitas mencurigakan.</li>
                    </ul>
                </li>
                <li><strong>Pembelian dan Pembayaran</strong>
                    <ul>
                        <li>Pastikan informasi pembayaran benar dan valid.</li>
                        <li>Semua transaksi tunduk pada ketersediaan produk.</li>
                    </ul>
                </li>
                <li><strong>Pengiriman dan Pengembalian</strong>
                    <ul>
                        <li>Kami berusaha memenuhi estimasi pengiriman, namun keterlambatan mungkin terjadi.</li>
                        <li>Kebijakan pengembalian berlaku sesuai dengan aturan kami.</li>
                    </ul>
                </li>
            </ol>
        </div>

        <div class="content-section">
            <h2 class="text-center">Ringkasan Syarat</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Syarat</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Penggunaan Situs</td>
                        <td>Situs hanya digunakan untuk transaksi legal.</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Akun Pengguna</td>
                        <td>Jaga kerahasiaan akun Anda.</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Pembayaran</td>
                        <td>Informasi pembayaran harus valid.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 Toko Olahraga. Semua hak cipta dilindungi. <a href="#">Hubungi Kami</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

</x-template>
