<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <title><?= @$data['title'] ?></title>
  <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="./assets/stylesheets/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./assets/stylesheets/site.css">
</head>

<body>
  <div class="container">
    <?php
    extract($data);
    require_once("header.php");
    echo $content;
    require_once("footer.php");
    ?>
  </div>
  <script src="./assets/javascripts/jquery-1.10.2.min.js"></script>
  <script src="./assets/javascripts/bootstrap.min.js"></script>
</body>

</html>