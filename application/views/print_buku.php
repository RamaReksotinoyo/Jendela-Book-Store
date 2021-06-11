<!DOCTYPE html>
<html><head>
	<title></title>
	

</head><body>
    <table border=2>
    <tr>
        <th>NO</th>
        <th>NAMA BUKU</th>
        <th>KATEGORI</th>
        <th>HARGA</th>
        <th>STOK</th>
    </tr>

    <?php
    $no= 1;
    foreach ($buku as $bk ): ?>
    <tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $bk->nama_buku ?></td>
    <td><?php echo $bk->kategori ?></td>
    <td><?php echo $bk->harga ?></td>
    <td><?php echo $bk->stok ?></td>
    </tr> 
    <?php endforeach; ?>
    </table>
    <script type="text/javascript">
        window.print();
    </script>
	
			
</body></html>