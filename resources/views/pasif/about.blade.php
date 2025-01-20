<x-template title="about">
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tentang Kami</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body {
                font-family: 'Poppins', Arial, sans-serif;
                line-height: 1.8;
                background: linear-gradient(to right, #e3f2fd, #f9f9f9);
                color: #444;
                margin: 0;
                padding: 0;
            }
            h1, h2 {
                color: #007bff;
                font-weight: 600;
                text-align: center;
            }
            .content-section {
                padding: 40px;
                background: #ffffff;
                box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
                border-radius: 15px;
                margin-bottom: 40px;
                transition: transform 0.3s ease;
            }
            .content-section:hover {
                transform: translateY(-5px);
            }
            .content-section ul, .content-section ol {
                padding-left: 30px;
                margin-top: 20px;
            }
            .content-section ul li, .content-section ol li {
                margin-bottom: 10px;
            }
            .content-section a {
                color: #007bff;
                text-decoration: none;
                font-weight: 500;
                transition: color 0.3s ease;
            }
            .content-section a:hover {
                color: #0056b3;
                text-decoration: underline;
            }
            .hero-section {
                background: linear-gradient(to right, #007bff, #0056b3);
                color: white;
                text-align: center;
                padding: 60px 20px;
                border-radius: 15px;
                margin-bottom: 40px;
            }
            .hero-section h1 {
                font-size: 2.5rem;
                margin-bottom: 20px;
            }
            .hero-section p {
                font-size: 1.25rem;
                margin-bottom: 0;
            }
            footer {
                text-align: center;
                padding: 20px 0;
                margin-top: 40px;
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
            .btn-primary {
                background-color: #007bff;
                border-color: #007bff;
                transition: background-color 0.3s ease, box-shadow 0.3s ease;
            }
            .btn-primary:hover {
                background-color: #0056b3;
                box-shadow: 0 4px 10px rgba(0, 91, 179, 0.3);
            }
        </style>
    </head>
    <body>
        <div class="hero-section">
            <h1>Tentang Kami</h1>
            <p>Menemani Anda dalam perjalanan olahraga dan gaya hidup sehat.</p>
        </div>

        <div class="container">
            <div class="content-section">
                <h2>Misi Kami</h2>
                <p>
                    Kami percaya bahwa olahraga adalah kunci untuk hidup lebih sehat dan lebih bahagia. Oleh karena itu, kami berkomitmen untuk:
                </p>
                <ul>
                    <li>Menyediakan produk olahraga terbaik dengan harga kompetitif.</li>
                    <li>Membantu setiap pelanggan mencapai tujuan olahraga mereka.</li>
                    <li>Menciptakan pengalaman berbelanja yang nyaman dan memuaskan.</li>
                </ul>

                <h2 class="mt-5">Mengapa Memilih Kami?</h2>
                <ol>
                    <li><strong>Produk Berkualitas:</strong> Kami hanya menawarkan produk dari merek terpercaya yang telah teruji kualitasnya.</li>
                    <li><strong>Pilihan Lengkap:</strong> Mulai dari pakaian olahraga hingga aksesoris, kami memiliki semua yang Anda butuhkan.</li>
                    <li><strong>Layanan Pelanggan yang Ramah:</strong> Tim kami siap membantu Anda dengan pertanyaan atau rekomendasi.</li>
                    <li><strong>Komitmen pada Inovasi:</strong> Kami terus mengikuti tren dan teknologi terbaru.</li>
                </ol>

                <h2 class="mt-5">Cerita Kami</h2>
                <p>
                    Didirikan pada <strong>2024</strong>, <strong>Toko Olahraga</strong> lahir dari kecintaan pada olahraga dan keinginan untuk membuatnya lebih mudah diakses oleh semua orang. Kami adalah komunitas yang mendukung semangat olahraga.
                </p>

                <h2 class="mt-5">Hubungi Kami</h2>
                <p>
                    Kami senang mendengar dari Anda! Jika ada pertanyaan, saran, atau cerita olahraga Anda, jangan ragu untuk menghubungi kami di <a href="mailto:email@tokoanda.com">onlineshop@example.com</a> atau melalui media sosial kami.
                </p>
            </div>
        </div>

        <footer>
            <p>&copy; 2025 Toko Olahraga. Dibuat dengan cinta untuk komunitas olahraga.</p>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
</x-template>
