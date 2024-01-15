<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register - Produk</title>


</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              
              <div class="card mt-5">
                
                <div class="card-body">
                  <div class="d-flex justify-content-center pt-4">
                    <a href="#" class="logo d-flex align-items-center w-auto">
                      <span class="d-none d-lg-block">Toko Produk</span>
                    </a>
                  </div>

                  <div class="pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Register</p>
                  </div>

                  <form class="row g-3 needs-validation" action="../process-register.php" method="POST" enctype="multipart/form-data" >
                    <div class="col-12">
                      <label for="yourName" class="form-label">Nama Lengkap</label>
                      <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <input type="text" name="username" id="username" class="form-control" required>
                      <div class="invalid-feedback">Please choose a username.</div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="password" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    <input type="hidden" name="roles" value="User">
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Sudah punya akun? <a href="../index.php">Log in</a></p>
                    </div>
                  </form>
                
                </div>
              </div>
              
              
            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../NiceAdmin/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../NiceAdmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../NiceAdmin/assets/vendor/chart.js/chart.min.js"></script>
  <script src="../NiceAdmin/assets/vendor/echarts/echarts.min.js"></script>
  <script src="../NiceAdmin/assets/vendor/quill/quill.min.js"></script>
  <script src="../NiceAdmin/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../NiceAdmin/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../NiceAdmin/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../NiceAdmin/assets/js/main.js"></script>

</body>

</html>