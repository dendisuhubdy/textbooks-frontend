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
      <li class="category__item"><a href="library.php?category=biology"    >Biology     </a></li>
      <li class="category__item"><a href="library.php?category=chemistry"  >Chemistry   </a></li>
      <li class="category__item"><a href="library.php?category=geography"  >Geography   </a></li>
      <li class="category__item"><a href="library.php?category=history"    >History     </a></li>
      <li class="category__item"><a href="library.php?category=mathematics">Mathematics </a></li>
      <li class="category__item"><a href="library.php?category=physics"    >Physics     </a></li>
      <li class="category__item"><a href="library.php?category=programming">Programming </a></li>
      <li class="category__item"><a href="library.php?category=writing"    >Writing     </a></li>
    </ul>

    
  </div>

  <div class="library__content grid__col--19">

<?php

if (isset($_GET["category"])) {
  $category = $_GET["category"];
?>

    <div class="category__header">
      <h1 class="page-subtitle category__header__item category__header__item--title"><?php echo $category; ?></h1>
      <div class="category__header__item category__header__item--option">
        <p>
          Sort by &nbsp;&nbsp;

          <select id="sort-option" onchange="sortFunction()">
            <option value="added">Newest Added</option> 
            <option value="title">Title</option> 
            <option value="author">Author</option>
            <option value="popularity">Popularity</option>
          </select>
        </p>
      </div>
      
    </div>
  

    <div class="category__opt category__opt--added">
      <ul class="category__books">
        <?php 
          $listBooks = '';
          foreach($books as $book_id => $book) { 
            if ($book["category"] == $category) {
              $listBooks = $listBooks . get_list_view_html_full($book_id,$book);
            }
          }
          echo $listBooks;
        ?>
      </ul>
    </div>


    <?php
      function build_sorter($key) {
          return function ($a, $b) use ($key) {
              return strnatcmp($a[$key], $b[$key]);
          };
      }
    ?>

    <?php 
      usort($books, build_sorter('title'));  
    ?>

    <div class="category__opt category__opt--title">
      <ul class="category__books">
        <?php 
          $listBooks = '';
          foreach($books as $book_id => $book) { 
            if ($book["category"] == $category) {
              $listBooks = $listBooks . get_list_view_html_full($book_id,$book);
            }
          }
          echo $listBooks;
        ?>
      </ul>
    </div>

    <?php 
      usort($books, build_sorter('authors'));  
    ?>

    <div class="category__opt category__opt--author">
      <ul class="category__books">
        <?php 
          $listBooks = '';
          foreach($books as $book_id => $book) { 
            if ($book["category"] == $category) {
              $listBooks = $listBooks . get_list_view_html_full($book_id,$book);
            }
          }
          echo $listBooks;
        ?>
      </ul>
    </div>

  <!--   <?php 
      asort($books, build_sorter('popularity'));  
    ?>

    <ul class="category__books">
      <?php 
        $listBooks = '';
        foreach($books as $book_id => $book) { 
          if ($book["category"] == $category) {
            $listBooks = $listBooks . get_list_view_html_full($book_id,$book);
          }
        }
        echo $listBooks;
      ?>
    </ul>  -->   






    



<?php
} else { ?>

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
      <h4>Biology 
        <a href="library.php?category=biology" class="sub-note">See All</a>
      </h4>
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
      <h4>Chemistry <a href="library.php?category=chemistry" class="sub-note">See All</a></h4>
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
      <h4>Geography <a href="library.php?category=geography" class="sub-note">See All</a></h4>
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
      <h4>History <a href="library.php?category=history" class="sub-note">See All</a></h4>
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
      <h4>Mathematics <a href="library.php?category=mathematics" class="sub-note">See All</a></h4>
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
      <h4>Physics <a href="library.php?category=physics" class="sub-note">See All</a></h4>
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
      <h4>Programming <a href="library.php?category=programming" class="sub-note">See All</a></h4>
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
      <h4>Writing <a href="library.php?category=writing" class="sub-note">See All</a></h4>
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

  <!-- </div> -->
<!-- </div> -->


<?php
}
?>

  </div>
</div>

<?php 
if($_GET['rel']!='tab'){
	echo "</div>";
	include 'inc/footer.php';
} ?>
