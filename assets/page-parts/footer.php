
<footer>
  <p>Thank you for visiting <a href="/">Example Website</a>.</p>
  <nav>
    <ul>
      <li><a href="/red/">Red</a></li>
      <li><a href="/green/">Green</a></li>
      <li><a href="/blue/">Blue</a></li>
    </ul>
  </nav>
</footer>

</body>

<script>
<?php include("assets/code/javascript/website.js"); ?>
</script>

<?php
// Include page specific script file if it exists
$pageScriptFile = $pageDirectory . "script.js";
if (file_exists($pageScriptFile)) {
?>

<script>
<?php include($pageScriptFile); ?>
</script>

<?php
}
?>

</html>
