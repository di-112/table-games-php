      
        <div class="games__item game">
          <a href="./game.php" class="game__wrap"></a>
          <h2 class="game__title" style="text-align: center;"><?php echo $game['Name']?></h2>
          <h2 class="game__subtitle"><?php 
            foreach($categories as $cat){
              if($cat['id_category']==$game['Category'])echo $cat['Name_category'];
            }
          ?></h2>
          <h2 class="game__players">Количество игроков: <?php echo $game['Number of people']?></h2>
          <img style="max-height: 350px;" class="game__img"
          <?php 
            if(file_exists('./images/games/' . $game['id'] . '/main.jpg')){
          ?>
              src=<?php echo './images/games/' . $game['id'] . '/main.jpg'?> 
          <?php  
            }
            else {
            ?> src='./images/games/not-img.jpg' 
            <?php 
              }
            ?>
           alt="not image(((" />
          <p class="game__info">
          <?php 
            if(!$game['Description']) echo 'Описание отсутствует';
            else echo $game['Description'];
          ?>
          </p>
          <span class="game__price"><?php echo $game['Price']?> руб.</span>
          <span class="game__rating"><?php echo $game['Score']?></span>
        </div>

  
    