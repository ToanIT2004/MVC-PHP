<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Website quản lí chi tiêu</title>
</head>

<body>
   <?php 
      $controller = new Controller();
      $controller->render('blocks/footer');
      $controller->render($content);
      $controller->render('blocks/header');
   ?>
</body>

</html>