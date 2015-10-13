<?php include("inc/books.php");

if (isset($_GET["id"])) {
  $book_id = $_GET["id"];
  if (isset($books[$book_id])) {
    $book = $books[$book_id];
  }
}
if (!isset($book)) {
  header("Location: library.php");
  exit();
}

$pageTitle = $book["name"];
include("inc/header.php"); ?>

<div class="main-container" id="container">
    <div class="single">
  <div class="grid single__item">
    <h2 class="page-title">Book Details</h2>
    <div class="single__brief">
      <div class="grid__col--6">
        <div><img src="<?php echo $book["img"]; ?>"></div>
      </div>
      <div class="grid__col--12">
        <h2><?php echo $book["title"]; ?></h2>
        <h6>By <?php echo $book["authors"]; ?></h6>
        <?php echo $book["description"]; ?>
        <h4>Publication Details</h4>
        <div class="grid profile__item">
          <div class="grid__col--8"><p>ISBN</p></div>
          <div class="grid__col--16"><p><strong><?php echo $book["ISBN-10"]; ?></strong></p></div>
        </div> <!-- end .profile__item -->
        <div class="grid profile__item">
          <div class="grid__col--8"><p>Edition Language</p></div>
          <div class="grid__col--16"><p><strong><?php echo $book["language"]; ?></strong></p></div>
        </div> <!-- end .profile__item -->
        <div class="grid profile__item">
          <div class="grid__col--8"><p>Publisher</p></div>
          <div class="grid__col--16"><p><strong><?php echo $book["publisher"]; ?></strong></p></div>
        </div> <!-- end .profile__item -->
      </div>
      <div class="grid__col--6">
        <button class="btn--info">Preview</button>
        <button class="btn--default">Add to my bookshelf</button>
      </div>
    </div>
  </div>
  <div class="grid single__item">
    <h4>Related Books</h4>
    <ul class="books">
      <li>
        <a class="pageurl" href="#book" id="example">
          <div class="image"><img src="img/featured/item-1.png"></div>
          <h6>Borrowed</h6>
        </a>
      </li>
      <li>
        <a href="#">
          <div class="image"><img src="img/featured/item-1.png"></div>
          <h6></h6>
        </a>
      </li>
      <li>
        <a href="#">
          <div class="image"><img src="img/featured/item-1.png"></div>
          <h6></h6>
        </a>
      </li>
      <li>
        <a href="#">
          <div class="image"><img src="img/featured/item-1.png"></div>
          <h6>Borrowed</h6>
        </a>
      </li>
      <li>
        <a href="#">
          <p> <span class="btn--info">Browse All</span></p>
        </a>
      </li>
    </ul>
  </div>
  <div class="grid single__item">
    <a class="back content-link" href="library.php">Back to Library</a>
  </div>
</div>
</div>

<script type="text/javascript">
  $(function() {
 
    var $container  = $('.books'),
      $articles = $container.children('li'),
      timeout;
 
    $articles.on( 'mouseenter', function( event ) {
     
      var $article  = $(this);
      clearTimeout( timeout );
      timeout = setTimeout( function() {
     
        if( $article.hasClass('active') ) return false;
     
        $articles.not( $article.removeClass('blur').addClass('active') )
             .removeClass('active')
             .addClass('blur');
     
      }, 65 );
   
    });
 
    $container.on( 'mouseleave', function( event ) {
   
      clearTimeout( timeout );
      $articles.removeClass('active blur');
   
    });
  });
</script>

<?php include("inc/footer.php"); ?>