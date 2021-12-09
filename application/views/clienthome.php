<?php 
include_once('header.php');
?>

<div class="row clockgreenrow">
            <div class="col timeclocktab">Time Clock</div>
            <div class="col timecardtab">Time Card</div>
</div>

<div class="clock-container">
  <div class="clock-col">
    <p class="clock-day clock-timer">
    </p>
    <p class="clock-label">
      Day
    </p>
  </div>
  <div class="clock-col">
    <p class="clock-hours clock-timer">
    </p>
    <p class="clock-label">
      Hours
    </p>
  </div>
  <div class="clock-col">
    <p class="clock-minutes clock-timer">
    </p>
    <p class="clock-label">
      Minutes
    </p>
  </div>
  <div class="clock-col">
    <p class="clock-seconds clock-timer">
    </p>
    <p class="clock-label">
      Seconds
    </p>
  </div>
</div>
     
            <div class="row clockinholder">
                   <div class="col text-center holdclock"><button class="clockin btn btn-success" name="clockin" id="clockin"><a href="<?php echo base_url(); ?>index.php/clients/clockin">Clock In</button></div>
                   <div class="col text-center holdclock"><button class="clockout btn btn-danger" name="clockout" id="clockout"><a href="<?php echo base_url(); ?>index.php/clients/clockout">Clock Out</button></div>

                   <?php if($this->session->flashdata('msg')): ?>
                    <p><?php echo $this->session->flashdata('msg'); ?></p>
                <?php endif; ?>
            </div>

<?php 
include_once('footer.php');
?>