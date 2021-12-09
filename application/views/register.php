<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Clock</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">
</head>
<body>
    <section class="vh-100 bg-image" style="background-image: url('https://images.pexels.com/photos/355321/pexels-photo-355321.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
          <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="card" style="border-radius: 15px;">
                  <div class="card-body p-5">
                    <h2 class="text-uppercase text-center mb-5">Create an account</h2>
                    <form action="<?php echo base_url()."index.php/register/index"?>" method="post">
      
                      <div class="form-outline mb-4">
                        <input type="text" id="form3Example1cg" name="clientFirstname" class="form-control form-control-lg" placeholder="First Name..." />
                      </div>

                      <div class="form-outline mb-4">
                        <input type="text" id="form3Example3cg" name="clientLastname" class="form-control form-control-lg" placeholder="Last Name..."/>
                      </div>
      
                      <div class="form-outline mb-4">
                        <input type="email" id="form3Example3cg" name="clientEmail" class="form-control form-control-lg" placeholder="Email..."/>
                      </div>
      
                      <div class="form-outline mb-4">
                        <input type="password" id="form3Example4cg" name="clientPassword" class="form-control form-control-lg" placeholder="Password..."/>
                      </div>
      
                      <div class="d-flex justify-content-center">
                        <button type="submit" name="submit" class="col btn btn-primary">Register</button>
                      </div>
      
                      <p class="text-center text-muted mt-5 mb-0">Already an account? <a href="" class="fw-bold text-body"><u>Login here</u></a></p>
      
                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>