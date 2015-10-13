<?php 
if($_GET['rel']!='tab'){
  include 'inc/header.php';
  echo '<div class="main-container" id="container">';
}
?>

<div class="grid">
  <h2 class="page-title">Notifications</h2>
  <?php include('inc/sidebar.php') ?>
  <div class="grid__col--19 fixed-height" id="profile"> <!-- profile content -->
    <table class="notifications">
      <tbody>
        <tr>
          <td>
            <h5>New Book</h5>
            <h6>16 days ago</h6>
          </td>
          <td><a href="#">
            <h3 class="book__info--title">Calculus With Analytic Geometry</h3>
            <p class="book__info--authors">by <strong>Ron Larson, Robert P. Hostetler, Bruce H. Edwards</strong></p>
            <p class="book__info--isbn">ISBN: 0395869749 (ISBN13: 9780395869741)</p>
          </a></td>
        </tr> 
        <tr>
          <td>
            <h5>New Book</h5>
            <h6>16 days ago</h6>
          </td>
          <td><a href="#">
            <h3 class="book__info--title">Calculus With Analytic Geometry</h3>
            <p class="book__info--authors">by <strong>Ron Larson, Robert P. Hostetler, Bruce H. Edwards</strong></p>
            <p class="book__info--isbn">ISBN: 0395869749 (ISBN13: 9780395869741)</p>
          </a></td>
        </tr> 
        <tr>
          <td>
            <h5>New Book</h5>
            <h6>16 days ago</h6>
          </td>
          <td><a href="#">
            <h3 class="book__info--title">Calculus With Analytic Geometry</h3>
            <p class="book__info--authors">by <strong>Ron Larson, Robert P. Hostetler, Bruce H. Edwards</strong></p>
            <p class="book__info--isbn">ISBN: 0395869749 (ISBN13: 9780395869741)</p>
          </a></td>
        </tr>  
      </tbody>
    </table>
  </div> <!-- end #profile -->
</div>

<?php 
if($_GET['rel']!='tab'){
  echo "</div>";
  include 'inc/footer.php';
}?>