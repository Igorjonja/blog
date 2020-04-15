<?php
//Setup File:

# Database  Connection here...

$dbc = mysqli_connect('localhost','dev','Definition1711','atomcms') OR die('Could not connect because:'.mysqli_connect_error());

$site_title = 'AtomCMC 2.0';

if(isset($_GET['page'])) {

    $pageid = $_GET['page'];   //Set $pageod tp equal the value given in the URL

} else {

    $pageid = 1;   //Set $pageid equal to 1 or the Home Page.

}


#Page Setup
$q = "SELECT * FROM pages WHERE id = $pageid";
$r = mysqli_query($dbc, $q);

$page = mysqli_fetch_assoc($r);

?>