<div class="pagination">
      <div class="pagination__refs">
        <?php 
          $url = $_SERVER['REQUEST_URI'];
          if(!isset($_GET['page'])) $url =  $url . '&page=';
          else  $url = preg_replace('/\d+$/', '', $url);
        ?>
        <?php if($number_page > 1){?> <a href=<?php echo $url . ($number_page-1) ?> class="pagination__ref"><?php echo ($number_page-1) ?></a><?php }?>
        <a href=<?php echo $url . $number_page ?> class="pagination__ref active"><?php echo $number_page ?></a>
        <?php if($number_page < $total_pages){?> <a href=<?php echo $url . ($number_page+1) ?> class="pagination__ref"><?php echo ($number_page+1) ?></a><?php }?>
    </div>