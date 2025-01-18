<?php
// include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Company Profilee</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css" />
    <style>

      body {
        font-family: 'Arial', sans-serif;
        background-color: #f3f4f8;
        margin: 0;
        padding: 0;
      }
  
      .registration-section {
        background-color: #252525;
        max-width: 800px;
        margin: 50px auto;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.1);
      }
  
      .section-titlep {
        text-align: center;
        font-size: 30px;
        font-weight: bold;
        color: #f8f2f2;
        margin-bottom: 20px;
        text-align: center;
        padding: 50px 0 50px;
         text-transform: uppercase;
      }

      .section-titlep::after {
        content: "";
        width: 80px;
        height: 5px;
        display: block;
        margin: 10px auto 0;
        border-radius: var(--border-radius-s);
        background: var(--seconndary-color);
      }

      .form-gender  , .form-photo {
        color: #f8f2f2;
        text-transform: uppercase;
      }

      .registration-form {
        display: flex;
        flex-direction: column;
      }
  
      .form-input {
        height: 45px;
        margin-bottom: 20px;
        padding: 0 15px;
        font-size: 16px;
        color: #333;
        border: 1px solid #ccc;
        border-radius: 6px;
        background-color: #f9f9f9;
        transition: border-color 0.3s;
      }
  
      .form-input:focus {
        border-color: #3c141c;
        outline: none;
      }
  
      .form-input[type="file"] {
        padding: 5px 15px;
      }
  
      select.form-input {
        height: 50px;
        padding: 0 15px;
      }
  
      .form-gender {
        margin-bottom: 20px;
      }
  
      .form-gender label {
        font-weight: bold;
        font-size: 16px;
        margin-right: 15px;
      }
  
      .form-gender input[type="radio"] {
        margin-right: 10px;
      }
  
      .form-photo label {
        font-size: 16px;
        font-weight: bold;
      }
  
      .submit-button {
        background-color: #3c141c;
        color: #fff;
        border: none;
        padding: 12px;
        font-size: 18px;
        border-radius: 6px;
        cursor: pointer;
        transition: background-color 0.3s;
      }
  
      .submit-button:hover {
        background-color: #3c141c;
      }
  </style>
  </head>

  <body>
    <!--Header / Navbar-->
    <header>
      <nav class="navbar section-content">
        <a href="#" class="nav-logo">
          <h2 class="logo-text">🏫 INSTIKI</h2>
        </a>
        <ul class="nav-menu">
          <button id="menu-close-button" class="fas fa-times"></button>
          <li class="nav-item">
            <a href="#" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="#about" class="nav-link">About</a>
          </li>
          <li class="nav-item">
            <a href="#jurusan" class="nav-link">Jurusan</a>
          </li>
          <li class="nav-item">
            <a href="#fasilitas" class="nav-link">Fasilitas</a>
          </li>
          <li class="nav-item">
            <a href="#gallery" class="nav-link">Gallery</a>
          </li>
          <li class="nav-item">
            <a href="#contact" class="nav-link">Contact</a>
          </li>
          <li class="nav-item">
            <a href="#registration" class="nav-link">Registration</a>
          </li>
        </ul>
        <button id="menu-open-button" class="fas fa-bars"></button>
      </nav>
    </header>

    <main>
      <!--Hero Section-->
      <section class="hero-section">
        <div class="section-content">
          <div class="hero-details">
            <h2 class="title">Kampus IT</h2>
            <h3 class="subtitle">Mimpi Besarmu Ada di Sini</h3>
            <p class="description">Telusuri lebih dalam INSTIKI dan Pilihlah Jurusan Untuk Masa Depan Anda Dengan Pedomaan Menjadi dan Memberi</p>

            <div class="buttons">
              <a href="#registration" class="button daftar-now">Daftar Now</a>
              <a href="#contact" class="button contact-us">Contact Us</a>
            </div>
          </div>
          <div class="hero-image-wrapper">
            <img src="img/Logo.png" alt="Hero" class="hero-image" />
          </div>
        </div>
      </section>

      <!--About Section-->
      <section class="about-section" id="about">
        <div class="section-content">
          <div class="about-image-wrapper">
            <img src="img/instiki.jpg" alt="About" class="about-image" />
          </div>
          <div class="about-details">
            <h2 class="section-title">About Us</h2>
            <p class="text">
              PERGURUAN TINGGI TERBAIK DI BALI , Ingin Menjadi Profesional IT atau Entrepreneur? Wujudkan Mimpi mu Bersama dengan INSTIKI Selamat Datang di INSTIKI. INSTIKI (Institut Bisnis dan Teknologi Indonesia) adalah perguruan tinggi
              swasta Indonesia yang fokus pada bidang informatika, teknologi informasi, dan bisnis yang didirikan pada tanggal 18 April 2008 dan berada di bawah pengelolaan Yayasan Wahana Widya Wisesa Denpasar, Bali. Berdasarkan SK
              Mendiknas RI No. 70/D/O/2008.INSTIKI memiliki dua program studi yaitu Sistem Komputer dan Teknik Informatika.Instiki mengintegrasikan teknologi modern dengan pendekatan kewirausahaan untuk menyiapkan lulusannya menghadapi
              tantangan era digital.
            </p>
            <div class="social-link-list">
              <a href="https://x.com/instikiofficial" class="social-link"><i class="fa-brands fa-x-twitter"></i></a>
              <a href="https://www.instagram.com/instikiofficial/" class="social-link"><i class="fa-brands fa-instagram"></i></a>
              <a href="https://www.youtube.com/@STIKITV" class="social-link"><i class="fa-brands fa-youtube"></i></a>
            </div>
          </div>
        </div>
      </section>

      <!--Jurusan Section-->
      <section class="jurusan-section" id="jurusan">
        <h2 class="section-title">OUR JURUSAN</h2>
        <div class="section-content">
          <ul class="jurusan-list">
            <li class="jurusan-item">
              <img src="img/MDI.png" alt="MDI" class="jurusan-image" />
              <div class="jurusan-details">
                <h3 class="name">TI - Manajemen Data & Informasi Fakultas Teknologi dan Informatika (S.Kom)</h3>
                <p class="text">
                  TI - Manajemen Data & Informasi di Fakultas Teknologi dan Informatika (S.Kom) adalah program studi yang mempelajari berbagai bidang terkait teknologi komputer dan manajemen data dengan memecahkan masalah secara
                  terkomputerisasi.
                </p>
              </div>
            </li>
            <li class="jurusan-item">
              <img src="img/KAB.png" alt="KAB" class="jurusan-image" />
              <div class="jurusan-details">
                <h3 class="name">TI - Komputer Akuntansi dan Bisnis Fakultas Teknologi dan Informatika (S.Kom)</h3>
                <p class="text">
                  TI - Komputer Akuntansi dan Bisnis adalah jurusan di Fakultas Teknologi dan Informatika yang mempelajari perkembangan ilmu dan teknologi berbasis komputer untuk bidang akuntansi dan bisnis. Lulusan jurusan ini akan
                  memperoleh gelar Sarjana Komputer (S.Kom).
                </p>
              </div>
            </li>
            <li class="jurusan-item">
              <img src="img/DKV.png" alt="DKV" class="jurusan-image" />
              <div class="jurusan-details">
                <h3 class="name">Desain Komunikasi Visual Fakultas Bisnis dan Desain Kreatif (S.Ds)</h3>
                <p class="text">
                  Desain Komunikasi Visual (DKV) adalah ilmu yang mempelajari cara mengkomunikasikan pesan secara visual dengan menggunakan seni dan desain. Gelar yang didapat setelah menyelesaikan program studi DKV adalah Sarjana Desain
                  (S.Ds.).
                </p>
              </div>
            </li>
            <li class="jurusan-item">
              <img src="img/TIP.png" alt="TIP" class="jurusan-image" />
              <div class="jurusan-details">
                <h3 class="name">TI - Pariwisata Fakultas Teknologi dan Informatika (S.Kom)</h3>
                <p class="text">
                  TI - Pariwisata di Fakultas Teknologi dan Informatika (S.Kom) adalah jurusan di Institut Teknologi Bali (INSTIKI) yang bertujuan untuk mencetak lulusan yang dapat mengembangkan bidang pariwisata dengan memanfaatkan
                  teknologi informasi.
                </p>
              </div>
            </li>
            <li class="jurusan-item">
              <img src="img/SK.png" alt="SK" class="jurusan-image" />
              <div class="jurusan-details">
                <h3 class="name">Sistem Komputer (S.Kom)</h3>
                <p class="text">
                  Sistem Komputer (S.Kom) adalah gelar akademik yang diberikan kepada lulusan program studi yang berfokus pada ilmu komputer dan teknologi informasi. Program studi ini merupakan salah satu cabang ilmu di bidang teknologi
                  informasi dan komunikasi.
                </p>
              </div>
            </li>
            <li class="jurusan-item">
              <img src="img/DGM.png" alt="MDI" class="jurusan-image" />
              <div class="jurusan-details">
                <h3 class="name">Bisnis Digital Fakultas Bisnis dan Desain Kreatif (S.Bns)</h3>
                <p class="text">
                  Bisnis digital adalah program studi yang mempelajari bagaimana menggabungkan ilmu bisnis dengan teknologi digital untuk merancang, mengelola, dan mengembangkan bisnis. Lulusan program studi ini diharapkan memiliki
                  keterampilan untuk bekerja di perusahaan nasional maupun multinasional.
                </p>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <!--Fasilitas Section-->
      <section class="fasilitas-section" id="fasilitas">
        <h2 class="section-title">Fasilitas</h2>
        <div class="section-content">
          <div class="slider-container swiper">
            <div class="slider-wrapper">
              <ul class="fasilitas-list swiper-wrapper">
                <li class="fasilitas swiper-slide">
                  <img src="img/kls.png" alt="kelas" class="fasilitas-image" />
                  <h3 class="name">Ruangan Kelas</h3>
                  <i class="text">Ruangan Kelas hi-tech yang dirancang untuk menciptakan lingkungan belajar yang optimal bagi mahasiswa.</i>
                </li>
                <li class="fasilitas swiper-slide">
                  <img src="img/lab.jpg" alt="lab" class="fasilitas-image" />
                  <h3 class="name">Ruangan Lab</h3>
                  <i class="text">Ruangan lab INSTIKI adalah fasilitas yang digunakan untuk kegiatan praktikum dan penelitian di berbagai bidang teknologi dan informatika.</i>
                </li>
                <li class="fasilitas swiper-slide">
                  <img src="img/aula.webp" alt="aula" class="fasilitas-image" />
                  <h3 class="name">Aula</h3>
                  <i class="text">Aula di INSTIKI dilengkapi dengan fasilitas modern seperti proyektor, sound system, dan Wi-Fi untuk mendukung kegiatan akademik maupun acara lainnya.</i>
                </li>
                <li class="fasilitas swiper-slide">
                  <img src="img/gym.jpg" alt="gym" class="fasilitas-image" />
                  <h3 class="name">GYM</h3>
                  <i class="text">Fasilitas GYM di INSTIKI dirancang untuk mendukung kesehatan dan kebugaran mahasiswa dengan berbagai peralatan olahraga modern.</i>
                </li>
                <li class="fasilitas swiper-slide">
                  <img src="img/kantin.png" alt="kantin" class="fasilitas-image" />
                  <h3 class="name">Kantin</h3>
                  <i class="text">Fasilitas kantin di INSTIKI menyediakan berbagai makanan dan minuman dengan suasana nyaman untuk mendukung kebutuhan mahasiswa dan staf selama berada di kampus.</i>
                </li>
                <li class="fasilitas swiper-slide">
                  <img src="img/lobby.png" alt="lobby" class="fasilitas-image" />
                  <h3 class="name">Lobby</h3>
                  <i class="text"
                    >Fasilitas lobby di INSTIKI (Institut Informatika dan Bisnis Bali) mencakup area resepsionis yang nyaman, ruang tunggu modern dengan sofa, akses Wi-Fi gratis, dan dekorasi yang estetis untuk memberikan kenyamanan dan
                    kesan profesional bagi pengunjung.</i
                  >
                </li>
                <li class="fasilitas swiper-slide">
                  <img src="img/lapangan.jpeg" alt="lapangan" class="fasilitas-image" />
                  <h3 class="name">Lapangan</h3>
                  <i class="text">Instiki (Institut Teknologi dan Bisnis Kesehatan) memiliki fasilitas lapangan berupa area olahraga multifungsi yang mendukung kegiatan olahraga dan acara kampus.</i>
                </li>
                <li class="fasilitas swiper-slide">
                  <img src="img/perpustakaan.jpg" alt="perpustakaan" class="fasilitas-image" />
                  <h3 class="name">Perpustakaan</h3>
                  <i class="text">Perpustakaan di Instiki menyediakan koleksi buku, jurnal, dan sumber belajar digital yang mendukung kebutuhan akademik serta ruang baca nyaman bagi mahasiswa dan dosen.</i>
                </li>
                <li class="fasilitas swiper-slide">
                  <img src="img/parkir.webp" alt="parkir" class="fasilitas-image" />
                  <h3 class="name">Parkiran</h3>
                  <i class="text">Instiki menyediakan fasilitas parkir yang luas dan aman untuk kendaraan roda dua dan roda empat bagi mahasiswa, dosen, dan staf.</i>
                </li>
              </ul>

              <div class="swiper-pagination"></div>
              <div class="swiper-slide-button swiper-button-prev"></div>
              <div class="swiper-slide-button swiper-button-next"></div>
            </div>
          </div>
        </div>
      </section>

      <!--Gallery Section-->
      <section class="gallery-section" id="gallery">
        <h2 class="section-title">Gallery</h2>
        <div class="section-content">
          <ul class="gallery-list">
            <li class="gallery-item">
              <img src="img/1.jpg" alt="Gallery" class="gallery-image" />
            </li>
            <li class="gallery-item">
              <img src="img/2.jpeg" alt="Gallery" class="gallery-image" />
            </li>
            <li class="gallery-item">
              <img src="img/3.jpg" alt="Gallery" class="gallery-image" />
            </li>
            <li class="gallery-item">
              <img src="img/4.jpeg" alt="Gallery" class="gallery-image" />
            </li>
            <li class="gallery-item">
              <img src="img/5.jpg" alt="Gallery" class="gallery-image" />
            </li>
            <li class="gallery-item">
              <img src="img/6.jpg" alt="Gallery" class="gallery-image" />
            </li>
          </ul>
        </div>
      </section>

      <!--Formulir Pendaftaran-->
      <section class="registration-section"  id="registration">
        <h2 class="section-titlep">Registration</h2>
        <form action="submit.php" method="POST" enctype="multipart/form-data" class="registration-form">
          <input type="text" name="nama_mhs" placeholder="Nama Calon Mahasiswa" class="form-input" required />
          <input type="text" name="alamat" placeholder="Alamat Lengkap" class="form-input" required />
          <input type="tel" name="no_hp" placeholder="Nomor Telepon atau HP" class="form-input" required />
          <input type="date" name="tgl_lahir" placeholder="Tanggal Lahir" class="form-input" required />
          <input type="text" name="asal_sklh" placeholder="Asal Sekolah" class="form-input" required />
          <select name="agama" class="form-input" required>
            <option value="" disabled selected>Pilih Agama</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option>
            <option value="Konghucu">Konghucu</option>
            <option value="Lainnya">Lainnya</option>
          </select>
          <div class="form-gender">
            <label for="jenis_kelamin">Jenis Kelamin:</label><br />
            <input type="radio" name="jk" value="Laki-laki" required /> Laki-laki
            <input type="radio" name="jk" value="Perempuan" required /> Perempuan
          </div>
          <div class="form-photo">
            <label for="uploaded_file">Unggah File Nilai Rapot :</label><br />
            <input type="file" name="file"  class="form-input" required />
          </div>
          <br />
          <button type="submit" class="submit-button">Kirim Pendaftaran</button>
        </form>
      </section>

      <!--Contact Section-->
      <section class="contact-section" id="contact">
        <h2 class="section-title">Contact Us</h2>
        <div class="section-content">
          <ul class="contact-info-list">
            <li class="contact-info">
              <i class="fa-solid fa-location-crosshairs"></i>
              <p>Jl. Tukad Pakerisan No.97, Panjer, Denpasar Selatan, Kota Denpasar, Bali 80225</p>
            </li>
            <li class="contact-info">
              <i class="fa-solid fa-envelope"></i>
              <p>humas@instiki.ac.id</p>
            </li>
            <li class="contact-info">
              <i class="fa-solid fa-phone"></i>
              <p>+62 361-256-995</p>
            </li>
            <li class="contact-info">
              <i class="fa-solid fa-clock"></i>
              <p>Monday - Saturday : 08.00 – 22.00 WITA</p>
            </li>
            <li class="contact-info">
              <i class="fa-solid fa-clock"></i>
              <p>Sunday : Closed</p>
            </li>
            <li class="contact-info">
              <i class="fa-solid fa-globe"></i>
              <p>https://instiki.ac.id/</p>
            </li>
          </ul>
          
        </div>
        </section>
          

      <!--Footer Section-->
      <footer class="footer-section">
        <div class="section-content">
          <p class="copyright-text">@ INSTIKI-Institut Bisnis dan Teknologi Indonesia 2024</p>

          <div class="social-link-list">
            <a href="https://x.com/instikiofficial" class="social-link"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="https://www.instagram.com/instikiofficial/" class="social-link"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.youtube.com/@STIKITV" class="social-link"><i class="fa-brands fa-youtube"></i></a>
          </div>

          <p class="policy-text">
            <a href="#" class="policy-link">UAS</a>
            <span class="separator">.</span>
            <a href="#" class="policy-link">Kelompok Cloud Computing</a>
          </p>
        </div>
      </footer>
    </main>

    <!--Link Swipper script-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!--Link custom script-->
    <script src="script.js"></script>
  </body>
</html>
