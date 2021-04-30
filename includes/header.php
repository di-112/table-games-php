 <?php 
  $categories_query = mysqli_query($connection, "SELECT * FROM category");
  $categories = array();
  while($cat = mysqli_fetch_assoc($categories_query)){
    $categories[] = $cat;
  }
 ?>
 
 <header class="header">
    <img class="header__logo" src="./images/logo.jpg" alt="not log" />
    <div class="header__burger">
      <span></span>
    </div>
    <nav class="header__menu menu">
      <ul>
        <li class="menu__item"><a href="./index.php">Все игры</a></li>
        <li class="menu__item"><a href="./top-10.php">Лучшие игры</a></li>
        <li class="menu__item">
          <a>Лучшие игры по жанрам</a>
          <ul>
            <?php 
              foreach($categories as $cat){
            ?>
              <li><a href="./best-of-cat.php?cat=<?php echo $cat['id_category']?>"><?php echo  $cat['Name_category'];?></a></li>
            <?php 
              } 
            ?>
          </ul>
        </li>
        <li class="menu__item"><a href="./want.php">Планирую сыграть</a></li>
        <li class="menu__item"><a href="./rating.php">Все оценки</a></li>
      </ul>
    </nav>
</header>
