<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="alert alert-dark" role="alert">
                <?php
                $total_keranjang=0;
                if($keranjang=$this->cart->contents()){
                    foreach($keranjang as $item){
                        $total_keranjang = $total_keranjang + $item['subtotal'];
                    }
                    echo "<h3>Total Belanja Rp. ".number_format($total_keranjang);
                    
                
                ?>
                <br> <br>
                <form method="post" action="<?php echo base_url(). 'dashboard_controller/proses_pesanan' ?>">
                    
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control"  placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">No. Telepon</label>
                            <input type="text" name="telp" class="form-control"  placeholder="No. Telepon">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Alamat Email</label>
                            <input type="email" name="email" class="form-control"  placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Jasa Pengiriman</label>
                            <select class="form-control" >
                            <option>JNE</option>
                            <option>Pos Indonesia</option>
                            <option>Tiki</option>
                            <option>Gojek</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Pembayaran</label>
                            <select class="form-control" >
                            <option>BRI - 123</option>
                            <option>BNI - 456</option>
                            <option>BCA - 789</option>
                            <option>Mandiri - 696</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat Lengkap</label>
                            <textarea class="form-control" name="alamat"  rows="3"></textarea>
                        </div>
                        
                        <button class="btn btn-primary " type="submit" >Pesan</button>
                </form>
                <?php
                    }else{
                        echo "<h3>Anda Tidak Memesan Buku Apapun</h3>";
                    }
                ?>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>