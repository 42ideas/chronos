<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Chronos</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <link href="<?= base_url("css/bootstrap.css")?>" rel="stylesheet">
        <link href="<?= base_url("css/bootstrap-responsive.css")?>" rel="stylesheet">
        <link href="<?= base_url("css/site.css")?>" rel="stylesheet">
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
                    <a class="brand" href="#">Chronos</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li><a href="worklog">Worklog</a></li>
                            <li><a href="schedule">Schedule</a></li>
                            <li><a href="project">Project</a></li>
                            <li><a href="user">User</a></li>
                            <li class="active"><a href="customer">Customer</a></li>
                            <li><a href="report">Report</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container main-container">
            <div class="row">
                <input type="text" class="search search-query" placeholder="Search..."/>
                <div class="clear-r"></div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Name</td>
                            <td>Description</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>42 Ideas</td>
                            <td>It's us, silly</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Bajaware</td>
                            <td>Empresa que hace software para bancos</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Bajapharma</td>
                            <td>Empresa de venta de medicamento en l&iacute;nea</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Mistery Company</td>
                            <td>No one knows</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!--Javascript -->
        <script src="<?= base_url("js/jquery.js")?>"></script>
        <script src="<?= base_url("js/bootstrap.js")?>"></script>
        <!--End Javascript -->
    </body>
</html>