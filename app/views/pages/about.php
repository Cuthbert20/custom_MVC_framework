<!--  FRONT END USES URLROOT, BACKEND USES APPROOT -->
<?php require APPROOT . '/views/inc/header.php'; ?>

<h1><?php echo $data['title']; ?></h1>

<?php
//  including our footer file. Which has a script tag for our JavaScript.
require APPROOT . '/views/inc/footer.php'; ?>