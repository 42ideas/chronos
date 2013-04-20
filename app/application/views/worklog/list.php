<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Chronos</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <link href="../css/bootstrap.css" rel="stylesheet">
        <link href="../css/bootstrap-responsive.css" rel="stylesheet">
        <link href="../css/site.css" rel="stylesheet">
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
                            <li class="active"><a href="worklog">Worklog</a></li>
                            <li><a href="schedule">Schedule</a></li>
                            <li><a href="project">Project</a></li>
                            <li><a href="users">Users</a></li>
                            <li><a href="costumers">Costumers</a></li>
                            <li><a href="reports">Reports</a></li>
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
                            <td>Costumer</td>
                            <td>Project</td>
                            <td>User</td>
                            <td>Description</td>
                            <td>Start Time</td>
                            <td>End Time</td>
                            <td>Total Time</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Bajapharma</td>
                            <td>Bajapharma</td>
                            <td>Luis</td>
                            <td>Modified something</td>
                            <td>9:00 AM</td>
                            <td>11:00 AM</td>
                            <td>2:00</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>42 Ideas</td>
                            <td>Chronos</td>
                            <td>Luis</td>
                            <td>Created this page</td>
                            <td>6:30 PM</td>
                            <td>7:30 PM</td>
                            <td>1:00</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>42 Ideas</td>
                            <td>Blog Post</td>
                            <td>Juan</td>
                            <td>Escribir sobre cositas</td>
                            <td>6:30 PM</td>
                            <td>7:30 PM</td>
                            <td>1:00</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Bajapharma</td>
                            <td>Goldman Sachs</td>
                            <td>Gustavo</td>
                            <td>Do Goldman Sachs stuff</td>
                            <td>9:00 AM</td>
                            <td>9:00 PM</td>
                            <td>12:00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!--Javascript -->
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.js"></script>
        <!--End Javascript -->
    </body>
</html>