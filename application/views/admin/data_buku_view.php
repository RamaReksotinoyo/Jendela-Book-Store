<div class="container fluid">
    <button class="btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_buku">Tambah Barang</button>
    <a class="btn btn-outline-dark" href="<?php echo base_url('admin/data_buku/print') ?>">Cetak</a>
    <table class="table table-bordered" >
        <tr align="center">
            <th>No.</th>
            <th>Nama Buku</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php
        $no=1;
        foreach ($buku as $bk) : ?>
        <tr align="center">
            <td><?php echo $no++ ?>.</td>
            <td><?php echo $bk->nama_buku ?></td>
            <td><?php echo $bk->kategori ?></td>
            <td><?php echo $bk->harga ?></td>
            <td><?php echo $bk->stok ?></td>
            <td><?php echo anchor('admin/data_buku/edit/' .$bk->id_buku, '<div 
            class="btn btn-primary btn-sm ">Edit</div>') ?></td>
            <td><?php echo anchor('admin/data_buku/hapus/' .$bk->id_buku, '<div 
            class="btn btn-danger btn-sm ">Hapus</div>') ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>


<!-- Modal -->
<div class="modal fade" id="tambah_buku" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Masukan Buku</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="<?php echo base_url(). 'admin/data_buku/tambah_aksi';?>" 
            method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label >Nama Buku</label>
                    <input type="text" name="nama_buku" class="form-control">
                </div>
                <div class="form-group">
                    <label >Kategori</label>
                    <input type="text" name="kategori" class="form-control">
                </div>
                <div class="form-group">
                    <label >Harga</label>
                    <input type="text" name="harga" class="form-control">
                </div>
                <div class="form-group">
                    <label >Stok</label>
                    <input type="text" name="stok" class="form-control">
                </div>
                <div class="form-group">
                    <label >Tampilan Buku</label>
                    <input type="file" name="gambar" class="form-control">
                </div>

            
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
  </div>
</div>