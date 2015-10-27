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
      <li class="category__item"><a href="#">Biology     </a></li>
      <li class="category__item"><a href="#">Chemistry   </a></li>
      <li class="category__item"><a href="#">Geography   </a></li>
      <li class="category__item"><a href="#">History     </a></li>
      <li class="category__item"><a href="#">Mathematics </a></li>
      <li class="category__item"><a href="#">Physics     </a></li>
      <li class="category__item"><a href="#">Programming </a></li>
      <li class="category__item"><a href="#">Writing     </a></li>
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
            $bookChemistry = '';
            $bookPhysics = '';
            $bookGeography = '';
            $bookHistory = '';
            $bookProgramming = '';
            $bookWriting = '';

            foreach($books as $book_id => $book) { 
              echo get_list_view_html($book_id,$book);
              if ($book["category"] == "mathematics") {
                $bookMathematics = $bookMathematics . get_list_view_html($book_id,$book);
              }
              if ($book["category"] == "biology") {
                $bookBiology = $bookBiology . get_list_view_html($book_id,$book);
              }

              if ($book["category"] == "chemistry") {
                $bookChemistry = $bookChemistry . get_list_view_html($book_id,$book);
              }

              if ($book["category"] == "physics") {
                $bookPhysics = $bookPhysics . get_list_view_html($book_id,$book);
              }

              if ($book["category"] == "geography") {
                $bookGeography = $bookGeography . get_list_view_html($book_id,$book);
              }

              if ($book["category"] == "history") {
                $bookHistory = $bookHistory . get_list_view_html($book_id,$book);
              }

              if ($book["category"] == "programming") {
                $bookProgramming = $bookProgramming . get_list_view_html($book_id,$book);
              }

              if ($book["category"] == "writing") {
                $bookWriting = $bookWriting . get_list_view_html($book_id,$book);
              }
            }
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

    <div class="grid">
      <h4>Chemistry</h4>
      <div class="library__shelf grid__col--24 grid">
        <div class="sliderarrow sliderarrow--left">&lsaquo;</div>
        <div class="sliderarrow sliderarrow--right">&rsaquo;</div>
        <ul class="books grid__col--24">
          <?php
              echo $bookChemistry;
          ?>
        </ul>
      </div>
    </div>

<!--     <div class="grid">
      <h4>Geography</h4>
      <div class="library__shelf grid__col--24 grid">
        <div class="sliderarrow sliderarrow--left">&lsaquo;</div>
        <div class="sliderarrow sliderarrow--right">&rsaquo;</div>
        <ul class="books grid__col--24">
          <?php
              echo $bookGeography;
          ?>
        </ul>
      </div>
    </div> -->

<!--     <div class="grid">
      <h4>History</h4>
      <div class="library__shelf grid__col--24 grid">
        <div class="sliderarrow sliderarrow--left">&lsaquo;</div>
        <div class="sliderarrow sliderarrow--right">&rsaquo;</div>
        <ul class="books grid__col--24">
          <?php
              echo $bookHistory;
          ?>
        </ul>
      </div>
    </div> -->

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
      <h4>Physics</h4>
      <div class="library__shelf grid__col--24 grid">
        <div class="sliderarrow sliderarrow--left">&lsaquo;</div>
        <div class="sliderarrow sliderarrow--right">&rsaquo;</div>
        <ul class="books grid__col--24">
          <?php
              echo $bookPhysics;
          ?>
        </ul>
      </div>
    </div>

    <div class="grid">
      <h4>Programming</h4>
      <div class="library__shelf grid__col--24 grid">
        <div class="sliderarrow sliderarrow--left">&lsaquo;</div>
        <div class="sliderarrow sliderarrow--right">&rsaquo;</div>
        <ul class="books grid__col--24">
          <?php
              echo $bookProgramming;
          ?>
        </ul>
      </div>
    </div>

    <!-- <div class="grid">
      <h4>Writing</h4>
      <div class="library__shelf grid__col--24 grid">
        <div class="sliderarrow sliderarrow--left">&lsaquo;</div>
        <div class="sliderarrow sliderarrow--right">&rsaquo;</div>
        <ul class="books grid__col--24">
          <?php
              echo $bookWriting;
          ?>
        </ul>
      </div>
    </div>
 -->

  </div>
</div>

<?php 
if($_GET['rel']!='tab'){
	echo "</div>";
	include 'inc/footer.php';
}?>
