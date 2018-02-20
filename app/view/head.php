<?php
/**
 * Created by PhpStorm.
 * User: crys_
 * Date: 16.02.2018
 * Time: 17:31
 */
$file_name = basename($_SERVER['SCRIPT_FILENAME']);

$new_path = "";
if($file_name != "index.php") {
    $new_path = "../../public/";
}
?>
<head>
    <title>SkyMobile</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
    <meta http-equiv="Content-Language" content="en-US"/>

    <!-- CSS links -->
    <link type="text/css" rel="stylesheet" href="<?php echo $new_path?>css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo $new_path?>css/font-awesome.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo $new_path?>css/bootstrap-datetimepicker.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo $new_path?>css/datepicker.css" />
    <!-- Animate.css -->
    <link type="text/css" rel="stylesheet" href="<?php echo $new_path?>css/animate.css" />

    <!-- Owl Carousel CSS-->
    <link type="text/css" rel="stylesheet" href="<?php echo $new_path?>css/owl.carousel.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo $new_path?>css/owl.theme.default.min.css" />

    <!-- Mega navigation bar -->
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo $new_path?>css/webslidemenu.css" />

    <!-- Main css link -->
    <link type="text/css" rel="stylesheet" href="<?php echo $new_path?>css/main.css" />

</head>
