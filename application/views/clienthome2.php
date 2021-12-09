<?php 
include_once('header.php');
?>
<div class="row clockgreenrow">
            <div class="col timecardtab">Time Clock</div>
            <div class="col timeclocktab">Time Card</div>
</div>
    <div>
    <table id="datatable1" class="display">
        <thead>
            <tr>
            <th>Client Id</th>
            <th>Clock In</th>
            <th>Clock Out</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            foreach($times as $t)
            {
                ?>
                <tr>
                    <td><?php echo $t->clientFirstname;?></td>
                    <td><?php echo $t->clockin;?></td>
                    <td><?php echo $t->clockout;?></td>
                </tr>
                <?php 
            }
            ?>
        </tbody>
    </table>
    </div>

<?php 
include_once('footer.php');
?>