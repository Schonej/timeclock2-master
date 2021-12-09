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
    <div class="row">
        <div class="col col-5 left-side">
            <img class="form-logo" src="<?php echo base_url(); ?>/images/lindsey_jones_login_logo.png" alt="logo login">
                <form action="<?php echo base_url()."index.php/login/verify"?>" method="post" class="loginform">
                    <div class="form-group">
                    <input type="text" id="form3Example3cg" name="clientEmail" class="form-control form-control-lg" placeholder="Email..."/>
                    </div>
                    <div class="form-group">
                    <input type="password" id="form3Example4cg" name="clientPassword" class="form-control form-control-lg" placeholder="Password..."/>
                    </div>
                    <div class="row">
                        <button class="col btn btn-secondary"><a href="<?php echo base_url(); ?>index.php/register">Register</a></button>
                        <button name ="submit" class="col btn btn-primary">Login</button>
                    </div>
                </form>
        </div>


        <div class="col col-7 right-side">
            <h1>Welcome</h1>
        </div>
    </div>
</body>
</html>