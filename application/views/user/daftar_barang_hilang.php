<div class="card p-4">
  <div class="card-title text-center text-white">
    <h2>Daftar Barang Hilang</h2>
    <div class="overflow-auto">
    <?php foreach($barang as $row): ?>
      <div class="row mb-2" style="background-color: rgba(133, 49, 43, 0.8);">
        <div class="col-lg-3 d-md-none d-sm-none d-xs-none"></div>
        <div class="col-lg-5 col-md-6 col-sm-6 col-xs-6 text-left my-auto">
          <h5 class="ml-md-4 ml-sm-4 ml-xs-4">Nama Barang : <?= $row['nama_barangtemu']; ?></h5>
          <h5 class="ml-md-4 ml-sm-4 ml-xs-4">Tanggal ditemukan : <?= $row['tanggal_barangtemu']; ?></h5>
          <h5 class="ml-md-4 ml-sm-4 ml-xs-4">Lokasi ditemukan : <?= $row['lokasi_barangtemu']; ?></h5>
          <a href="<?= base_url('Detail_barang_hilang/index/'.$row['id_barangtemu']); ?>" class="text-dark ml-md-4 ml-sm-4 ml-xs-4">Lihat Selengkapnya >></a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 text-left">
          <img src="<?= base_url('assets/images/BarangHilang/'.$row['foto_barangtemu']); ?>" class="img-fluid mt-1 mb-1 fotoBarangHilang" alt="">
        </div>
      </div>
    <?php endforeach; ?>
    </div>
  </div>
</div>
