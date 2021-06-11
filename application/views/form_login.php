

<body class="bg-gradient-light">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5 bg-gradient-dark">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-white-900 mb-4">JENDELA BOOK STORE </h1>
                    
                  </div>
                  <?php echo $this->session->flashdata('pesan'); ?>
                  <form method="post" action="<?php echo base_url('auth/login') ?>"  class="user">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" 
                      placeholder="Masukan Username" name="username">
                      <?php echo form_error('username', '<div class="text-danger small">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" 
                      placeholder="Masukan Password" name="password">
                      <?php echo form_error('password', '<div class="text-danger small">', '</div>'); ?>
                    </div>
                    <div class="form-group">

                    </div>
                    <button type="submit" class="btn btn-primary form-control">Login</button>
                    <div class="text-center mt-3">
                        <a class="small" href="<?php echo base_url('registrasi/index'); ?>">Buat Akun</a>
                    </div>
                    

                  </form>
                  <hr>

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>



</html>