<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">

<?php include($pageHeadFile); ?>

<style>
<?php
  include("assets/code/css/base.css");
  include("assets/code/css/header.css");
  include("assets/code/css/website.css");
?>
</style>


<?php
// Include page specific style file if it exists
$pageStyleFile = $pageDirectory . "style.css";
if (file_exists($pageStyleFile)) {
?>

<style>
<?php include($pageStyleFile); ?>
</style>

<?php
}
?>

</head>
<body>
