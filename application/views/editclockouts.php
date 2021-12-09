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
<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
            <img class="form-logo2" src="<?php echo base_url(); ?>/images/lindsey_jones_login_logo.png" alt="logo login">
            </div>

            <ul class="list-unstyled components">
                <p>Dashboard</p>
                <li>
                    <a href="<?php echo base_url(); ?>index.php/dashboard/index">Home</a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>index.php/dashboard/clockins">Clock Ins</a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>index.php/dashboard/clockouts">Clock Outs</a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>index.php/dashboard/allpunch">All Punches</a>
                </li>
            </ul>

            <li><a href="<?php echo base_url(); ?>index.php/login/logout">Log out</a></li>
        </nav>

        <!-- Page Content  -->
        <div id="content">
            <h1>Update Time</h1>
        <form action="<?php echo base_url('index.php/dashboard/updateclockouttime/'.$id->id )?>" method="post" class="updatetime">
                    <div class="form-group">
                    <input type="text" name="clockout" id="form3Example3cg" value="<?= $id->clockout ?>" class="form-control form-control-lg"/>
                    </div>
                    <div class="row">
                        <button name ="submit" class="col btn btn-primary">Update</button>
                    </div>
                </form>      
        </div>
    
</body>

<script src="<?php echo base_url(); ?>scripts/main.js"></script>
</html>