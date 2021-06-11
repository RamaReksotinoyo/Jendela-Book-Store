<div class="container-fluid">
    <!-- <h4>Detail Pesanan <div class="btn btn-sm btn-success">No.Invoice: <?php 
        echo $invoice->id ?></div></h4> -->

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Id.Buku</th>
            <th>Judul Buku</th>
            <th>Harga Satuan</th>
            <th>Sub_Total</th>
        </tr>

        <?php
        $total=0;
        foreach($pesanan as $psn) : 
            $sub_total = $psn->jumlah * $psn->harga;
            $total+=$sub_total;
        ?>

        <tr>
            <td><?php echo $psn->id_buku ?></td>
            <td><?php echo $psn->nama_buku ?></td>
            <td><?php echo $psn->jumlah ?></td>
            <td><?php echo number_format($psn->harga)  ?></td>
            <td><?php echo number_format($sub_total) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>