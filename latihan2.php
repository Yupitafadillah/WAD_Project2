<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Kalkulator Project2</title>
</head>
<body>
    <h3>Kalkulator Project2</h3>
    <form method="post" action="hitung.php">

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Pilih Operasi
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Penjumlahan</a></li>
                <li><a class="dropdown-item" href="#">Pengurangan</a></li>
                <li><a class="dropdown-item" href="#">Perkalian</a></li>
            </ul>
        </div>
        <div class="mb-3">
        <label for="angka1" class="form-label">masukan angka ke 1</label>
        <input type="number" name='angka1' id="angka1" required>
        <div id="emailHelp" class="form-text">Ayo masukan angka pertamamu</div>
      </div>
      <div class="mb-3">
        <label for="angka2" class="form-label">masukan angka ke 2</label>
        <input type="number" name='angka2' id="angka2" required>
        <div id="emailHelp" class="form-text">Ayo masukan angka  pertamamu</div>
      </div>
      </div>
      <button type="hitung" class="btn btn-primary" fdprocessedid="lmwsop">Submit</button>
    </form>
</body>
</html>
