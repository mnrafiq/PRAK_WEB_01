<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<style>
    body{
        background-color: #ffda79;
    }
    .container{
      background-color: white;
      border: 2px solid white;
      border-radius: 1em;
      padding: 6px 6px 6px 6px;
    }
</style>
</head>
<body>
<body style="margin: 50px">
<form action="proses.php" method="post"
<fieldset>

<!-- Form Name -->
<legend>Form Belanja Online</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Customer</label>  
  <div class="col-md-4">
  <input id="customer" name="customer" type="text" placeholder="Nama Customer" class="form-control input-md">
    
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="produk">Pilih Produk</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="produk-0">
      <input type="radio" name="produk" id="produk-0" value="tv" checked="checked">
      TV
    </label> 
    <label class="radio-inline" for="produk-1">
      <input type="radio" name="produk" id="produk-1" value="kulkas">
      KULKAS
    </label> 
    <label class="radio-inline" for="produk-2">
      <input type="radio" name="produk" id="produk-2" value="mesin cuci">
      MESIN CUCI
    </label> 
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Jumlah</label>  
  <div class="col-md-4">
  <input id="jumlah" name="jumlah" type="text" placeholder="Masukan Jumlah" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="proses" name="proses" class="btn btn-success">Kirim</button>
  </div>
</div>

</fieldset>
</form>
<div class="col-sm-4">
    <div class="container">
    <ul class="list-group">
        <li class="list-group-item active" aria-current="true">Daftar Harga</li>
        <li class="list-group-item">TV : Rp.4.200.000</li>
        <li class="list-group-item">Kulkas : Rp.3.100.000</li>
        <li class="list-group-item">Mesin Cuci : Rp.3.800.000</li>
        <li class="list-group-item active" aria-current="true">Harga Dapat Berubah Setiap Saat</li>
    </ul>
    </div>
</body>
</html>
<?php
$proses= $_POST['proses'];
$customer= $_POST['customer'];
$produk= $_POST['produk'];
$jumlah= $_POST['jumlah'];

echo 'Proses : '.$proses;
echo '<br/>Customer : '.$customer;
echo '<br/>Produk : '.$produk;
echo '<br/>Jumlah Pembelian : '.$jumlah;

function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
 
}
if ($produk == "tv"){
  $total = 4200000 * $jumlah;
  echo '<br/>Total Belanja :'.rupiah($total);
}
elseif ($produk == "kulkas"){
  $total = 3100000 *$jumlah;
  echo '<br/> Total Belanja :'.rupiah($total);
}
else{
  $total = 3800000*$jumlah;
  echo '<br/>Total belanja :'.rupiah($total);
}
?>
</html>