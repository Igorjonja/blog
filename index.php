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

    <?php include(D_TEMPLATE.'/navigation.php');?>



    <div class="container">
         <h1 class="mt-5"><?php echo $page['header']; echo $_GET['page']; ?> </h1>
        <p><?php echo $page['body']; ?></p>
    </div>

    <?php include(D_TEMPLATE.'/footer.php');?>




</body>
</html>