<style>
<?php
$cssFiles = array(
  "variables.css",
  "reset.css",
  "layout.css",
  "header.css",
  "main.css",
  "footer.css",
  "headings.css",
  "inputs.css",
  "lists.css",
  "tables.css",
  "styles.css",
);

foreach ($cssFiles as $cssFile) {
    echo file_get_contents("assets/code/css/styles/" . $cssFile);
}
?>
</style>
