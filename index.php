<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <link rel="stylesheet" type="text/css" href="styles/style.css">
    <title>Document</title>
</head>
<body>
    <!--menu-->
    <header>
      <?php include"./subpage/header.php" ?>
  </header>
      <!--end menu-->
      <!--slide-->
      <?php include"./subpage/slide.php" ?>

        <!--end silde-->
        <!--list movie-->  
          <!--Phỉmap-->
        <section>
          <?php include"./subpage/movie.php" ?>
        </section><hr>
          
      <!--end Phimrap-->

        <!--end list movie-->
        <!--footer-->
        <footer>
      <?php include"./subpage/footer.php" ?>  
      </footer>
    <!--end footer-->
</body>
</html>