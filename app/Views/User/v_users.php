<div class="col-md-12">
  <div class="card card-outline card-primary">
    <div class="card-header">
      <h3 class="card-title"><i class="far fa-folder"> </i><b><?= $judul ?></b></h3>

      <div class="card-tools">
        <!-- <a href="download-excel-Datapemuda.php" class="btn btn-success mb-0 pw-0 p-2">
          <i class="fas fa-file-excel mb-0 pw-0"> Download EXCEL</i></a> -->
        <a href="print-file-Datapemuda.php" class="btn btn-secondary mb-0 pw-0 p-2">
          <i class="fas fa-print mb-0 pw-0"> Print FILE</i></a>
        <a href="download-pdf-Datapemuda.php" class="btn btn-danger mb-0 pw-0 p-2">
          <i class="fas fa-file-pdf mb-0 pw-0"> Download PDF</i></a>
        <a href="<?= base_url('tambahuser') ?>" class="btn btn-flat btn-primary btn-xm">
          <i class="fas fa-plus"> <b>Tambah</b></i>
        </a>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered text-center">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Usia</th>
            <th>No Hp</th>
            <th>Email</th>
            <th>Alamat Rumah </th>
            <th>Asal Gereja</th>
            <th>Kode Gereja</th>
            <th>Status Anggota</th>
            <th>Profil</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1;
          foreach ($user as $key => $value) { ?>
            <tr>
              <td><?= $no++ ?></td>
              <td> <?= $value['nama_user'] ?></td>
              <td><?= $value['jenis_kelamin'] == 'L' ? 'Laki-Laki' : 'Perempuan' ?></td>
              <td><?= $value['umur'] ?></td>
              <td> <?= $value['nomor_hp'] ?></td>
              <td><?= $value['email'] ?></td>
              <td><?= $value['alamat'] ?></td>
              <td><?= $value['asal_gereja'] ?></td>
              <td><?= $value['kode_gereja'] ?></td>
              <td><?= $value['status_anggota'] ?></td>
              <td><?= $value['profile'] ?></td>
              <td class='..d-flex gap-1'>
                <a href='#' class='btn btn-sm btn-outline-success rounded-0'>Edit</a>
                <a href='#' class='btn btn-sm btn-outline-danger rounded-0'>Delete</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>