

<body class="bg-gradient-light">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg col-lg-6 my-5 mx-auto bg-gradient-dark">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-white-900 mb-4">Buat Akun Jendela Book</h1>
              </div>
              <form method="post" action="<?php echo base_url('registrasi/index') ?>" class="user">
              <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputEmail" 
                  placeholder="Nama Anda" name="nama">
                  <?php echo form_error('nama', '<div class="text-danger small ml-2">', '</div>') ?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputEmail" 
                  placeholder="Username" name="username">
                  <?php echo form_error('username', '<div class="text-danger small ml-2">', '</div>') ?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" 
                    placeholder="Password Anda" name="password1">
                    <?php echo form_error('password1', '<div class="text-danger small ml-2">', '</div>') ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" 
                    placeholder="Ulangi Password Anda" name="password2">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">Buat Akun</button>
                

              </form>
              <hr>

              <div class="text-center">
                <a class="small" href="<?php echo base_url('auth/login') ?>">Sudah Punya Akun? Login!</a>
              </div>
            </div>
          </>
        </div>
      </div>
    </div>

  </div>

