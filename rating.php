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
    <section class="rating-section">
      <div class="games__sort sort">
        <h2 class="sort__title">Сортировать по:</h2>
        <div class="sort__params">
        <a class="sort__param"href="./?sort=name&direction=up">Название&#8593</a>
        <a class="sort__param"href="./?sort=name&direction=down">Название&#8595</a>
        <a class="sort__param"href="./?sort=price&direction=up">Цена&#8593</a>
        <a class="sort__param"href="./?sort=price&direction=down">Цена&#8595</a>
        <a class="sort__param"href="./?sort=rating&direction=up">Рейтинг&#8593</a>
        <a class="sort__param"href="./?sort=rating&direction=down">Рейтинг&#8595</a>
        </div>
     </div>
      <div class="rating-section__table">
        <table>
          <tr>
            <th>Название</th>
            <th>Категория</th>
            <th>Количество человек</th>
            <th>Цена</th>
            <th>Оценка</th>
          </tr>
          <tr>
            <td>Название</td>
            <td>Категория</td>
            <td>2-5</td>
            <td>2300</td>
            <td>7</td>
          </tr>
          <tr>
            <td>Название</td>
            <td>Категория</td>
            <td>2-5</td>
            <td>2300</td>
            <td>7</td>
          </tr>
          <tr>
            <td>Название</td>
            <td>Категория</td>
            <td>2-5</td>
            <td>2300</td>
            <td>7</td>
          </tr>
          <tr>
            <td>Название</td>
            <td>Категория</td>
            <td>2-5</td>
            <td>2300</td>
            <td>7</td>
          </tr>
          <tr>
            <td>Название</td>
            <td>Категория</td>
            <td>2-5</td>
            <td>2300</td>
            <td>7</td>
          </tr>
          <tr>
            <td>Название</td>
            <td>Категория</td>
            <td>2-5</td>
            <td>2300</td>
            <td>7</td>
          </tr>
          <tr>
            <td>Название</td>
            <td>Категория</td>
            <td>2-5</td>
            <td>2300</td>
            <td>7</td>
          </tr>
          <tr>
            <td>Название</td>
            <td>Категория</td>
            <td>2-5</td>
            <td>2300</td>
            <td>7</td>
          </tr>
          <tr>
            <td>Название</td>
            <td>Категория</td>
            <td>2-5</td>
            <td>2300</td>
            <td>7</td>
          </tr>
          <tr>
            <td>Название</td>
            <td>Категория</td>
            <td>2-5</td>
            <td>2300</td>
            <td>7</td>
          </tr>
          <tr>
            <td>Название</td>
            <td>Категория</td>
            <td>2-5</td>
            <td>2300</td>
            <td>7</td>
          </tr>
          <tr>
            <td>Название</td>
            <td>Категория</td>
            <td>2-5</td>
            <td>2300</td>
            <td>7</td>
          </tr>
          <tr>
            <td>Название</td>
            <td>Категория</td>
            <td>2-5</td>
            <td>2300</td>
            <td>7</td>
          </tr>
          <tr>
            <td>Название</td>
            <td>Категория</td>
            <td>2-5</td>
            <td>2300</td>
            <td>7</td>
          </tr>
          <tr>
            <td>Название</td>
            <td>Категория</td>
            <td>2-5</td>
            <td>2300</td>
            <td>7</td>
          </tr>
              
        </table>
      </div>
      <button class="rating-section__btn">Показать еще</button>
    </section>
    <?php require_once './includes/footer.php'?>
  </body>
  <script src="./js/main.min.js"></script>
</html>
