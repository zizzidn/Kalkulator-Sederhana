<?php
error_reporting(0);
$angka1 = $_GET['angka1'] ?? '';
$angka2 = $_GET['angka2'] ?? '';
$hasil = '';

if(is_numeric($angka1) && is_numeric($angka2)){
  if(isset($_GET['tambah'])) {
    $hasil = $angka1 + $angka2;
  }elseif (isset($_GET['kurang'])) {
    $hasil = $angka1 - $angka2;
  }elseif (isset($_GET['kali'])) {
    $hasil = $angka1 * $angka2;
  }elseif (isset($_GET['bagi'])) {
    if($angka2 != 0){
      $hasil = $angka1 / $angka2;
    }else{
      $hasil = 'Error : Pembagian Dengan 0';
    }
  }
}elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && ($angka1 !== '' || $angka2 !== '')) {
  $hasil = 'Input Tidak Valid';
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Kalkulator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style type="text/css" media="all">
    body{
      background-color: white;
    }
    .calculator{
      max-width: 400px;
      margin: 80px auto;
      padding: 30px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }
    .btn-calc{
      width: 100%;
      margin-top: 10px;
    }
  </style>
</head>
  
<body>
  <div class="calculator">
    <h3 class="text-center mb-4">KALKULATOR</h3>
    <form method="GET" action="">
      <div class="mb-3">
        <label class="form-label">Angka 1</label>
        <input type="number" step="any" name="angka1" class="form-control" value="<?= htmlspecialchars($angka1) ?>" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Angka 2</label>
        <input type="number" step="any" name="angka2" class="form-control" value="<?= htmlspecialchars($angka2) ?>" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Hasil</label>
        <input type="text" name="hasil" class="form-control" value="<?= htmlspecialchars($hasil) ?>" readonly>
      </div>
      <div class="d-grid gap-2 d-md-flex justify-content-md-center">
        <button type="submit" name="tambah" class="btn btn-outline-primary">+</button>
        <button type="submit" name="kurang" class="btn btn-outline-danger">-</button>
        <button type="submit" name="kali" class="btn btn-outline-success">x</button>
        <button type="submit" name="bagi" class="btn btn-outline-warning">:</button>
        <a href="index.php" class="btn btn-secondary">Clear</a>
      </div>
    </form>
  </div>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>