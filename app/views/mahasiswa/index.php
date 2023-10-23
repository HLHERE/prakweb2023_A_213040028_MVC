<div class="container mt-2">

  <div class="row">
     <div class="col-lg-6">
      <?php Flasher::flash();?>
     </div> 
  </div>
  <div class="row mb-3">
        <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
            Tambah Data Mahasiswa
        </button>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-6">
        <!-- Button trigger modal -->
          <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="cari mahasiswa..."name="keyword" id="keyword"
              autocomplete="off">
              <div class="input-group-append">
                  <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                  </div>
              </div>
          </form>


            <h3>daftar mahasiswa</h3>
            <ul class="list-group">
                 <?php foreach( $data['mhs'] as $mhs ) : ?>
                 <li class="list-group-item ">
                    <?= $mhs['nama']; ?>
                    <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" 
                    class="btn btn-danger float-end ms-1" onclick="return confirm('jinja??');">hapus</a>
                    <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" 
                    class="btn btn-primary float-end ms-1 tampilModalUbah" data-bs-toggle="modal" data-bs-target = "#formModal"  data-id="<?= $mhs['id'] ?>">ubah</a>
                    <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" 
                    class="btn btn-secondary float-end ms-1 ">detail</a>
                 </li>
                 <?php endforeach; ?>
             </ul>

        </div>
    </div>
</div>



<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formModalLabel">tambah mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="<?=BASEURL;?>/mahasiswa/tambah" method="post">
        <input type="hidden" name="id" id="id">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama"  name="nama"> 
      </div>
      <div class="mb-3">
            <label for="nrp" class="form-label">NRP</label>
            <input type="number" class="form-control" id="nrp"  name="nrp"> 
      </div>

      <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email"  name="email" placeholder="email@example.com"> 
      </div>
      <div class="form-group">
            <label for="jurusan">jurusan</label>
            <select class="form-control" id="jurusan" name="jurusan">
                <option value ="Teknik Informatika">Teknik Informatika</option>                     
                <option value ="Teknik Pedang">Teknik Pedang</option>                     
                <option value ="Tata Boga">TataBoga</option>                     
                <option value ="Design Interior">Design Interior</option>                     
                <option value ="Design Komunikasi Visual">Design Komunikasi Visual</option>                     
                <option value ="Perfilman">Perfilman</option>                     
            </select>
        </div>
    
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">tambah data</button>
        </form>
      </div>
    </div>
  </div>
</div>

