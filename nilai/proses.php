<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Form Nilai</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<style>  
   body{
        background-color: #ffda79;
        
    }
</style>
</head>
<body>
<body style="margin: 50px">
<form action="proses.php" method="get">

<fieldset>

<!-- Form Name -->
<legend>Form Nilai Mahasiswa</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nama Lengkap</label>  
  <div class="col-md-4">
  <input id="nama" name="nama" type="text" placeholder="Masukan Nama" class="form-control input-md">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Mata Kuliah</label>
  <div class="col-md-4">
    <select id="matkul" name="matkul" class="form-control">
      <option value="Pilih MataKuliah">Pilih MataKuliah</option>
      <option value="Pemrograman Web2">Pemrograman Web2</option>
      <option value="Bahasa Inggris">Bahasa Inggris</option>
      <option value="Statistik dan Probabilitas">Statistik dan Probabilitas</option>
      <option value="Pancasila dan Pendidikan Kewarganegaraan">Pancasila dan Pendidikan Kewarganegaraan</option>
      <option value="Keterampilan Komunikasi">Keterampilan Komunikasi</option>
      <option value="User Interface and Experience">User Interface and Experience</option>
      <option value="Jaringan Komputer">Jaringan Komputer</option>
      <option value="Basis Data">Basis Data</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nilai UTS</label>  
  <div class="col-md-4">
  <input id="nilai_uts" name="nilai_uts" type="text" placeholder="Masukan Nilai UTS" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nilai UAS</label>  
  <div class="col-md-4">
  <input id="nilai_uas" name="nilai_uas" type="text" placeholder="Masukan Nilai UAS" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nilai Tugas/Praktikum</label>  
  <div class="col-md-4">
  <input id="nilai_tugas" name="nilai_tugas" type="text" placeholder="Masukan Nilai Tugas" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="proses" name="proses" class="btn btn-primary">Simpan</button>
  </div>
</div>

</fieldset>
</form>
<?php
echo '<br>';
echo 'Nama Mahasiswa: '.$_GET['nama'].'<br/>';
echo 'Mata Kuliah : '.$_GET['matkul'].'<br/>';
echo 'Nilai UTS : '.$_GET['nilai_uts'].'<br/>';
echo 'Nilai UAS : '.$_GET['nilai_uas'].'<br>';
echo 'Nilai Tugas : '.$_GET['nilai_tugas'];
?>

</body>
</html>