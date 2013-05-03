<!DOCTYPE html>
<html lang="en">
    <head>

        <!--Javascript -->
        <script src="<?php echo base_url('js/jquery.js')?>"></script>
        <script src="<?php echo base_url('js/bootstrap.js')?>"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#<?php echo $active_link?>").parent('li').addClass('active');
            });
        </script>
        <!--End Javascript -->

        <meta charset="utf-8">
        <title>Chronos - <?php echo $page_title; ?> </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <link href="<?php echo base_url('css/bootstrap.css')?>" rel="stylesheet">
        <link href="<?php echo base_url('css/bootstrap-responsive.css')?>" rel="stylesheet">
        <link href="<?php echo base_url('css/site.css')?>" rel="stylesheet">
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="<?php echo base_url('dashboard'); ?>">Chronos</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li><a href="<?php echo base_url('worklog'); ?>" id="worklog-menu">Worklog</a></li>
                            <li><a href="<?php echo base_url('schedule'); ?>" id="schedule-menu">Schedule</a></li>
                            <li><a href="<?php echo base_url('project'); ?>" id="project-menu">Projects</a></li>
                            <li><a href="<?php echo base_url('user'); ?>" id="user-menu">Users</a></li>
                            <li><a href="<?php echo base_url('customer'); ?>" id="customer-menu">Customers</a></li>
                            <li><a href="<?php echo base_url('report'); ?>" id="report-menu">Reports</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container main-container">