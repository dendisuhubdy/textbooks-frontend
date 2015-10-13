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
          Sign up for $8.99 and get access to 8 textbooks for 6 months.
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
    <div class="centered grid__col--12">

    </div>
  </div>
</div> <!-- end .description -->


<div class="description">
  <div class="grid description--content"> 
    <div class="grid__col--14 description--content--text">
      <h1>Education spending reformed</h1>
      <p>Subscribe to Oyster Unlimited to get access to over 1 million books for $9.95 a month. Want to read something that’s not in subscription? Just buy it in our store.</p>
      <button class="btn--info signUp"><a href="#">Start Free Trial</a></button>
    </div>
    <div class="grid__col--8">
      <img src="http://placehold.it/350x400">
    </div>
  </div>
</div> <!-- end .description -->

<!-- <p class="icn icn--learn-more"><span>&#x002C7;</span></p> -->

<div class="description">
  <div class="grid description--content"> 
    <div class="grid__col--8 description--content--text">
      <h1>Read Anywhere</h1>
      <p>Oyster is an app for discovering and reading books on your smartphone, tablet, or web browser. Books appear instantly, you can read them offline, and you never have to return them!</p>
    </div>
    <div class="grid__col--14">
      <img src="http://placehold.it/700x400">
    </div>
  </div>
</div> <!-- end .description -->

<p class="icn icn--learn-more"><span>&#x002C7;</span></p>

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


<?php 
if($_GET['rel']!='tab'){
	echo "</div>";
	include 'inc/footer.php';
}?>