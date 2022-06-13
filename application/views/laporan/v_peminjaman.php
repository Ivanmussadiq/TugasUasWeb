<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <style type="text/css">
         .tgl_akhir{
             margin-left: -20px;
         }
         .btn-filter{
             margin-left: -40px;
         }
         .btn-refresh{
             margin-left: -60px;
         }
         .btn-pdf{
             margin-left: -80px;
         }
    </style>
</head>

<body>
<div class="box">
            <div class="box-header">
              <form method="post" action="<?= base_url()?>laporan/peminjaman">
                  <div class="row">
                     <div class="col-md-3">
                         <h4 class="text-primary"><b>Filter Laporan Peminjaman</b></h4>
                     </div>

                     <div class="col-md-2">
                         <input type="text" name="tgl_awal" class="form-control" placeholder="Tanggal Awal" onfocus="(this.type='date')">
                     </div>

                     <div class="col-md-2">
                         <input type="text" name="tgl_akhir" class="form-control tgl_akhir" placeholder="Tanggal Akhir" onfocus="(this.type='date')">
                     </div>

                     <div class="col-md-1">
                         <button type="submit" class="btn btn-primary btn-block btn-filter"><i class="fa fa-filter"></i>Filter</button>
                     </div>

                     <div class="col-md-2">
                         <a href="<?= base_url()?>laporan/refresh" class="btn btn-warning btn-block btn-refresh"><i class="fa fa-refresh"></i>Refresh</a>
                     </div>

                     <div class="col-md-2">
                        <a href="<?= base_url()?>laporan/refresh" class="btn btn-danger btn-block btn-refresh"><i class="fa fa-file-pdf-o"></i>Booting</a>  
                     </div>
                  </div>
              </form>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id Peminjaman</th>
                  <th>Peminjam</th>
                  <th>Buku</th>
                  <th>Tanggal Pinjam</th>
                  <th>Tanggal Kembali</th>
                 
                </tr>
                </thead>

                <tbody>
                     <?php
                     foreach ($data as $row) {?>
                         <tr>
                             <td><?= $row->id_pm;?></td>
                             <td><?= $row->nama_anggota;?></td>
                             <td><?= $row->judul_buku;?></td>
                             <td><?= mediumdate_indo($row->tgl_pinjam);?></td>
                             <td><?= mediumdate_indo($row->tgl_kembali);?></td>
                         </tr>
                    <?php }
                     ?>
                  </tbody>
              </table>
            </div>
        </div>
</body>
</html>