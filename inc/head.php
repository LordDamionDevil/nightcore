<?php
$pagename = basename($_SERVER['SCRIPT_FILENAME']);
?>
<head>
    <title>
        Nightcore
    </title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="/js/bootstrap-material-design.min.js"></script>
    <script src="/js/postboot.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons|Merienda">
    <link rel="stylesheet" href="/css/bootstrap-material-design.min.css">
    <link rel="stylesheet" href="/css/postboot.min.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <style>
        body {
            background-color: #292929;
            color: white;
        }

        .radio-buttons {
            margin-right: 10px;
            margin-top: 5px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" style="font-family: 'Merienda', cursive;" href="/index.php">Nightcore</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="mr-auto nav nav-tabs bg-dark">
            <li class="nav-item">
                <a class="nav-link <?php if($pagename == "index.php"){ echo "active"; }; ?>" href="/index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/randomsong.php">Random</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($pagename == "network.php"){ echo "active"; }; ?>" href="/network.php">Network</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($pagename == "contactus.php"){ echo "active"; }; ?>" href="/contactus.php">Contact</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="/search.php" method="get">
            <input name="s" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<div class="container">
