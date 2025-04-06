<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kebijakan Privasi - Daddy Kost</title>
    <link rel="stylesheet" href="styles.css">
    <style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    color: #333;
}


/* Reset default styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    color: #333;
}

/* Header styling */
header {
    background-color: #686763;
    color: white;
    padding: 15px 0;
}

header .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

header h1 {
    font-size: 2rem;
    font-weight: bold;
    color: white;
}

/* Hamburger icon styling */
.hamburger {
    font-size: 30px;
    cursor: pointer;
    display: block;
    color: white;
}

/* Nav styling */
nav {
    display: none; /* Hidden by default on mobile */
    position: absolute;
    top: 70px; /* Adjust as per your header height */
    left: 0;
    width: 100%;
    background-color: #686763;
    padding: 20px;
    border-radius: 5px;
}

nav ul {
    list-style-type: none;
    padding-left: 0;
    display: flex;
    flex-direction: column; /* Stack items vertically */
    margin-top: 0;
}

nav ul li {
    margin-bottom: 15px;
}

nav ul li a {
    color: white;
    text-decoration: none;
    font-size: 1rem;
    transition: color 0.3s ease;
}

nav ul li a:hover {
    color: #80CBC4;
}

/* Show the nav when hamburger is clicked */
nav.show {
    display: block; /* Show the menu */
}

/* Responsive Design for Mobile */
@media screen and (max-width: 768px) {
    .hamburger {
        display: block; /* Show hamburger icon on mobile */
    }

    nav {
        display: none; /* Keep nav hidden by default on mobile */
        position: absolute;
        top: 70px;
        left: 0;
        background-color: #686763;
        width: 100%;
        padding: 20px;
        border-radius: 5px;
    }

    nav.show {
        display: block; /* Show nav when 'show' class is added */
    }

    nav ul {
        display: flex;
        flex-direction: column;
    }

    nav ul li {
        margin-bottom: 10px;
    }

    nav ul li a {
        font-size: 1.1rem;
    }
}



section {
    margin-bottom: 40px;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

section h2 {
    font-size: 1.8rem;
    color: #686763;
    margin-bottom: 10px;
    text-align: center;
}

section p, section ul {
    font-size: 1rem;
    line-height: 1.8;
}

section ul {
    list-style-type: disc;
    padding-left: 20px;
}

ul li {
    margin-bottom: 10px;
}

footer {
    background-color: #686763;
    color: #fff;
    padding: 1rem 0;
    text-align: center;
}

footer p {
    font-size: 1rem;
}

footer a {
    color: #fff;
    text-decoration: none;
}

footer a:hover {
    text-decoration: underline;
}

/* Responsive Styles */
@media screen and (max-width: 768px) {
    header .container {
        flex-direction: column;
        align-items: flex-start;
    }

    nav ul {
        margin-top: 15px;
        display: flex;
        flex-wrap: wrap;
    }

    nav ul li {
        margin: 5px;
    }

    section {
        margin-bottom: 20px;
    }
}

@media screen and (max-width: 480px) {
    header h1 {
        font-size: 2rem;
    }

    section h2 {
        font-size: 1.6rem;
    }

    footer p {
        font-size: 0.9rem;
    }
}

    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Kebijakan Privasi</h1>
            <!-- Hamburger Icon -->
            <div class="hamburger" onclick="toggleMenu()">
                &#9776; <!-- Symbol for hamburger menu -->
            </div>
            <!-- Navigation -->
            <nav id="nav-menu">
                <ul>
                    <li><a href="#informasi">Informasi yang Kami Kumpulkan</a></li>
                    <li><a href="#penggunaan">Penggunaan Informasi</a></li>
                    <li><a href="#keamanan">Keamanan Informasi</a></li>
                    <li><a href="#cookies">Penggunaan Cookies</a></li>
                    <li><a href="#akses">Akses dan Hak Pengguna</a></li>
                    <li><a href="#perubahan">Perubahan Kebijakan Privasi</a></li>
                    <li><a href="#hubungi">Hubungi Kami</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    
    <main class="container">
        <section id="informasi">
            <h2>Informasi yang Kami Kumpulkan</h2>
            <p>Di Daddy Kost, kami sangat menghargai privasi Anda. Kami berkomitmen untuk melindungi data pribadi Anda. Kami mengumpulkan berbagai jenis informasi pribadi ketika Anda mendaftar atau berinteraksi dengan situs kami. Jenis informasi yang kami kumpulkan meliputi:</p>
            <ul>
                <li><strong>Informasi Identitas Pribadi:</strong> Nama, alamat email, nomor telepon, dan informasi terkait akun lainnya.</li>
                <li><strong>Informasi Pembayaran:</strong> Jika Anda menggunakan layanan berbayar, kami mengumpulkan informasi pembayaran seperti nomor kartu kredit dan data transaksi lainnya.</li>
                <li><strong>Informasi Lokasi:</strong> Kami dapat mengumpulkan data lokasi berdasarkan izin Anda untuk menyediakan layanan yang lebih relevan, seperti lokasi kost terdekat.</li>
                <li><strong>Informasi Penggunaan:</strong> Kami mengumpulkan data mengenai cara Anda menggunakan situs kami, termasuk jenis perangkat yang digunakan, alamat IP, dan data log lainnya untuk memahami preferensi pengguna dan meningkatkan pengalaman pengguna.</li>
                <li><strong>Cookies dan Teknologi Serupa:</strong> Kami menggunakan cookies dan teknologi pelacakan lainnya untuk mengumpulkan informasi tentang perilaku pengguna di situs kami.</li>
            </ul>
        </section>

        <section id="penggunaan">
            <h2>Penggunaan Informasi</h2>
            <p>Informasi yang kami kumpulkan digunakan untuk berbagai tujuan yang penting, termasuk namun tidak terbatas pada:</p>
            <ul>
                <li><strong>Pemrosesan Pendaftaran dan Layanan:</strong> Mengelola pendaftaran pengguna, memberikan akses ke akun pengguna, dan memfasilitasi transaksi atau permintaan layanan lainnya.</li>
                <li><strong>Personalisasi Pengalaman Pengguna:</strong> Menyesuaikan pengalaman Anda di situs kami, seperti menampilkan konten atau rekomendasi kost berdasarkan preferensi Anda.</li>
                <li><strong>Komunikasi:</strong> Mengirimkan pemberitahuan penting tentang akun Anda, pembaruan produk atau layanan, serta penawaran promosi yang mungkin menarik bagi Anda.</li>
                <li><strong>Analisis dan Penelitian:</strong> Menggunakan data untuk menganalisis tren penggunaan situs, meningkatkan fungsionalitas, dan memperbaiki kualitas layanan yang kami tawarkan.</li>
                <li><strong>Keamanan dan Pencegahan Penipuan:</strong> Memonitor dan mencegah kegiatan yang mencurigakan atau ilegal, serta melindungi situs kami dan data pengguna dari ancaman eksternal.</li>
            </ul>
        </section>

        <section id="keamanan">
            <h2>Keamanan Informasi</h2>
            <p>Kami sangat peduli dengan keamanan data pribadi Anda. Kami telah mengambil langkah-langkah teknis dan organisatoris yang wajar untuk melindungi informasi Anda dari kehilangan, penyalahgunaan, dan akses yang tidak sah. Langkah-langkah ini termasuk penggunaan enkripsi untuk data yang dikirimkan melalui jaringan kami dan perlindungan terhadap server kami.</p>
            <p>Namun, penting untuk dicatat bahwa meskipun kami berusaha keras untuk melindungi data Anda, tidak ada metode transmisi data yang sepenuhnya aman di internet. Oleh karena itu, kami tidak dapat menjamin keamanan mutlak dari data yang Anda kirimkan kepada kami.</p>
            <p>Kami juga menerapkan prosedur kontrol internal untuk memastikan bahwa hanya pihak yang berwenang yang dapat mengakses data pribadi Anda.</p>
        </section>

        <section id="cookies">
            <h2>Penggunaan Cookies</h2>
            <p>Cookies adalah file kecil yang disimpan di perangkat Anda ketika Anda mengunjungi situs kami. Kami menggunakan cookies untuk mengumpulkan informasi yang membantu kami meningkatkan pengalaman pengguna, seperti mengingat preferensi atau pengaturan Anda selama sesi di situs kami.</p>
            <p>Beberapa jenis cookies yang kami gunakan antara lain:</p>
            <ul>
                <li><strong>Cookies Fungsional:</strong> Digunakan untuk meningkatkan fungsionalitas situs dan mengingat preferensi pengguna.</li>
                <li><strong>Cookies Analitik:</strong> Digunakan untuk menganalisis bagaimana pengguna berinteraksi dengan situs kami dan untuk memperbaiki konten dan desainnya.</li>
                <li><strong>Cookies Iklan:</strong> Digunakan untuk memberikan iklan yang relevan kepada Anda berdasarkan minat Anda.</li>
            </ul>
            <p>Dengan melanjutkan penggunaan situs kami, Anda menyetujui penggunaan cookies. Anda dapat mengubah pengaturan cookies melalui pengaturan browser Anda, namun, ini dapat mempengaruhi beberapa fitur dari situs kami.</p>
        </section>

        <section id="akses">
            <h2>Akses dan Hak Pengguna</h2>
            <p>Kami memberikan hak kepada pengguna untuk mengakses, memperbaiki, atau menghapus data pribadi mereka. Anda dapat melakukan ini dengan menghubungi kami melalui informasi yang tercantum pada bagian “Hubungi Kami”. Berikut adalah beberapa hak yang Anda miliki terkait data pribadi Anda:</p>
            <ul>
                <li><strong>Hak Akses:</strong> Anda berhak untuk meminta salinan data pribadi yang kami simpan tentang Anda.</li>
                <li><strong>Hak Perbaikan:</strong> Anda dapat meminta perbaikan atau pembaruan atas data pribadi yang tidak akurat atau tidak lengkap.</li>
                <li><strong>Hak Penghapusan:</strong> Anda dapat meminta penghapusan data pribadi Anda jika tidak lagi diperlukan untuk tujuan yang kami kumpulkan.</li>
                <li><strong>Hak Pembatasan:</strong> Anda berhak untuk membatasi pemrosesan data pribadi Anda dalam kondisi tertentu.</li>
                <li><strong>Hak Penolakan:</strong> Anda dapat menolak penggunaan data pribadi Anda untuk tujuan pemasaran langsung atau analitik.</li>
            </ul>
            <p>Untuk melaksanakan hak-hak tersebut, Anda dapat menghubungi kami melalui informasi kontak yang tercantum di bawah ini.</p>
        </section>

        <section id="perubahan">
            <h2>Perubahan Kebijakan Privasi</h2>
            <p>Daddy Kost berhak untuk memperbarui kebijakan privasi ini dari waktu ke waktu. Setiap perubahan akan diumumkan di halaman ini dengan mencantumkan tanggal pembaruan yang terbaru. Kami menyarankan Anda untuk memeriksa halaman ini secara berkala agar tetap mendapatkan informasi terkini tentang bagaimana kami melindungi data pribadi Anda.</p>
            <p>Dengan terus menggunakan situs kami setelah adanya perubahan, Anda dianggap menerima kebijakan privasi yang diperbarui.</p>
        </section>

        <section id="hubungi">
            <h2>Hubungi Kami</h2>
            <p>Jika Anda memiliki pertanyaan atau kekhawatiran mengenai kebijakan privasi ini, atau jika Anda ingin menggunakan hak-hak Anda yang disebutkan di atas, Anda dapat menghubungi kami melalui salah satu cara berikut:</p>
            <ul>
                <li>Email: <a href="mailto:info@daddykost.com">info@daddykost.com</a></li>
                <li>Telepon: +62 21 1234 5678</li>
                <li>Alamat: Jl. Kostan No. 123, Jakarta, Indonesia</li>
            </ul>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 Daddy Kost. Semua hak dilindungi undang-undang.</p>
        </div>
    </footer>
    <script>
      // Function to toggle the visibility of the navigation menu
    function toggleMenu() {
        const nav = document.getElementById('nav-menu');
        const isVisible = nav.style.display === 'block';

        // Toggle the display of the navigation menu
        nav.style.display = isVisible ? 'none' : 'block';
    }

    </script>
</body>
</html>
