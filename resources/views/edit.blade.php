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
<h1 class="text-center mb-2">------------------------</h1>
      <h1 class="text-center mb-2">Form Biodata</h1>
      <h3 class="text-center mb-2">Pemrograman Internet</h3>
      <h1 class="text-center mb-2">------------------------</h1>
        <form name="formBiodata" action="/mahasiswa/{{ $mahasiswa->id }}" method="post" onsubmit="return validateForm()">
        @csrf
        @method('put')
        <div class="form-group mb-3">
            <label><strong>NIM :</strong></label>
            <input type="text" name="nim" id="nim" placeholder="NIM" class="form-control" value="{{ $mahasiswa-> nim }}">
          </div>
          <div class="form-group mb-3">
            <label><strong>Nama lengkap :</strong></label>
            <input type="text" name="fullname" id="fullname" placeholder="Nama Lengkap" class="form-control"value="{{ $mahasiswa-> fullname}}">
          </div>
          <div>
            <label"><strong>Jenis Kelamin :</strong></label>
            <p><input class="me-1" type='radio' name='jeniskelamin' id="jeniskelamin" value='Laki - Laki' @if ($mahasiswa->jeniskelamin=='Laki - Laki'){{ "checked" }} @endif >Laki - Laki</p>
            <p><input class="me-1" type='radio' name='jeniskelamin' id="jeniskelamin" value='Perempuan'@if ($mahasiswa->jeniskelamin=='Perempuan'){{ "checked" }} @endif >Perempuan</p>
            <p><input class="me-1" type='radio' name='jeniskelamin' id="jeniskelamin" value='Yang Lain'@if ($mahasiswa->jeniskelamin=='Yang Lain'){{ "checked" }} @endif>Yang Lain</p>
          </div>
          <div class="form-group mb-3">
            <label><strong>Alamat :</strong></label>
            <input type="text" name="alamat" id="alamat" placeholder="Alamat" class="form-control"value="{{ $mahasiswa-> alamat }}">
          </div>
          <div class="form-group mb-3">
            <label><strong>Agama :</strong></label>
            <select name="agama" id="agama" class="form-control">
              <option selected>Agama</option>
              <option value="Hindu"@if ($mahasiswa->agama=='Hindu'){{ "selected" }} @endif >Hindu</option>
              <option value="Islam"@if ($mahasiswa->agama=='Islam'){{ "selected" }} @endif >Islam</option>
              <option value="Kristen Protestan"@if ($mahasiswa->agama=='Kristen Protestan'){{ "selected" }} @endif >Kristen Protestan</option>
              <option value="Kristen Katolik"@if ($mahasiswa->agama=='Kristen Katolik'){{ "selected" }} @endif >Kristen Katolik</option>
              <option value="Konghucu"@if ($mahasiswa->agama=='Konghucu'){{ "selected" }} @endif >Konghucu</option>
            </select>
          </div>
          <div class="form-group mb-3">
            <label><strong>Tanggal Lahir :</strong></label>
            <input type="date" name="tgllahir" id="tgllahir" class="form-control" placeholder="Tanggal Lahir"value="{{ $mahasiswa-> tgllahir }}">
          </div>
          <div class="form-group mb-3">
            <label><strong>Email :</strong></label>
            <input type="email" name="email" id="email" placeholder="name@example.com" class="form-control"value="{{ $mahasiswa-> email }}">
          </div>
          <div class="form-group mb-3">
            <label><strong>Hobi :</strong></label>
            <input type="text" name="hobi" id="hobi" class="form-control" placeholder="Hobi"value="{{ $mahasiswa-> hobi }}">
          </div>
          <div>
            <button type="submit" name="submit" class="btn btn-primary mb-4">Submit</button>
          </div>
        </form>
      </div>
    <script>
      function validateForm() {
        // Validasi NIM
        if (document.forms["formBiodata"]["nim"].value == "") {
            alert("Masukkan NIM Anda");
            document.forms["formBiodata"]["nim"].focus();
            return false;
        }
        // Validasi Nama Lengkap
        if (document.forms["formBiodata"]["fullname"].value == "") {
            alert("Masukkan Nama Lengkap Anda");
            document.forms["formBiodata"]["fullname"].focus();
            return false;
        }
        // Validasi Jenis Kelamin
        var jeniskelamin = document.getElementsByName('jeniskelamin');
        var genValue = false;
          for(var i=0; i<jeniskelamin.length;i++){
            if(jeniskelamin[i].checked == true){
                genValue = true;    
            }
          }
          if(!genValue){
            alert("Pilih Jenis Kelamin Anda");
            return false;
          }
        // Validasi Alamat
        if (document.forms["formBiodata"]["alamat"].value == "") {
            alert("Masukkan Alamat Anda");
            document.forms["formBiodata"]["alamat"].focus();
            return false;
        }
        // Validasi Agama
        if (document.forms["formBiodata"]["agama"].selectedIndex < 1) {
            alert("Pilih Agama Anda");
            document.forms["formBiodata"]["agama"].focus();
            return false;
        }
        // Validasi Tanggal Lahir
        if (document.forms["formBiodata"]["tgllahir"].value == "") {
            alert("Masukkan Tanggal Lahir Anda");
            document.forms["formBiodata"]["tgllahir"].focus();
            return false;
        }
        // Validasi E-mail
        if (document.forms["formBiodata"]["email"].value == "") {
            alert("Masukkan E-mail Aktif Anda");
            document.forms["formBiodata"]["email"].focus();
            return false;
        }
        // Validasi Hobi
        if (document.forms["formBiodata"]["hobi"].value == "") {
            alert("Masukkan Hobi Anda");
            document.forms["formBiodata"]["hobi"].focus();
            return false;
        }
      }
    </script>
</body>
</html>