<?php 
if($_GET['rel']!='tab'){
  include 'inc/header.php';
  echo '<div class="main-container" id="container">';
}
?>

<div class="grid">
  <h2 class="page-title">Billing History</h2>
  <?php include('inc/sidebar.php') ?>
  <div class="grid__col--19 fixed-height">
    <div class="grid">
      <div class="centered grid__col--12 billing__reminder">
        <h2>Your account will be billed $8.99 on Aug 24, 2015.</h2>
        <button class="btn--warning">Pause Membership</button>
      </div>
    </div>
    <div class="grid">
      <table class="data billing__history">
        <thead>
          <tr>
            <th>Inv no.</th>
            <th>Date</th>
            <th>Payment Status</th>
            <th>Amount</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>428279</td>
            <td>Sep 13, 2013</td>
            <td>Paid</td>
            <td>$25.00</td>
            <td class="actions"><a class="btn--blank icn">Download PDF</a></td>
          </tr>
          <tr>
            <td>460611</td>
            <td>Oct 10, 2013</td>
            <td>Paid</td>
            <td>$25.00</td>
            <td class="actions"><a class="btn--blank icn">Download PDF</a></td>
          </tr>
          <tr>
            <td>503391</td>
            <td>Nov 10, 2013</td>
            <td>Paid</td>
            <td>$25.00</td>
            <td class="actions"><a class="btn--blank icn">Download PDF</a></td>
          </tr>
          <tr>
            <td>1989712</td>
            <td>Feb 10, 2014</td>
            <td>Paid</td>
            <td>$25.00</td>
            <td class="actions"><a class="btn--blank icn">Download PDF</a></td>
          </tr>
          <tr>
            <td>2671152</td>
            <td>Mar 10, 2014</td>
            <td>Paid</td>
            <td>$25.00</td>
            <td class="actions"><a class="btn--blank icn">Download PDF</a></td>
          </tr>
          <tr>
            <td>3417472</td>
            <td>Apr 10, 2014</td>
            <td>Paid</td>
            <td>$25.00</td>
            <td class="actions"><a class="btn--blank icn">Download PDF</a></td>
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
