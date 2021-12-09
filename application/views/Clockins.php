<?php include_once('dashboardheader.php');?>
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
                <li class="active">
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
            <th>Employee's Name</th>
            <th>Clock ins</th>
            <th>Edits</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            foreach($clockins as $c)
            {
                ?>
                <tr>
                    <td><?php echo $c->clientFirstname;?></td>
                    <td><?php echo $c->clockin;?></td>
                    <td>
                        <button><a href="<?php echo base_url('index.php/dashboard/editclockins/'.$c->id) ?>" class="btn">Edit</a></button>
                    </td>
                </tr>
                <?php 
            }
            ?>
        </tbody>
    </table>
        </div>
    
<?php include_once('dashboardfooter.php');?>
</html>