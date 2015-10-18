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
  <div class="grid description--content">
    
    <h1>Choose what you want to read</h1>
    <div class="grid">
      <div class="grid__col--8">
        <div class="icn__mathematics"></div>
        <h2>Mathematics</h2>
      </div>
      <div class="grid__col--8">
        <div class="icn__biography"></div>
        <h2>Biography</h2>
      </div>
      <div class="grid__col--8">
        <div class="icn__geographic"></div>
        <h2>Geographic</h2>
      </div>
    </div> <!-- end .grid -->

    <div class="grid">
      <div class="grid__col--8">
        <div class="icn__language"></div>
        <h2>Language</h2>
      </div>
      <div class="grid__col--8">
        <div class="icn__physics"></div>
        <h2>Physics</h2>
      </div>
      <div class="grid__col--8">
        <div class="icn__chemistry"></div>
        <h2>Chemistry</h2>
      </div>
    </div> <!-- end .grid -->

    <button class="btn--default">Browse the library</button>
    
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