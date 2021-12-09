<?php include_once('dashboardheader.php');?>
<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
            <img class="form-logo2" src="<?php echo base_url(); ?>/images/lindsey_jones_login_logo.png" alt="logo login">
            </div>

            <ul class="list-unstyled components">
                <p>Dashboard</p>
                <li class="active">
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
                <li>
                    <a href="<?php echo base_url(); ?>index.php/login/logout">Log out</a>
                </li>
            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content">

    <table id="datatable1" class="display">
        <thead>
            <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Client Level</th>
            <th>Email</th>
            <th>Id</th>
            </tr>
        </thead>
        <tbody>
        <?php 
    foreach($newTimes as $t)
    {
        ?>
        <tr>
            <td><?php echo $t->clientFirstname;?></td>
            <td><?php echo $t->clientLastname;?></td>
            <td><?php echo $t->clientLevel;?></td>
            <td><?php echo $t->clientEmail;?></td>
            <td><?php echo $t->clientId;?></td>
        </tr>
        <?php 
    }
    ?>
        </tbody>
    </table>

    <div class="row">
        <?php 
        foreach($newTimes as $t)
        {
            ?>
                <div class = "col">
                    <h2><?php echo $t->clientFirstname;?> <?php echo $t->clientLastname;?></h2>
                    <p>This will be an image</h1>
                    <p>This will be the hours</p>
                </div>
            <?php 
        }
        ?>
    </div>

    </div>

        </div>
    
<?php include_once('dashboardfooter.php');?>
</html>