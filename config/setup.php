<?php
//Setup File:

# Database  Connection here...

$dbc = mysqli_connect('localhost','dev','Definition1711','atomcms') OR die('Could not connect because:'.mysqli_connect_error());

#Functions
include('functions/data.php');

$site_title = 'AtomCMC 2.0';

if(isset($_GET['page'])) {

    $pageid = $_GET['page'];   //Set $pageod tp equal the value given in the URL

} else {

    $pageid = 1;   //Set $pageid equal to 1 or the Home Page.

}


#Page Setup
$page = data_page($dbc ,$pageid);


?>