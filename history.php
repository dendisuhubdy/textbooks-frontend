<?php 
if($_GET['rel']!='tab'){
  include 'inc/header.php';
  echo '<div class="main-container" id="container">';
}
?>

<div class="grid">
  <h2 class="page-title">Lending History</h2>
  <?php include('inc/sidebar.php') ?>
  <div class="grid__col--19 fixed-height">
    <div class="grid">
      <table class="data checkedout__history">
        <thead>
          <tr>
            <th>Cover</th>
            <th>Title</th>
            <th>Checked Out</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <div>
                <img alt="Programming AJAX" src="img/bookcover/calculus.png" />
              </div>
            </td>
            <td>
              <h3 class="book__info--title">Calculus With Analytic Geometry</h3>
              <p class="book__info--authors">by <strong>Ron Larson, Robert P. Hostetler, Bruce H. Edwards</strong></p>
              <p class="book__info--isbn">ISBN: 0395869749 (ISBN13: 9780395869741)</p>
            </td>
            <td>Apr 10, 201</td>
          </tr>
          <tr>
            <td>
              <div>
                <img alt="Programming AJAX" src="img/bookcover/calculus.png" />
              </div>
            </td>
            <td>
              <h3 class="book__info--title">Calculus With Analytic Geometry</h3>
              <p class="book__info--authors">by <strong>Ron Larson, Robert P. Hostetler, Bruce H. Edwards</strong></p>
              <p class="book__info--isbn">ISBN: 0395869749 (ISBN13: 9780395869741)</p>
            </td>
            <td>Apr 10, 201</td>
          </tr>
          <tr>
            <td>
              <div>
                <img alt="Programming AJAX" src="img/bookcover/calculus.png" />
              </div>
            </td>
            <td>
              <h3 class="book__info--title">Calculus With Analytic Geometry</h3>
              <p class="book__info--authors">by <strong>Ron Larson, Robert P. Hostetler, Bruce H. Edwards</strong></p>
              <p class="book__info--isbn">ISBN: 0395869749 (ISBN13: 9780395869741)</p>
            </td>
            <td>Apr 10, 201</td>
          </tr>
          <tr>
            <td>
              <div>
                <img alt="Programming AJAX" src="img/bookcover/calculus.png" />
              </div>
            </td>
            <td>
              <h3 class="book__info--title">Calculus With Analytic Geometry</h3>
              <p class="book__info--authors">by <strong>Ron Larson, Robert P. Hostetler, Bruce H. Edwards</strong></p>
              <p class="book__info--isbn">ISBN: 0395869749 (ISBN13: 9780395869741)</p>
            </td>
            <td>Apr 10, 201</td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>



</div>

<?php 
if($_GET['rel']!='tab'){
  echo "</div>";
  include 'inc/footer.php';
}?>