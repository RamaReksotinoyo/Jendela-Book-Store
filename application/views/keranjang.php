<div class="container-fluid">
    <h3> Keranjang Belanja</h3>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>No.</th>
            <th>Judul Buku</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Sub-Total</th>
        </tr>

        <?php  
        $no=1;
        foreach ($this->cart->contents() as $items) : ?>
       
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $items['name'] ?></td>
                <td><?php echo $items['qty'] ?></td>
                <td>Rp.<?php echo number_format( $items['price']) ?></td>
                <td>Rp.<?php echo number_format( $items['subtotal']) ?></td>
            </tr>

        <?php endforeach; ?>

        <tr>
            <td colspan="4"></td>
            <td>Rp. <?php echo number_format($this->cart->total()) ?></td>
            </tr>
    </table>
    <div align=right>
            <a href="<?php echo base_url('dashboard_controller/hapus_keranjang') ?>"><div class="btn btn-sm btn-danger">Hapus Keranjang</div></a>
            <a href="<?php echo base_url('dashboard_controller/index') ?>"><div class="btn btn-sm btn-primary">Lanjutkan Belanja</div></a>
            <a href="<?php echo base_url('dashboard_controller/pembayaran') ?>"><div class="btn btn-sm btn-success">Pembayaran</div></a>
    </div>
</div>