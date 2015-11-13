<?php 
  if($_GET['rel']!='tab'){
  	include 'inc/header.php';
  	echo '<div class="main-container" id="container">';
  }
?>

<div class="banner">
  <div class="grid banner--content">
    <div class="grid__col--13 banner--content__item--text">
      <div>
        <h1>
          <span>Get your <b>textbooks!</b></span> 
        </br>
          What are you waiting for?
        </h1>
        <h2>
          For just $2.99/mo for students (specific majors) or $8.99 for unlimited textbooks.
        </h2>
        <button class="btn--default signUp" id="signUp">Sign Up</button>
      </div>
    </div>
    <div class="grid__col--11 banner--content__item--image is-collapsed-mobile">
      <img src="img/booksinmonitor.svg">
    </div>
  </div>
</div> <!-- end .banner -->

<!-- <p class="icn icn--learn-more icn--learn-more--1">Learn More<br><span>&#x002C7;</span></p> -->


<div class="description">
  <div class="grid description--content" id="front-browselibrary">
    
    <h1>Choose what you want to read</h1>
    <div class="centered grid__col--18 categories-icn">
      <div>
        <a href="library.php?category=mathematics"><div class="icn__mathematics"></div>
        <h2>Mathematics</h2></a>
      </div>
      <div>
        <a href="library.php?category=biology"    ><div class="icn__biology"></div>
        <h2>Biology</h2></a>
      </div>
      <div>
        <a href="library.php?category=chemistry"  ><div class="icn__chemistry"></div>
        <h2>Chemistry</h2></a>
      </div>
      <div>
        <a href="library.php?category=physics"    ><div class="icn__physics"></div>
        <h2>Physics</h2></a>
      </div>
      <div>
        <a href="library.php?category=programming"><div class="icn__programming"></div>
        <h2>Programming</h2></a>
      </div>
      <div>
        <a href="library.php?category=history"    ><div class="icn__history"></div>
        <h2>History</h2></a>
      </div>
      <div>
        <a href="library.php?category=writing"    ><div class="icn__writing"></div>
        <h2>Writing</h2></a>
      </div>
      <div>
        <a href="library.php?category=geography"  ><div class="icn__geography"></div>
        <h2>Geography</h2></a>
      </div>
      
    </div> <!-- end .grid -->

    <a href="library.php" class="btn--default">Browse the library</a>
    
  </div>
</div> <!-- end .description -->

<div class="description">
  <div class="grid description--content">
    <div class="grid__col--18">
      <div class="grid__col--14">
        <p class="font-size--large">Save on college cost!</p>
      </div>
      <div class="grid__col--10">
        <img src="img/smiley.svg">
      </div>
    </div>
    
  </div>
</div> <!-- end .description -->



<?php 
if($_GET['rel']!='tab'){
	echo "</div>";
	include 'inc/footer.php';
}?>