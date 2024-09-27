<x-layout>
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            background-color:#B7ADCF;
        }

        .navbar {
            background-color: #B7ADCF;
        }

        .header-section {
            height: 92vh;
            background-color: #535657;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .header-content {
            text-align: left;
        }

        .header-content h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        .text-highlight {
            color: #B7ADCF;
        }

        .header-content p {
            font-size: 1.25rem;
            margin-top: 1rem;
        }

        .website-link {
            color: white;
            text-decoration: none;
            display: inline-block;
            margin-top: 1rem;
        }

        .social-icons a {
            color: white;
            font-size: 1.5rem;
            margin-right: 1rem;
            text-decoration: none;
        }

        .header-image img {
            border-radius: 50%;
            max-width: 100%;
            height: 500px;
            width: 500px;
        }


        .news-box {
            position: relative;
            color: white;
        }

        .news-box img {
            width: 100%;
            height: auto;
        }

        .news-caption {
            position: absolute;
            bottom: 0;
            background: rgba(0, 0, 0, 0.6);
            padding: 10px;
        }

        .editorial-box {
            background-color: #535657;
            color: white;
            padding: 20px;
        }

        .editorial-img {
            width: 100%;
            height: auto;
        }

        .card-body {
            color: white;
            background-color: #535657;
        }

        .warp{

            display: flex;
            overflow: auto;
        }
        .warp .item{

            margin-right:100px ;
        }

        .warp::-webkit-scrollbar{
            width: 0;
        }

    </style>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid position-relative ">
            <a style="color: white" class="navbar-brand" href="#"><b>PT.SEJAHTERA</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse  " id="navbarNav">
                <ul class="navbar-nav  ">
                    <li class="nav-item"><div class="position-absolute top-50 start-50 translate-middle">
                         <h1><a style="color: white" class="nav-link active" aria-current="page" href="#">Home</a></h1>
                    </div>

                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- Fullscreen Header Section -->
    <section class="header-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="header-content">
                        <h1>Web <span class="text-highlight">PT.SEJAHTERA</span></h1>
                        <p>Selamat datang di PT.SEJAHTERA, perusahaan ini didedikasikan untuk membantu Anda menciptakan
                            dan mengelola website profesional dengan mudah dan efisien. Di sini, Anda akan menemukan
                            berbagai layanan, sumber daya berharga, dan panduan dari para ahli dalam dunia web
                            development, untuk mendukung kebutuhan bisnis dan pribadi Anda. Kami berkomitmen untuk
                            menyediakan solusi pembuatan website yang cepat, aman, dan responsif, guna membantu Anda
                            membangun kehadiran digital yang kuat dan sukses.</p>
                        <a href="https://yourwebsite.com" class="website-link">www.yourwebsite.com</a>
                        <div class="social-icons mt-3">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <div class="header-image">
                        <img src="https://i.pinimg.com/564x/1f/87/b2/1f87b29a2df46100a75aa86b170a21cb.jpg"
                            alt="Profile Image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end header -->

    <!-- Visi Misi -->
    <div class="d-flex">
        <div style="width: 45%" class="  card ms-5 me-5 mt-3">

            <div class="card-body rounded">
                <h3 class="card-title"><b>Visi</b></h3>
                <p class="card-text">Menjadi pemimpin dalam inovasi digital yang menghubungkan dan memberdayakan
                    individu serta bisnis di seluruh dunia, dengan solusi yang cerdas, inklusif, dan berkelanjutan.
                </p>

            </div>
        </div>
        <div style="width: 45%" class="card mt-3">

            <div class="card-body rounded">
                <h3 class="card-title">Misi</h3>
                <p class="card-text">
                    - Inovasi Berkelanjutan: Mengembangkan teknologi dan platform digital yang inovatif
                    untuk memenuhi kebutuhan pengguna dan bisnis di era digital.<br>
                    - Pengalaman Pengguna: Menciptakan pengalaman pengguna yang intuitif dan menyenangkan melalui desain
                    yang user-friendly dan layanan pelanggan yang responsif.<br>
                    - Aksesibilitas: Mendorong akses teknologi yang merata dan inklusif, memastikan semua orang,
                    termasuk
                    mereka di daerah terpencil, dapat menikmati manfaat digital.<br>
                    - Keamanan dan Privasi: Menjaga keamanan dan privasi data pengguna dengan mematuhi standar tertinggi
                    dalam keamanan siber dan perlindungan data.<br>
                    - Tanggung Jawab Sosial: Berkontribusi pada pengembangan masyarakat melalui program-program yang
                    mendukung pendidikan digital, literasi teknologi, dan keberlanjutan lingkungan.</p>
                            
            </div>
        </div>
    </div>
    <!-- Visi Misi -->
<div class=" container">
    <div class="warp mt-5">
        @foreach ($data as $item)


        <div class="item text-center "><div class="card border-light  " style="width: 220px;">
            <img src="https://ds393qgzrxwzn.cloudfront.net/resize/m500x500/cat1/img/images/0/v9Za1zw7E7.jpg" class="card-img-top" alt="...">
            <div style="height: 200px" class="card-body bg-dark rounded-bottom">
              <h5 class="card-title">{{$item['name']}}</h5>
              <p class="card-text">{{$item['jobTitle']}}</p>
              <p class="card-text">{{$item['email']}}</p>


            </div>
          </div></div>
       @endforeach
      </div>
    </div>

</div>


<!-- start berita -->
    <div class="container mt-3">
        <div class="row">
            <!-- Main News Block -->
            <div class="col-md-8">
                <div class="news-box rounded-2">
                    <img class="rounded"  src="https://smknegeri1binjai.sch.id/wp-content/uploads/2024/08/kemer-600x450.jpg"
                        alt="Main News Image">
                    <div class="news-caption rounded-2">
                        <h5>12 November 2024</h5>
                        <h2>Tren Desain Website 2024: Responsif, Minimalis, dan Berfokus pada Pengalaman Pengguna</h2>
                    </div>
                </div>
            </div>
            <!-- Right Column -->
            <div class="col-md-4">
                <div class="editorial-box rounded">
                    <img  src="https://smknegeri1binjai.sch.id/wp-content/uploads/2024/08/kemer-600x450.jpg"
                        alt="Editorial Image" class="editorial-img mb-3 rounded">
                    <h3>Mansor Whitening</h3>
                    <p>Kepala Direktur</p>
                    <hr>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Menjadi Pelopor untuk perkembangan dunia digital</a>
                        </li>
                        <li><a href="#" class="text-white">Salah Satu Pendiri yg Berkompeten</a></li>
                        <li><a href="#" class="text-white">Memonitoring dan menjadi mentor untuk para
                                karyawan</a></li>
                        <li><a href="#" class="text-white">Membentuk Karakter </a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <!-- Other News Blocks -->
            <div class="col-md-4">
                <div   class="news-box rounded-2">
                    <img class="rounded" src="https://smknegeri1binjai.sch.id/wp-content/uploads/2024/08/kemer-600x450.jpg"
                        alt="News Image 1">
                    <div class="news-caption rounded-2">
                        <h5>3 Oktober 2024</h5>
                        <h4>Tips Membangun Website Bisnis yang Efektif untuk Meningkatkan Penjualan Online</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="news-box rounded-2">
                    <img class="rounded" src="https://smknegeri1binjai.sch.id/wp-content/uploads/2024/08/kemer-600x450.jpg"
                        alt="News Image 2">
                    <div class="news-caption rounded-2">
                        <h5>17 September 2024</h5>
                        <h4>Keamanan Website di Era Digital: Cara Melindungi Data Pengguna dari Ancaman Cyber</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="news-box rounded-2">
                    <img class="rounded" src="https://smknegeri1binjai.sch.id/wp-content/uploads/2024/08/kemer-600x450.jpg"
                        alt="News Image 3">
                    <div class="news-caption rounded-2">
                        <h5>25 Oktober 2024</h5>
                        <h4>Platform Pembuat Website Terbaik Tahun Ini: Mana yang Tepat untuk Anda?</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- end berita -->

<!-- footer -->
<footer class="text-white text-center text-lg-start mt-3" style="background-color:#535657">
  <div class="container p-4">
    <div class="row d-flex justify-content-center">
      <!-- Section: About -->
      <div class="col-lg-4 col-md-6 mb-4">
        <h5 class="text-uppercase">Tentang Kami</h5>
        <p>
          Kami mendedikasikan perusahaan ini untuk menjadi penyedia website untuk membantu usaha anda.
        </p>
      </div>
      <!-- Section: Links -->
      <div class="col-lg-4 col-md-6 mb-4">
        <h5 class="text-uppercase">Isi</h5>
        <ul class="list-unstyled mb-0">
          <li><p  class="text-white">Home</p></li>
          <li><p  class="text-white">Visi Misi</p></li>
          <li><p  class="text-white">Karyawan</p></li>
          <li><p  class="text-white">Berita</p></li>
        </ul>
      </div>
      <!-- Section: Contact -->
      <div class="col-lg-4 col-md-12 mb-4">
        <h5 class="text-uppercase">Contact</h5>
        <p>Email: mysejahter@gmail.com</p>
        <p>Phone: +6283625364785</p>
      </div>
    </div>
  </div>

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2024 Copyright:
    <a class="text-white" href="http://127.0.0.1:8000/">PT.SEJAHTERA.com</a>
  </div>
</footer>
<!-- end-footer -->
</x-layout>
