<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sejarah Daddy Kost</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      color: #ffffff;
      background-color: white;
    }

    header {
      text-align: center;
      padding: 20px 10px;
      background: #333333;
    }

    header h1 {
      font-size: 2.5em;
      margin: 0;
    }

    .container {
      max-width: 1200px;
      margin: 20px auto;
      padding: 20px;
    }

    .timeline {
      display: flex;
      flex-direction: column;
      gap: 40px;
    }

    .timeline-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      gap: 20px;
    }

    .timeline-item:nth-child(even) {
      flex-direction: row-reverse;
    }

    .content {
      max-width: 600px;
      background-color: #262626;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
    }

    .content h2 {
      font-size: 1.8em;
      margin: 0;
    }

    .content p {
      line-height: 1.5;
    }

    .image-container {
      width: 100%;
      max-width: 600px;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
    }

    .image-container img {
      width: 100%;
      height: auto;
    }

    footer {
      text-align: center;
      padding: 10px;
      background: #333333;
    }

    footer p {
      margin: 0;
      font-size: 0.9em;
    }
  </style>
</head>
<body>

<header>
  <h1>Sejarah Daddy Kost</h1>
</header>

<div class="container">
  <div class="timeline">
    <div class="timeline-item">
      <div class="content">
        <h2>Pendirian (2010)</h2>
        <p>Daddy Kost didirikan pada tahun 2010 oleh seorang pengusaha visioner yang ingin menciptakan hunian nyaman dan terjangkau bagi mahasiswa dan pekerja muda. Awalnya, hanya ada satu bangunan kecil dengan 10 kamar yang berlokasi strategis di dekat universitas ternama. Dengan semangat melayani dan fokus pada kualitas, pendiri Daddy Kost berusaha menciptakan suasana "rumah kedua" bagi para penyewanya.</p>
      </div>
      <div class="image-container">
        <img src="{{asset('assets/images/sejarah (5).jpg')}}" alt="Pendirian Daddy Kost">
      </div>
    </div>

    <div class="timeline-item">
      <div class="content">
        <h2>Masa Pertumbuhan (2012-2015)</h2>
        <p>Seiring meningkatnya permintaan, Daddy Kost mulai memperluas cakupannya. Pada tahun 2012, dua bangunan baru dibuka di lokasi strategis lainnya. Fasilitas seperti ruang bersama, dapur modern, dan koneksi internet diperkenalkan untuk meningkatkan pengalaman penyewa. Tahun 2015 menjadi tonggak penting ketika Daddy Kost berhasil memiliki lebih dari 500 kamar tersebar di tiga kota besar.</p>
      </div>
      <div class="image-container">
        <img src="{{asset('assets/images/sejarah (4).jpg')}}" alt="Masa Pertumbuhan Daddy Kost">
      </div>
    </div>

    <div class="timeline-item">
      <div class="content">
        <h2>Transformasi Digital (2016-2020)</h2>
        <p>Dalam upaya mengikuti perkembangan zaman, Daddy Kost mulai berinvestasi dalam teknologi digital. Pada tahun 2016, situs web resmi diluncurkan, memungkinkan calon penyewa untuk melihat ketersediaan kamar dan fasilitas. Tahun 2020 menandai peluncuran aplikasi mobile yang mempermudah proses pemesanan kamar, pembayaran sewa, dan komunikasi antara penghuni dan manajemen. Transformasi ini menjadikan Daddy Kost sebagai pelopor dalam digitalisasi industri persewaan kost.</p>
      </div>
      <div class="image-container">
        <img src="{{asset('assets/images/sejarah (3).jpg')}}" alt="Transformasi Digital">
      </div>
    </div>

    <div class="timeline-item">
      <div class="content">
        <h2>Ekspansi Nasional (2021-2023)</h2>
        <p>Melihat keberhasilan di pasar lokal, Daddy Kost memutuskan untuk memperluas jangkauan ke tingkat nasional. Cabang baru dibuka di kota-kota besar seperti Surabaya, Bandung, dan Yogyakarta. Dengan lebih dari 10.000 kamar yang tersedia, Daddy Kost juga mulai menjalin kemitraan dengan institusi pendidikan dan perusahaan untuk menyediakan hunian bagi karyawan dan mahasiswa.</p>
      </div>
      <div class="image-container">
        <img src="{{asset('assets/images/sejarah (2).jpg')}}" alt="Ekspansi Nasional">
      </div>
    </div>

    <div class="timeline-item">
      <div class="content">
        <h2>Masa Kini dan Masa Depan</h2>
        <p>Hari ini, Daddy Kost adalah salah satu jaringan kost terbesar di Indonesia, dikenal karena kualitas layanan dan fasilitasnya. Kami terus berinovasi untuk meningkatkan pengalaman penghuni, seperti menyediakan ruang coworking, layanan kebersihan otomatis, dan keamanan berbasis teknologi AI. Ke depannya, Daddy Kost bercita-cita untuk menjadi solusi hunian terbaik di Asia Tenggara, dengan tetap memegang teguh nilai-nilai kenyamanan, komunitas, dan keberlanjutan.</p>
      </div>
      <div class="image-container">
        <img src="{{asset('assets/images/sejarah (1).jpg')}}" alt="Masa Kini dan Masa Depan">
      </div>
    </div>
  </div>
</div>

<footer>
  <p>&copy; 2024 Daddy Kost. Semua hak dilindungi.</p>
</footer>

</body>
</html>
