<?php
/*
*	Template Name: Doctors
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
<div  class="my-2">
<input class="form-control doc-search" type="search" placeholder="Search" aria-label="Search">
</div>
<div>
    <div>
        <div class="d-flex flex-row">
            <div>
                <img src="<?php echo get_theme_file_uri('/assets/img/avatar.png') ?>" class="profile-avatar mx-2 my-2">
            </div>
            <div class="mt-2">
                <p class="msg-name">Dr. Dexter Galban</p>
                <p class="msg-role">General Doctor</p>
            </div>
        </div>
    </div>
    <div>
        <div class="d-flex flex-row">
            <div>
                <img src="<?php echo get_theme_file_uri('/assets/img/avatar.png') ?>" class="profile-avatar mx-2 my-2">
            </div>
            <div class="mt-2">
                <p class="msg-name">Dra. Vicky Belo</p>
                <p class="msg-role">Dermatologist</p>
            </div>
        </div>
    </div>
    <div>
        <div class="d-flex flex-row">
            <div>
                <img src="<?php echo get_theme_file_uri('/assets/img/avatar.png') ?>" class="profile-avatar mx-2 my-2">
            </div>
            <div class="mt-2">
                <p class="msg-name">Dra. Rebeca Farinas</p>
                <p class="msg-role">Psychiatrist</p>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
