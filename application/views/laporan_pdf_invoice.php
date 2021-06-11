<div class="container-fluid">
  <div class="alert alert-success">
  <h3 align="center">Tabel Data Buku</h3><br>
  </div><br><br><br>
  <table class="table table-bordered" align="center">
        <tr>
            <th>ID</th>
            <th>NAMA PEMESAN</th>
            <th>ALAMAT PEMESAN</th>
            <th>TANGGAL PEMESANAN</th>
            <th>BATAS PEMBAYARAN</th>
            
        </tr>
        <?php 
        $no=1;
        foreach ($invoice as $in ): ?>
            <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $in->nama ?></td>
            <td><?php echo $in->alamat ?></td>
            <td><?php echo $in->tgl_pesan ?></td>
            <td><?php echo $in->batas_bayar ?></td>
            </tr> 
    <?php endforeach; ?>
	
			
</body></html>