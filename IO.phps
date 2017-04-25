<?php
//Name: IO.php
//Task: do some disk-intensive operations
//Auth: Rohit Lakhanpal
//LMod: 25/04/2017

// Set a time limit of 5 seconds for script execution
$max_execution_time=5;
set_time_limit($max_execution_time);

// Page Properties
$site_title="Web Servers & Web Technology";
$page_title=basename(__FILE__, '.php').".php"; // File Name is the page header
$page_description="This page performs some disk-intensive operations.";

// Recursively list the number of txt files
for($i=0; $i<750; $i++)
{								        
    exec("find ~ -type f | grep txt");										    
}
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $site_title; ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>

    

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><?php echo $site_title; ?></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/CPU.php">CPU.php</a>
                    </li>
                    <li>
                        <a href="/IO.php">IO.php</a>
                    </li>                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1><?php echo $page_title; ?></h1>
                <p class="lead"><?php echo $page_description; ?></p>
                <ul class="list-unstyled">
                    <li>Max execution time was set to: <?php echo round($max_execution_time, 5); ?> second(s).</li>
                    <li>Script completed execution in: <?php echo round(microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"], 5); ?> second(s).</li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->   

</body>

</html>
