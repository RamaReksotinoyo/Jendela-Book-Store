<div class="container-fluid">
    <div class="row text-center">
    <?php foreach ($diskon as $bk) : ?>
        <div class="card ml-5   " style="width: 18rem;">
            <img src="<?php echo base_url().'/uploads/agamafilsafat/'.$bk->gambar ?> " width="200px" height="350px" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $bk->nama_buku ?></h5>
                <span class="badge badge-dark">Rp. <?php echo number_format($bk->harga)  ?></span><br>
                <?php echo anchor ('dashboard_controller/tambah_ke_keranjang/'.$bk->id_buku, '<div class=
                "btn btn-sm  btn-success" > Tambah ke Keranjang</div>') ?>
            </div>
        </div>
    <?php endforeach ?>
    </div>
</div>