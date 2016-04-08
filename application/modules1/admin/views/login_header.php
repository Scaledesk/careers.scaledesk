<?php
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 3/18/2016
 * Time: 6:15 PM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <title>Careers Scaledesk </title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo asset_url(); ?>admin/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo asset_url(); ?>admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo asset_url(); ?>admin/assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo asset_url(); ?>admin/assets/js/bootstrap-daterangepicker/daterangepicker.css" />

    <!-- Mialbox css -->
    <link rel="stylesheet" type="text/css" href="<?php echo asset_url(); ?>admin/assets/css/mailbox.css"/>

    <!-- Custom styles for this template -->
    <link href="<?php echo asset_url(); ?>admin/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo asset_url(); ?>admin/assets/css/style-responsive.css" rel="stylesheet">

    <script type="text/javascript" src="<?php echo asset_url(); ?>admin/assets/js/jquery-1.11.3.min.js"></script>
</head>

<body>

<section id="container" >
    <!-- **********************************************************************************************************************************************************
    TOP BAR CONTENT & NOTIFICATIONS
    *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="<?php echo base_url(); ?>" class="logo"><b>Careers Scaledesk </b></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">

            </ul>
            <!--  notification end -->
        </div>

    </header>
    <!--header end-->

    <!-- **********************************************************************************************************************************************************
    MAIN SIDEBAR MENU
    *********************************************************************************************************************************************************** -->
    <!--sidebar start-->

    <!--sidebar end-->




    <script type="text/javascript">
        setTimeout(function() {
            $('#notification1').fadeOut('fast');
        }, 5000);

    </script>

    <script type="text/javascript">
        setTimeout(function() {
            $('#notification').fadeOut('fast');
        }, 5000);
    </script>

    <?php


    $logout=$this->input->get('logout');
    if($logout){
        ?>
        <div class="notification" id="notification1">

            <h3> You are successfully logged out.</h3>
        </div>


        <?php

    }else if(getInformUser()){
        ?>
        <div class="notification" id="notification" >
            <h3>Welcome Admin</h3>
            <p>   <?php  echo getInformUser(); ?> </p>
        </div>


        <?php
    }
    ?>
