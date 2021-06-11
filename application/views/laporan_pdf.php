<div class="container-fluid">
  <div class="alert alert-success">
  <h3 align="center">Tabel Data Buku</h3><br>
  </div><br><br><br>
  <table class="table table-bordered" align="center">
        <tr>
            <th>No.</th>
            <th>Nama Buku</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            
        </tr>
        <?php 
        $no=1;
            foreach ($buku as $bk ): ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $bk->nama_buku ?></td>
                <td><?php echo $bk->kategori ?></td>
                <td><?php echo $bk->harga ?></td>
                <td><?php echo $bk->stok ?></td>
                
    <?php endforeach; ?>
	
			
</body></html>