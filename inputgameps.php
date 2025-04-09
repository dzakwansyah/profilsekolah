<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD game ps</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <h1>Tugas CRUD Tentang Game PS (DAFFADJ)</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
  <div class="container-fluid">
    <h2 class="display-4">Game PS</h2>
    <form action="inputgameps_aksi.php" method="POST">
    <div class="mb-3">
    <label for="id" class="form-label" >Id Pembeli</label>
    <input for="email" class="form-control" placeholder="idnya" name="id">
  </div>
    <div class="mb-3">
    <label for="nama" class="form-label">Nama Pembeli</label>
    <input for="text" class="form-control" placeholder="Nama Lengkap" name="fnama">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Alamat Email</label>
    <input for="email" class="form-control" placeholder="name@example.com" name="femail">
  </div>
  <div class="mb-3">
    <label for="komentar" class="form-label">Jumlah Game PS</label>
    <textarea class="form-control"  name="fjumlah"></textarea>
  </div>
  <div class="mb-3">
    <label for="komentar" class="form-label">Nama Game PS</label>
    <textarea class="form-control"  name="fgame"></textarea>
  </div>
  <div class="mb-3">
    <label for="id" class="form-label" >Genre Game</label>
    <input for="komentar" class="form-control" placeholder="genrenya" name="fgg">
  </div>
  <div class="mb-3">
    <label for="id" class="form-label" >Tanggal Beli</label>
    <input for="komentar" class="form-control" placeholder="tglnya" name="ftgl">
  </div>
  <div class="mb-3">
    <label for="komentar" class="form-label">Instagram</label>
    <textarea class="form-control"  name="fig"></textarea>
  </div>
  <div>
    <input class="btn btn-primary" type="submit" value="kirim" name="kirim">
    <input class="btn btn-outline-primary" type="reset" value="batal">
  </div>
</form>
</html>