<div class="container-fluid">
    <h4>Pemesanan Buku</h4>
    <!-- <a class="btn btn-outline-dark" href="<?php echo base_url('admin/invoice/print') ?>">Cetak</a> -->
    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Id Invoice</th>
            <th>Nama Pemesan</th>
            <th>Alamat Pemesan</th>
            <th>Tanggal Pemesanan</th>
            <th>Batas Pembayaran</th>
            <th>Aksi</th>
        </tr>

        <?php 
                $total=0;
                foreach ($invoice as $in): 
                    
        ?> 
            <tr> 
                    <td><?php echo $in->id ?></td>
                    <td><?php echo $in->nama ?></td>
                    <td><?php echo $in->alamat ?></td>
                    <td><?php echo $in->tgl_pesan ?></td>
                    <td><?php echo $in->batas_bayar ?></td>
                    <td><?php echo anchor('admin/invoice/detail/'.$in->id, 
                    '<div class="btn btn-sm btn-primary">Detail</div>') ?></td> 

            </tr>

        <?php endforeach; ?>



    </table>
</div>


