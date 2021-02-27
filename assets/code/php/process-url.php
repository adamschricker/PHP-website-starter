<?php
$urlPath = trim($_SERVER['REQUEST_URI']);


/** Redirect to only paths that end in slash **/
if (substr($urlPath, -1) !== "/") {
	header("Location: $urlPath/", TRUE, 301);
	exit;
}


/** 404 if URL has characters not alphanumeric, dash, or forward slash **/
if (preg_match('/[^a-z0-9\/\-]+/i', $urlPath)) {
	http_response_code(404);
	$urlPath = "/404/";
}


if ($urlPath === "/") {
	$pageDirectory = "pages/home/";
} else {
	$pageDirectory = "pages" . $urlPath;
}


$pageHeadFile = $pageDirectory . "head.php";
$pageContentFile = $pageDirectory . "content.php";
if(!file_exists($pageHeadFile) || !file_exists($pageContentFile)) {
	http_response_code(404);
	$pageDirectory = "pages/404/";
	$pageHeadFile = $pageDirectory . "head.php";
	$pageContentFile = $pageDirectory . "content.php";
}




?>
