<?php 
session_start();

echo $_SESSION['username'];
require_once('header.php'); ?>
<?php 
require_once('sidebar.php'); ?>
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <!-- page start-->
            Page content goes here
            <!-- page end-->
        </section>
    </section>
    <!--main content end-->
<?php 
require_once('footer.php'); ?>