<?php require_once './includes/config.php';?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.min.css" />
   <title><?php echo $config['title'];?> </title>
  </head>
  <body>
  <?php 
      require_once './includes/header.php'
    ?>
    <section class="games top-10">
      <div class="games__grid">
       <?php 
          $best_games_query = mysqli_query($connection, "SELECT * from main WHERE Score >7 ORDER BY Score");
          while($game = mysqli_fetch_assoc($best_games_query)){
            include './includes/game-grid-block.php';
          }
       ?>
    </section>
    <?php require_once './includes/footer.php'?>
  </body>
  <script src="./js/main.min.js"></script>
</html>
