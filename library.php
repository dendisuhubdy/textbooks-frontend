<?php 
if($_GET['rel']!='tab'){
	include 'inc/header.php';
  include('inc/books.php');
	echo '<div class="main-container" id="container">';
}
?>

<div class="library grid">
  <h2 class="page-title">Library</h2>
  
  <div class="library__category grid__col--5">
    <h4>Category</h4>
    <ul class="category">
      <li class="category__item"><a href="#">My Bookshelf</a></li>
      <li class="category__item"><a href="#">Mathematics </a></li>
      <li class="category__item"><a href="#">Biology     </a></li>
      <li class="category__item"><a href="#">Geology     </a></li>
      <li class="category__item"><a href="#">Languages   </a></li>
    </ul>

    
  </div>
  
  <div class="library__content grid__col--19">
    <div class="grid">
      <h4>Recommended for you</h4>
      <div class="library__shelf grid__col--24 grid" id="recommended">
        <div class="sliderarrow sliderarrow--left">&lsaquo;</div>
        <div class="sliderarrow sliderarrow--right">&rsaquo;</div>
        <ul class="books recommended grid__col--24">
          <?php
            
            $bookMathematics = '';
            $bookBiology = '';

            foreach($books as $book_id => $book) { 
              echo get_list_view_html($book_id,$book);
              if ($book["category"] == "mathematics") {
                $bookMathematics = $bookMathematics . get_list_view_html($book_id,$book);
              }
              if ($book["category"] == "biology") {
                $bookBiology = $bookBiology . get_list_view_html($book_id,$book);
              }
            }
          ?>
        </ul>
      </div>
    </div>

    <div class="grid">
      <h4>Mathematics</h4>
      <div class="library__shelf grid__col--24 grid">
        <div class="sliderarrow sliderarrow--left">&lsaquo;</div>
        <div class="sliderarrow sliderarrow--right">&rsaquo;</div>
        <ul class="books grid__col--24">
          <?php
              echo $bookMathematics;
          ?>
        </ul>
      </div>
    </div>

    <div class="grid">
      <h4>Biology</h4>
      <div class="library__shelf grid__col--24 grid">
        <div class="sliderarrow sliderarrow--left">&lsaquo;</div>
        <div class="sliderarrow sliderarrow--right">&rsaquo;</div>
        <ul class="books grid__col--24">
          <?php
              echo $bookBiology;
          ?>
        </ul>
      </div>
    </div>


  </div>
</div>

<?php 
if($_GET['rel']!='tab'){
	echo "</div>";
	include 'inc/footer.php';
}?>