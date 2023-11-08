<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tugas Prognet</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/img/favicon.png" rel="icon">
  <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/css/style.css" rel="stylesheet">

  <!-- Pink Background Style -->
  <style>
    body {
      background-color: pink;
    }
  </style>

  <!-- =======================================================
  * Template Name: Laura
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/laura-free-creative-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex justify-content-end me-5 align-items-center header-transparent">
  <nav id="navbar" class="navbar">
    <ul>
      <li><a class="nav-link scrollto" href="/" style="font-size: 16px; font-weight: bold;">Home</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
  </nav><!-- .navbar -->
  
</header><!-- End Header -->


  <main id="main"><!-- Start main -->

  <!-- ======= Start Hasil Form ======= -->
  <div id="form" class="form-mf sect-pt4 route mt-4 mb-4">
    <div class="container mt-5">
    <h1 class="text-center mb-2">------------------------</h1>
      <h1 class="text-center mb-2">List Form Biodata</h1>
      <h3 class="text-center mb-2">Pemrograman Internet</h3>
      <h1 class="text-center mb-2">------------------------</h1>
      <table class="table table-bordered text-center">
      <thead>
        <tr>
          <th>NIM</th>
          <th>Nama Lengkap</th>
          <th>Jenis Kelamin</th>
          <th>Alamat</th>
          <th>Agama</th>
          <th>Tanggal Lahir</th>
          <th>E-mail</th>
          <th>Hobi</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <form action="/mahasiswa/create" method="get">
          <button class="badge bg-warning border-0 mb-2" type="submit">Data Baru</button>
        </form>
        @foreach ($data as $mahasiswa)
          <tr>
            <td>{{ $mahasiswa->nim }}</td>
            <td>{{ $mahasiswa->fullname }}</td>
            <td>{{ $mahasiswa->jeniskelamin }}</td>
            <td>{{ $mahasiswa->alamat }}</td>
            <td>{{ $mahasiswa->agama }}</td>
            <td>{{ $mahasiswa->tgllahir }}</td>
            <td>{{ $mahasiswa->email }}</td>
            <td>{{ $mahasiswa->hobi }}</td>
            <td>
              <form action="/mahasiswa/{{ $mahasiswa->id }}/edit" method="GET">
              <button class="badge bg-info border-0">Edit</button>
              </form>
              <form action="/mahasiswa/{{ $mahasiswa->id }}" method="POST" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Apa Anda yakin menghapus data ini?')">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
      </table>
    </div>
  </div>
  <!-- ======= End Hasil Form ======= -->

</main><!-- End #main -->

  <!-- Vendor JS Files -->
  <script src="/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/vendor/typed.js/typed.umd.js"></script>
  <script src="/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/js/main.js"></script>
</body>

</html>