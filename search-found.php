<?php 
  if($_GET['rel']!='tab'){
    include 'inc/header.php';
    echo '<div class="main-container" id="container">';
  }
?>

<div class="grid search-result">
  <div class="centered grid__col--24">
    <h2>All results for "<span class="font-weight--bold">aioerucywinruaxery</span>"</h2>
    <ul class="search-result--content">
      <?php
        include('inc/books.php');
        foreach($books as $book_id => $book) { 
          echo get_list_view_search($book_id,$book);
        }
      ?>
    </ul>
    
  </div>
</div>

<?php 
if($_GET['rel']!='tab'){
  echo "</div>";
  include 'inc/footer.php';
}?>