<?php include('config/setup.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title> <?php echo $page['title'].' | '.$site_title;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include('config/css.php'); ?>
    <?php include('config/js.php'); ?>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

    <a class="navbar-brand" href="#">Brand navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li <?php if ($pageid==1) { echo 'class="active"'; }?>>
                <a class="nav-link" href="?page=1">Home <span class="sr-only">(current)</span></a>
            </li>
            <li <?php if ($pageid==2) { echo 'class="active"'; }?>>
                <a class="nav-link" href="?page=2">About Us</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>


<main role="main" class="flex-shrink-0">
         <!--Content-->
    <div class="container">
         <h1 class="mt-5"><?php echo $page['header']; echo $_GET['page']; ?> </h1>
        <p><?php echo $page['body']; ?></p>
    </div>

</main>

<footer class="footer mt-auto py-3">
    <div class="conteiner">
        <span class="text-muted">Sticky footer</span>
    </div>

</footer>
</body>
</html>