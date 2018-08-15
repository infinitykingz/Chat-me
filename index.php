<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All In One Chat</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">


    <link href="css/chatme.css" rel="stylesheet">


</head>
<body class="bg-primary">
    <div>
        <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
            <div class="navbar-inner">
                <a class="navbar-brand" href="index.php"><img src="img/line-icon.png" alt="" width="30" height="30"></a>
                <a class="navbar-brand" href="index.php"><img src="img/messenger.png" alt="" width="30" height="30"></a>
            </div>
        </nav>
    </div>
    <div id="wrapper">

<!-- Sidebar -->
<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a href="#" style="pointer-events: none;cursor: default; color:white;">
               Website
            </a>
        </li>
        <li>
            <a href="#">W88</a>
        </li>
        <li>
            <a href="#">FIFA</a>
        </li>
        <hr></hr>
        <li>
            <a href="#">Setting</a>
        </li>
    </ul>
</div>
<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col col-lg-10">
                <?php include 'chat.php'; ?>
            </div>
            <!-- <div class="col col-lg-5 offset-lg-1">
                <?php include 'chat.php'; ?>
            </div> -->
        </div>
    </div>
</div>
<!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->
</body>
</html>