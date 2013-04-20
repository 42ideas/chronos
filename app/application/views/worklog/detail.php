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
                    <a class="brand" href="./">Chronos</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="active"><a href="worklog">Worklog</a></li>
                            <li><a href="schedule">Schedule</a></li>
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
                    <legend>Worklog</legend>
                    <label>ID</label>
                    <input id="worklog_id" type="text" />
                    <label>Customer ID</label>
                    <input id="customer_id" type="text" />
                    <label>Project ID</label>
                    <input id="project_id" type="text" />
                    <label>User ID</label>
                    <input id="user_id" type="text" />
                    <label>Description</label>
                    <input id="description" type="text" />
                    <label>Start Time</label>
                    <input id="start_time" type="text" />
                    <label>End Time</label>
                    <input id="end_time" type="text" />
                </fieldset>
            </form>
        </div>
        <!--Javascript -->
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.js"></script>
        <!--End Javascript -->
    </body>
</html>