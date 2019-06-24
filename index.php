<?php
include 'functions.php';
?>
<!doctype html>
<html lang="en">

<head>
    <title>Ajax PHP</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="O82ALp93hJ58HpPIcnn7uwTUWUnSvnmwNWbOrN4psVg=" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <header class="row">
            <div class="col-xs-6 col-md-6">
                <a href="#">Enter Restore Mode</a>
            </div>
            <div class="col-xs-6 col-md-6 text-right">
                Total Time: <span id="tally"></span>
            </div>
        </header>
        <form id="form-new">
            <div class="row">
                <div class="col-xs-10 col-md-10">
                    <input name="name" id="task" class="form-control" placeholder="Enter new task name...">
                </div>
                <div class="col-xs-2 col-md-2">
                    <button type="submit" class="btn btn-block btn-success"><?= i('play'); ?></button>
                </div>
            </div>
        </form>
        <hr>
        <table class="table table-bordered ">
            <thead>
                <tr>
                    <th>Task</th>
                    <th>Start</th>
                    <th>End</th>
                    <th>Time</th>
                    <th colspan="2">Controls</th>
                </tr>
            </thead>
            <tbody id="log">

            </tbody>
        </table>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js" integrity="" crossorigin="anonymous"></script>
    <!-- custom code -->
    <script src="atom.tracker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="" crossorigin="anonymous"></script>
</body>

</html>