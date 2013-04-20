<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Chronos</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <link href="../css/bootstrap.css" rel="stylesheet">
        <link href="../css/bootstrap-responsive.css" rel="stylesheet">
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
                            <li class="active"><a href="schedule">Schedule</a></li>
                            <li><a href="users">Users</a></li>
                            <li><a href="costumers">Costumers</a></li>
                            <li><a href="reports">Reports</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <form>
                <fieldset>
                    <legend>Schedule</legend>
                    <label>ID</label>
                    <input id="schedule_id" type="text" />
                    <label>Check In</label>
                    <input id="check_in" type="text" />
                    <label>Check Out</label>
                    <input Id="check_out" type="text" />
                    <label>User Id</label>
                    <input id="user_id" type="text" /> 
                </fieldset>
            </form>
        </div>
        <!--Javascript -->
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.js"></script>
        <!--End Javascript -->
    </body>
</html>