<?php
session_start();



/*
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
*/

include_once './class.event.php';
include_once './class.hotel.php';
?>

<html xmlns="http://www.w3.org/1999/xhtml">
    
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
    
		<link rel="stylesheet" href="style/normalize.css"/>
		<link rel="stylesheet" href="style/main.css"/>
		<link rel="stylesheet" href="style/layout.css"/>
    
     <link rel="icon" type="image/png" href="images/favico.png">
    
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/app.js"></script>
    
<title><?php echo $pagetitle; ?></title>
</head>
    <body>
        <header>
          <div id="headerwrapper">
            
            <div id="leftheader">
                <p><a href="home.php">EventLine</a></p>
            </div>
            
            <div id="rightheader">

            </div>
          </div>
        </header>