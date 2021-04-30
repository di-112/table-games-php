<?php 
   $config = array(
      'title' => 'Table Games',
      'count_game_on_page' => 8,
      'db' => array(
         'user' => 'root', 
         'password' => 'root',
         'server' => '127.0.0.1',
         'name' => 'table-games'
      ),
      'refs' => array(
         'vk' => 'https://vk.com/id60831255'
      )   
      );

   $connection = mysqli_connect(
      $config['db']['server'],
      $config['db']['user'],
      $config['db']['password'],
      $config['db']['name']
   );

   if(!$connection){
      echo 'Не удадлось подключиться к базе данных';
      echo mysqli_connect_error();
      exit();
   }
?>
