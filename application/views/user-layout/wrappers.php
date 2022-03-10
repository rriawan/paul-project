<!DOCTYPE html>
<html lang="en">
<?php require_once('head.php') ?>

<body id="page-top">
<?php require_once('navbar.php') ?>
  <?php
    if($content){
      $this->load->view($content);
    }
  ?>	

<?php require_once('footer.php') ;?>
<?php require_once('js-plugin.php') ;?>

</body>

</html>