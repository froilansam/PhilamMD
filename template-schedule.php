<?php
/*
*	Template Name: Schedule
*	Template Post Type: page
**/
get_header();
?>

<div class="head-md py-2">
    <div class="d-flex flex-row justify-content-center">
        <img>
        <h1 class="header-md">Philam MD</h1>
    </div>
</div>
<nav class="nav-md d-flex flex-row justify-content-evenly">
    <a href="<?php echo site_url('/messenger');?>"><div class>
        <img>
        <p class="nav-msg">Messenger</p>
    </div></a>
    <a href="<?php echo site_url('/doctors');?>"><div class>
        <img>
        <p class="nav-msg">Doctors</p>
    </div></a>
    <a href="<?php echo site_url('/schedule');?>"><div class>
        <img>
        <p class="nav-msg">Schedule</p>
    </div></a>
    <a href="<?php echo site_url('/medicine');?>"><div class>
        <img>
        <p class="nav-msg">Medicine</p>
    </div></a>
    <a href="<?php echo site_url('/prescription');?>"><div class>
        <img>
        <p class="nav-msg">Prescription</p>
    </div></a>
</nav>

<?php
get_footer();
