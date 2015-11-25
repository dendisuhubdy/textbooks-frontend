<?php 
if($_GET['rel']!='tab'){
	include 'inc/header.php';
  include('inc/books.php');
	echo '<div class="main-container" id="container">';
}
?>
  
<div class="library grid">
  <h2 class="page-title">Library</h2>

  <!-- Side bar Menu: books' categories  -->
  <div class="grid__col--6 library__category">
    <div class="library__category__content">
      <div class="side-menu-toggle is-displayed-mobile"><h4>&#9776; Category</h4></div>
      <div>
        <a href="library.php" class="is-hidden-mobile"><h4>Category</h4></a>
        <ul class="category-menu">
          <li class="category-menu__item"><a href="profile.php">My Bookshelf</a></li>
          <li class="category-menu__item"><a href="library.php?category=biology"    >Biology     </a></li>
          <li class="category-menu__item"><a href="library.php?category=chemistry"  >Chemistry   </a></li>
          <li class="category-menu__item"><a href="library.php?category=geography"  >Geography   </a></li>
          <li class="category-menu__item"><a href="library.php?category=history"    >History     </a></li>
          <li class="category-menu__item"><a href="library.php?category=mathematics">Mathematics </a></li>
          <li class="category-menu__item"><a href="library.php?category=physics"    >Physics     </a></li>
          <li class="category-menu__item"><a href="library.php?category=programming">Programming </a></li>
          <li class="category-menu__item"><a href="library.php?category=writing"    >Writing     </a></li>
        </ul>
      </div>
    </div>

    
  </div>

  <!-- Lirary content: 
       (1) Print all books in selected category 
       (2) Library overview; shows #of books in each category -->
  <div class="grid__col--18 library__content ">

<?php

if (isset($_GET["category"])) {
  $category = $_GET["category"];
  // (1) Print all books in selected category 
?>

    <div class="category__header">
      <h1 class="page-subtitle category__header__item category__header__item--title"><?php echo $category; ?></h1>
      <div class="category__header__item category__header__item--option">
        <p>
          Sort by &nbsp;&nbsp;
          <!-- Sorting option -->
          <select id="sort-option" onchange="sortFunction()">
            <option value="added">Newest Added</option> 
            <option value="title">Title</option> 
            <option value="author">Author</option>
            <!-- <option value="popularity">Popularity</option> -->
          </select>
        </p>
      </div>
      
    </div>
  
    <!-- Print all books in selected category, sort by id -->
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


    <!-- Sorting function -->
    <?php
      function build_sorter($key) {
          return function ($a, $b) use ($key) {
              return strnatcmp($a[$key], $b[$key]);
          };
      }
    ?>

    <!-- Print all books in selected category, sort by title -->
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

    <!-- Print all books in selected category, sort by author's name -->
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


  

<?php
} else { ?>
  <!-- (2) Library overview; shows #of books in each category -->
<!--   <div class="grid">
    <h4>Recommended for you</h4>
    <div class="library__shelf grid__col--24 grid" id="recommended">
      <div class="sliderarrow sliderarrow--left">&lsaquo;</div>
      <div class="sliderarrow sliderarrow--right">&rsaquo;</div>
      <ul class="books recommended grid__col--24"> -->
        <?php
          
          $bookMathematics = '';
          $bookBiology     = '';
          $bookChemistry   = '';
          $bookPhysics     = '';
          $bookGeography   = '';
          $bookHistory     = '';
          $bookProgramming = '';
          $bookWriting     = '';

          $nRecommended    = 0;

          $nBookMathematics = 0;
          $nBookBiology     = 0;
          $nBookChemistry   = 0;
          $nBookPhysics     = 0;
          $nBookGeography   = 0;
          $nBookHistory     = 0;
          $nBookProgramming = 0;
          $nBookWriting     = 0;

          $nMax = 18;  // Maximum number of books in each shelf
          $flag = false;

          // $res = array($bookProgramming, $flag, $nBookProgramming);


          // Function to list the books
          function listBooks($n, $nMax, $books, $newBook, $flag) {              
            if ($n < $nMax) {
              $books = $books . $newBook;
              $n = $n + 1;
              $flag = false;  
            } else {
              $flag = true;
            }
            return array($books, $n, $flag);
          }

          foreach($books as $book_id => $book) { 
            // if ($nRecommended < $nMax) {
            //   echo get_list_view_html($book_id,$book);
            //   $nRecommended = $nRecommended + 1;
            //   $flag = false;
            // } else {
            //   $flag = true;
            // }
            
            if ($book["category"] == "programming") {
              $res = listBooks($nBookProgramming, $nMax, $bookProgramming, get_list_view_html($book_id,$book), $flag);
              // $res = listBooks($res[2], $nMax, $res[0], get_list_view_html($book_id,$book), $res[1]);
              $bookProgramming = $res[0];
              $nBookProgramming = $res[1];
              $flag = $res[2];


            }
            if ($book["category"] == "writing") {
              $res = listBooks($nBookWriting, $nMax, $bookWriting, get_list_view_html($book_id,$book), $flag);
              $bookWriting = $res[0];
              $nBookWriting = $res[1];
              $flag = $res[2];
            }
            if ($book["category"] == "mathematics") {
              $res = listBooks($nBookMathematics, $nMax, $bookMathematics, get_list_view_html($book_id,$book), $flag);
              $bookMathematics = $res[0];
              $nBookMathematics = $res[1];
              $flag = $res[2]; 
            }
            if ($book["category"] == "biology") {
              $res = listBooks($nBookBiology, $nMax, $bookBiology, get_list_view_html($book_id,$book), $flag);
              $bookBiology = $res[0];
              $nBookBiology = $res[1];
              $flag = $res[2];
            }

            if ($book["category"] == "chemistry") {
              $res = listBooks($nBookChemistry, $nMax, $bookChemistry, get_list_view_html($book_id,$book), $flag);
              $bookChemistry = $res[0];
              $nBookChemistry = $res[1];
              $flag = $res[2];
            }

            if ($book["category"] == "physics") {
              $res = listBooks($nBookPhysics, $nMax, $bookPhysics, get_list_view_html($book_id,$book), $flag);
              $bookPhysics = $res[0];
              $nBookPhysics = $res[1];
              $flag = $res[2];
            }

            if ($book["category"] == "geography") {
              $res = listBooks($nBookGeography, $nMax, $bookGeography, get_list_view_html($book_id,$book), $flag);
              $bookGeography = $res[0];
              $nBookGeography = $res[1];
              $flag = $res[2];
            }

            if ($book["category"] == "history") {
              $res = listBooks($nBookHistory, $nMax, $bookHistory, get_list_view_html($book_id,$book), $flag);
              $bookHistory = $res[0];
              $nBookHistory = $res[1];
              $flag = $res[2];
            }

            

            

            if ($flag == true) {
              break; // Stop the loop if all shelf have nMax #of books
            }
          }
        ?>
<!--       </ul>
    </div>
  </div> -->

 <?php
  function printBooks($category, $books){
    $output = '';

    if ($books != '') {
      $output = $output . '<div class="grid">';
      $output = $output . '  <h4>' . $category;
      $output = $output . '    <a href="library.php?category=' . $category . '" class="sub-note">See All</a>';
      $output = $output . '  </h4>';
      $output = $output . '  <div class="library__shelf grid__col--24 grid">';
      $output = $output . '    <div class="sliderarrow sliderarrow--left">&lsaquo;</div>'; // Left arrow
      $output = $output . '    <div class="sliderarrow sliderarrow--right">&rsaquo;</div>';// Right arrow
      $output = $output . '    <ul class="books grid__col--24">';
      $output = $output . $books;
      $output = $output . '    </ul>';
      $output = $output . '  </div>';
      $output = $output . '</div>';
    }

    return $output;

    
  }

  // Print the books
  echo printBooks("biology", $bookBiology);
  echo printBooks("chemistry", $bookChemistry);
  echo printBooks("geography", $bookGeography);
  echo printBooks("history", $bookHistory);
  echo printBooks("mathematics", $bookMathematics);
  echo printBooks("physics", $bookPhysics);
  echo printBooks("programming", $bookProgramming);
  echo printBooks("writing", $bookWriting);

}
?>

  </div>
</div>

<?php 
if($_GET['rel']!='tab'){
	echo "</div>";
	include 'inc/footer.php';
} ?>
