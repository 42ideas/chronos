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
                            <li><a href="schedule">Schedule</a></li>
                            <li><a href="users">Users</a></li>
                            <li><a href="costumers">Costumers</a></li>
                            <li class="active"><a href="reports">Reports</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <form>
                <fieldset>
                    <legend>Report</legend>
                    <label>ID</label>
                    <input id="report_id" type="text" />
                    <label>Name</label>
                    <input id="name" type="text" />
                    <label>Description</label>
                    <input id="description" type="text" />
                    <label>Report Type</label>
                    <input id="report_type" type="text" />
                    <label>Customer ID</label>
                    <input id="customer_id" type="text" />
                    <label>Project ID</label>
                    <input id="project_id" type="text" />
                    <label>User ID</label>
                    <input id="user_id" type="text" />
                    <label>Owner ID</label>
                    <input id="owner_id" type="text" />
                </fieldset>
            </form>
        </div>
        <!--Javascript -->
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.js"></script>
        <!--End Javascript -->
    </body>
</html>