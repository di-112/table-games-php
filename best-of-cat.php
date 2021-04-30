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
    <section class="games">
      <div class="games__grid">
        <?php 
            $games_query = mysqli_query($connection, "SELECT * FROM main WHERE Category = " . $_GET['cat']);
            while($game = mysqli_fetch_assoc($games_query)){
              require './includes/game-grid-block.php';
            }
        ?>
      </div>
    </section>
    <?php require_once './includes/footer.php'?>
  </body>
  <script src="./js/main.min.js"></script>
</html>
