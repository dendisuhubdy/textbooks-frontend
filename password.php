<?php 
if($_GET['rel']!='tab'){
  include 'inc/header.php';
  echo '<div class="main-container" id="container">';
}
?>

<div class="grid">
  <h2 class="page-title">Change Password</h2>
  <?php include('inc/sidebar.php') ?>
  <div class="grid__col--19 fixed-height" id="profile"> <!-- profile content -->
    <div class="grid__col--24">
      <div class="grid profile__item">
        <div class="grid__col--8"><p>New Password</p></div>
        <div class="grid__col--16"><p><strong>adfsd</strong></p></div>
      </div> <!-- end .profile__item -->

      <div class="grid profile__button">
        <div class="grid__col--8"><a class="btn--default" href="profile.php">Save Password</a></div>
        <div class="grid__col--16"><a class="btn--blank" href="profile.php">Cancel</a></div>
      </div> <!-- end .profile__item -->

    </div> 
  
  </div> <!-- end #profile -->



</div>

<?php 
if($_GET['rel']!='tab'){
  echo "</div>";
  include 'inc/footer.php';
}?>
