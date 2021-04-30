<?php require_once './includes/config.php';?>
<!DOCTYPE html>
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
      require_once './includes/header.php';
    ?>
    <section class="games">
      <?php require './includes/sort.php'?>
      <?php 
      $count_game_on_page = $config['count_game_on_page'];
      $number_page = 1;
      if($_GET['page']!=null)$number_page = $_GET['page'];
      $total_games_query = mysqli_query($connection, "SELECT count(id) as total FROM main");
      $total_games = mysqli_fetch_assoc($total_games_query);
      $total_games =  $total_games['total'];
      $total_pages = ceil($total_games/$count_game_on_page);
  
      if( $number_page<0 ||  $number_page> $total_pages)$number_page = 1;
      $offset = $count_game_on_page*$number_page-$count_game_on_page;
      ?>
      <div class="games__grid">
        <?php 
            $sort = 'id';
            if($_GET['sort']!=null)$sort = $_GET['sort'];
            $sort_direction = 'ASC';
            if($_GET['direction']=='up')$sort_direction = 'ASC';
            if($_GET['direction']=='down')$sort_direction = 'DESC';
            $games_query = mysqli_query($connection ,"SELECT * FROM main ORDER BY " . $sort . " " . $sort_direction . " LIMIT $offset, $count_game_on_page");
            while($game = mysqli_fetch_assoc($games_query)){
              require './includes/game-grid-block.php';
            }
        ?>
      </div>
    </section>

   <?php require './includes/pagination.php'?>
      
    </div>
    <?php require_once './includes/footer.php'?>
  </body>
  <script src="./js/main.min.js"></script>
  <script>
          const imgArray = document.querySelectorAll('.game__img')
          imgArray.forEach(img=>{
            if(img.getAttribute('src')==null)img.setAttribute('src', './images/games/not-img.jpg')
          })
        </script>
</html>
