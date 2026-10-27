<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>from data mahasiswa</h1>
    <form id="formmhs" onsubmit="tampildata(event)">
        <div class="mb-3">
            <label class= "form-label">nama Lengkap</label>
            <input type="text"id="nama" class= "form-control">
        </div>

        <div class="mb-3">
            <label class= "form-label">NIM</label>
            <input type="text"id="NIM" class= "form-control">
        </div>

        <div class="mb-3">
            <label class= "form-label">PRODI</label>
            <input type="text"id="PRODI" class= "form-control">
        </div>

        <button class="btn btn-primary">kirim data</button>

    </form>
    <div class="alert alert-succes mt-4"  role="alert">
        <h3 class ="alert-heading">data berhasil dikirim</h3>
       <p classs="mn-1"> nama: <span id="resnama"></span></p>
        <p classs="mn-1"> prodi: <span id="resprodi"></span></p>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>