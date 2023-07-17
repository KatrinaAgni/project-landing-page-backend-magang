<?php

$koneksi = mysqli_connect("localhost","root","","db_pmi");
$result = mysqli_query($koneksi, "SELECT id_siswa, Nama_Siswa, Kelas, Jenis_Kelamin, Umur
                                  from tb_rpl");
                                
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project coba</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
     <link rel="stylesheet" href="<?php echo e(asset('css/Style.css')); ?>">
</head>
<body>
  <!-- ============== NAVBAR ============== -->
      <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="Navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#page-top">smkn 2 smg</a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#page-top">Profile</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">jurusan</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#kelas">XII RPL 2</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#data">Data</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    

      <!-- ===================== HEADER ===================== -->
      <section class="masthead text-center" id="page-top">
        <img class="image-bg" src="img/WhatsApp Image 2023-07-08 at 12.33.34 AM.jpeg" alt="">
        <div class="container d-flex align-items-center flex-column">
          <div class="header text-center text-uppercase m-5">
          <p>Selamat datang di</p>
          <h1 style="color: #141e70;">PROFIL XII RPL 2 SMKN 2 SEMARANG</h1><br>
          <p>SMK Negeri 2 Semarang (dahulu SMEA 1 Semarang) berdiri pada tanggal 26 Juni 1951, berdasarkan SK Menteri Pendidikan dan Kebudayaan No. 2881 / BIII / 51 dengan nama SMEA Negeri Semarang. Pertama kali bertempat di jalan Pattimura Semarang yang sekarang ditempati SMP Negeri 6 Semarang.</p>
          <button class="btn-login">
            <a href="/login" class="button text-uppercase">login</a>
          </button>
          <br><br><br><br><br><br><br><br><br>
        </div>
      </div>
    </section>

    <!-- =================== JURUSAN =================== -->
    <section class="page-section portfolio bg-dark-subtle" id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">JURUSAN</h2>
            <section>
            <div class="row">
              <div class="col-4">
                <div class="card" style="width:400px">
                <img class="card-img-top" src="img/WhatsApp Image 2023-07-08 at 12.33.37 AM.jpeg" alt="Card image" style="width:100%">
                <div class="card-body">
                  <h4 class="card-title">RPL</h4>
                  <p class="card-text">Rekayasa Perangkat Lunak(RPL)</p>
                  <a href="#jurusan1" class="btn btn-primary" data-toggle="modal">See Profile</a>
                </div>
              </div>
            </div>

              <div class="col-4" style="padding-left: 20%;">
                <div class="card" style="width:400px;">
                  <img class="card-img-top" src="img/WhatsApp Image 2023-07-08 at 12.33.35 AM.jpeg" alt="Card image" style="width:100%">
                  <div class="card-body">
                    <h4 class="card-title">BDP</h4>
                    <p class="card-text">Pemasaran</p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                  </div>
                </div>
              </div>

              <div class="col-5" style="padding-top: 3rem;">
                <div class="card" style="width:400px;">
                  <img class="card-img-top" src="img/WhatsApp Image 2023-07-08 at 12.33.37 AM (1).jpeg" alt="Card image" style="width:100%">
                  <div class="card-body">
                    <h4 class="card-title">AKL</h4>
                    <p class="card-text">Akuntansi Keuangan</p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                  </div>
                </div>
              </div>

              <div class="col-4" style="padding-left: 130px; padding-top: 3rem;">
                <div class="card" style="width:400px;">
                  <img class="card-img-top" src="img/WhatsApp Image 2023-07-08 at 12.33.35 AM (1).jpeg" alt="Card image" style="width:100%">
                  <div class="card-body">
                    <h4 class="card-title">UPW</h4>
                    <p class="card-text">Usaha Perjalanan Wisata(UPW)</p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                  </div>
                </div>
              </div>

              <div class="col-4" style="padding-top: 3rem; padding-bottom: 10%;">
                <div class="card" style="width:400px;">
                  <img class="card-img-top" src="img/WhatsApp Image 2023-07-08 at 12.33.36 AM.jpeg" alt="Card image" style="width:100%">
                  <div class="card-body">
                    <h4 class="card-title">OTKP</h4>
                    <p class="card-text">Olah Tata Kelola Perkantoran(OTKP)</p>
                    <a href="img/BTS _ JIKOOK.jpg" class="btn btn-primary">See Profile</a>
                  </div>
                </div>
              </div>
            </div>
            </section>
        </div>
    </section>

    <!-- ====================== KELAS ====================== -->
    <section class="kelas text-center" id="kelas" style="padding-top: 3rem;">
      <img class="image-bg" src="img/WhatsApp Image 2023-07-17 at 9.50.03 AM.jpeg" alt="">
      <div class="container d-flex align-items-center flex-column" >
        <div class="kelas text-center text-uppercase m-5">
        <div class="row">
          <p class="col-6" style="text-align: left;">Di kelas XII RPL 2<br> Kerja tim adalah bagian penting dalam kelas XII RPL 2. Seperti acara TIC yang merupakan acara jurusan RPL 3 angkatan. Ini adalah momen-momen yang memperdalam hubungan kami sebagai teman sekelas.
            pembelajaran di kelas RPL tidak hanya tentang komputer dan kode-kode. Kami bekerja dalam tim yang solid dan kompak, di mana kerja sama dan kolaborasi menjadi kunci keberhasilan. </p>
          <p class="col-6" style="text-align: right;">Di SMKN 2 SMG<br>  kelas RPL juga akan membuka pintu untuk memasuki dunia industri. Kami akan memiliki kesempatan untuk magang di perusahaan-perusahaan ternama dan merasakan pengalaman langsung dalam pengembangan perangkat lunak. Ini adalah peluang yang luar biasa untuk mengasah keterampilan dan membangun jaringan profesional yang kuat.</p>
        </div>
        <br><br><br><br><br><br><br><br><br>
      </div>
      </div>
  </section>

  <!-- ====================== PROFIL ====================== -->
<section class="profil text-center" id="data">
  <h1 style="color: #141e70;">SISWA SISWI DARI KELAS XII RPL 2</h1><br><br>
  <section class="box">
  <div class="container">
  
    <table class="table" border="2" cellpaddings="2" cellspacing="1" align="center">
        <tr>
            <th>ID Siswa</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>Jenis Kelamin</th>
            <th>Umur</th>
        </tr>

        <?php while($row=mysqli_fetch_assoc($result)) : ?>

            <tr>
                <td><?php echo $row["id_siswa"]; ?></td>
                <td><?php echo $row["Nama_Siswa"]; ?></td>
                <td><?php echo $row["Kelas"];?></td>
                <td><?php echo $row["Jenis_Kelamin"];?></td>
                <td><?php echo $row["Umur"];?></td>
            </tr>
            <?php endwhile ?>
    </table>
  </div>
  </section>
</section>
  <!-- ================= CONTACT ================ -->
  <section class="contact" style="background-color: #A6D0DD;" id="contact">
    <h1 class="text-center" style="color: #141e70">CONTACT</h1>
  <section class="row contact">
   <div class="maps text-center">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.194848769386!2d110.43137237445157!3d-6.986314368416044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708ca596276b2b%3A0xb94e391a4198acac!2sSMK%20Negeri%202%20Semarang!5e0!3m2!1sid!2sid!4v1688910289974!5m2!1sid!2sid" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <div class="col-6 rcontacts-list">

    <div class="contact-item">

      <div class="icon-box">
        <ion-icon name="mail-outline"></ion-icon>
      </div>

      <div class="contact-info">
        <p class="contact-title" style="color:#141e70;">Email</p>

        <a href="mailto:agnikatrina@gmail.com" class="contact-link">agnikatrina@gmail.com</a>
      </div>
    </div>
    <div class="contact-item">
      <div class="icon-box">
        <ion-icon name="location-outline"></ion-icon>
      </div>

      <div class="contact-info">
        <p class="contact-title" style="color:#141e70;">Location</p>
        <address>Jalan Dokter Cipto No.121A, Karangturi, Kec. Semarang Tim., Kota Semarang, Jawa Tengah 50124</address>
      </div>
    </div>

      <div class="row">
        <div class="col-3">
          <a href="https://www.instagram.com/smkn2_smg/?hl=id" class="social instagram">
            <svg viewBox="0 0 246.15 246.15"><path d="M201,51.5A47.49,47.49,0,0,1,248.41,99V200.88A47.49,47.49,0,0,1,201,248.32H99a47.49,47.49,0,0,1-47.44-47.44V99A47.49,47.49,0,0,1,99,51.5H201m0-24.66H99A72.11,72.11,0,0,0,26.92,99V200.88A72.12,72.12,0,0,0,99,273H201a72.12,72.12,0,0,0,72.11-72.11V99A72.11,72.11,0,0,0,201,26.84Z" transform="translate(-26.92 -26.84)"/><path class="cls-1" d="M150,124.34a25.57,25.57,0,1,1-25.57,25.57A25.6,25.6,0,0,1,150,124.34m0-24.66a50.24,50.24,0,1,0,50.23,50.23A50.23,50.23,0,0,0,150,99.68Z" transform="translate(-26.92 -26.84)"/><circle class="cls-1" cx="189.98" cy="55.33" r="13.81"/></svg>
          </a>
        </div>
        <div class="col-3">
          <a href="https://github.com/KatrinaAgni" class="social github">
            <svg viewBox="0 0 496 512"><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg>
          </a>
        </div>
      </div>
      
    </div>
  </section>
  </section>

<!-- ============ end ======= -->

</section>
     <!-- Bootstrap core JS-->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
     <!-- Core theme JS-->
     <script src="js/scripts.js"></script>
     <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>

<?php /**PATH D:\Katrina_RPL2\portal-berita\resources\views/welcome.blade.php ENDPATH**/ ?>