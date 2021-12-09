<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Clock</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
</head>
<body>
    <div class="timeclockwidth">
        <div class="row timeclocktop">
            <div class="col userinfo">
                <div class="row">
                    <div class="col">
                        <img class="form-logo" src="<?php echo base_url(); ?>/images/lindsey_jones_login_logo.png" alt="logo login">
                    </div>
                    <div>



                    <div class="col-3 text-right dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="silhoutte" src="<?php echo base_url(); ?>/images/silhoutte.jpg">
                            <h2>Account</h2>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <?php if($this->session->userdata('clientLevel') == '3') {
                                $this->load->helper('url'); ?>
                                <a class="dropdown-item"><a href="<?php echo base_url(); ?>index.php/dashboard/index">Admin Dashboard</a>
                                <?php
                            } 
                        ?>
                        <a class="dropdown-item"><a href="<?php echo base_url(); ?>index.php/clients/index">Time Clock</a>
                        <a class="dropdown-item"><a href="<?php echo base_url(); ?>index.php/timetabs/index">Time Card</a>
                        <a class="dropdown-item"><a href="<?php echo base_url(); ?>index.php/login/logout">Log out</a>
                    </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>