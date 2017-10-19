<!doctype html>
<head>
    <title> Hogwarts Students </title>
    <link rel="stylesheet" href="<?php echo STYLE; ?>bootstrap.css" />
    <link rel="stylesheet" href="<?php echo STYLE; ?>landing.css" />

</head>
<html>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Hogwarts</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo HOME; ?>login/logout">logout</a></li>
            </ul>
            <form class="navbar-form navbar-right">
                <input type="text" class="form-control" placeholder="Enter student name" id="text-search">
            </form>
        </div>
    </div>
</nav>