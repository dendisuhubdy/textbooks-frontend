<?php 
if($_GET['rel']!='tab'){
	include 'inc/header.php';
	echo '<div class="main-container" id="container">';
}
?>

<div class="grid">
  <h2 class="page-title">Profile</h2>
  <?php include('inc/sidebar.php') ?>

  <div class="grid__col--19 fixed-height" id="profile"> <!-- profile content -->
    <div class="centered grid__col--16 profile__brief">
      <div class="grid profile__item">
        <div class="grid__col--8"><p>First Name</p></div>
        <div class="grid__col--16"><p><strong>Ilma</strong></p></div>
      </div> <!-- end .profile__item -->

      <div class="grid profile__item">
        <div class="grid__col--8"><p>Last Name</p></div>
        <div class="grid__col--16"><p><strong>Andayana</strong></p></div>
      </div> <!-- end .profile__item -->

      <div class="grid profile__item">
        <div class="grid__col--8"><p>Email Address</p></div>
        <div class="grid__col--16"><p><strong>ilma.andayana@gmail.com</strong></p></div>
      </div> <!-- end .profile__item -->

      <div class="grid profile__item">
        <div class="grid__col--8"><p>Password</p></div>
        <div class="grid__col--16"><p><strong>&#8226; &#8226; &#8226; &#8226; &#8226; &#8226; &#8226; &#8226;</strong></p></div>
      </div> <!-- end .profile__item -->

      <div class="grid profile__button">
        <div class="grid__col--12"><a rel="side" class="btn--default" href="edit_profile.php">Edit Profile</a></div>
        <div class="grid__col--12"><a rel="side" class="btn--blank"   href="password.php">Change Password</a></div>
      </div> <!-- end .profile__item -->


    </div> <!-- end .profile__brief -->

    <div class="profile__bookshelf block grid__col--24">
      <h4 class="block__title">Bookshelf</h4>
      <ul class="bookshelf" id="bookshelf">
        <li class="grid__col--half grid__col--12 grid bookshelf__item">

          <div class="grid__col--17 book__info">
            <h3 class="book__info--title">Calculus With Analytic Geometry</h3>
            <p class="book__info--authors">by <strong>Ron Larson, Robert P. Hostetler, Bruce H. Edwards</strong></p>
            <p class="book__info--isbn">ISBN: 0395869749 (ISBN13: 9780395869741)</p>
          </div>
          <div class="grid__col--7 book__cover">
            <img alt="Programming AJAX" src="img/bookcover/calculus.png" />
          </div>

        </li>
        <li class="grid__col--half grid__col--12 grid bookshelf__item">

          <div class="grid__col--17 book__info">
            <h3 class="book__info--title">Calculus With Analytic Geometry</h3>
            <p class="book__info--authors">by <strong>Ron Larson, Robert P. Hostetler, Bruce H. Edwards</strong></p>
            <p class="book__info--isbn">ISBN: 0395869749 (ISBN13: 9780395869741)</p>
          </div>
          <div class="grid__col--7 book__cover">
            <img alt="Programming AJAX" src="img/bookcover/calculus.png" />
          </div>

        </li>
        <li class="grid__col--half grid__col--12 grid bookshelf__item">

          <div class="grid__col--17 book__info">
            <h3 class="book__info--title">Calculus With Analytic Geometry</h3>
            <p class="book__info--authors">by <strong>Ron Larson, Robert P. Hostetler, Bruce H. Edwards</strong></p>
            <p class="book__info--isbn">ISBN: 0395869749 (ISBN13: 9780395869741)</p>
          </div>
          <div class="grid__col--7 book__cover">
            <img alt="Programming AJAX" src="img/bookcover/calculus.png" />
          </div>

        </li>
        <li class="grid__col--half grid__col--12 grid bookshelf__item">
          <div id="add"><span>Add A Title</span></div>
        </li>
      </ul>
    </div> <!-- end .profile__bookshelf -->
  </div> <!-- end #profile -->



</div>


<?php 
if($_GET['rel']!='tab'){
	echo "</div>";
	include 'inc/footer.php';
}?>