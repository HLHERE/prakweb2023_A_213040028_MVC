<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman web <?= $data['judul'];?></title>
    <link rel="stylesheet" href="<?= BASEURL;?>/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= BASEURL;?>">MELLORINE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= BASEURL;?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?= BASEURL;?>/about">About me</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?= BASEURL;?>/mahasiswa">Mahasiswa</a>
        </li>
    </div>
  </div>
</nav>
    
