<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Biodata</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: pink; 
            font-family: 'Times New Roman', serif; 
        }
    </style>
</head>

<body>
    <div class="container mt-4">
      <div class="card">
      <div class="card-header text-center font-weight-bold" style="background-color: purple; color: white;">
        <h1>---*****************---</h1>
          <h1>Biodata Mahasiswa</h1>
          <h1>---********************---</h1>
        </div>
        <div class="card-body">
          <h4>NIM : {{ $send->nim }}</h4>
          <h4>Nama Lengkap : {{ $send->fullname }}</h4>
          <h4>Jenis Kelamin : {{ $send->jeniskelamin }}</h4>
          <h4>Alamat : {{ $send->alamat }}</h4>
          <h4>Agama : {{ $send->agama }}</h4>
          <h4>Tanggal Lahir : {{ $send->tgllahir }}</h4>
          <h4>E-mail : {{ $send->email }}</h4>
          <h4>Hobi : {{ $send->hobi }}</h4>
        </div>
      </div>
    </div>
</body>
</html>