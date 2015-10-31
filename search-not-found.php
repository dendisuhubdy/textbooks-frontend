<?php 
  if($_GET['rel']!='tab'){
    include 'inc/header.php';
    echo '<div class="main-container" id="container">';
  }
?>

<div class="grid search-result">
  <div class="centered grid__col--12">
    <h2>Ooops.. Your search "<span class="font-weight--bold">aioerucywinruaxery</span>" did not match any item.</h2>
    <table style="width:100%" class="search-result__icons">
      <tr>
        <td><a href="search-found.php"><div class="icn__popular"></div></a></td>
        <td><a href="./"><div class="icn__home"></div></a></td> 
      </tr>
      <tr>
        <td><a href="search-found.php"><p>View most popular search</p></a></td>
        <td><a href="./"><p>Return to our homepage</p></a></td> 
      </tr>
    </table>
  </div>
</div>

<?php 
if($_GET['rel']!='tab'){
  echo "</div>";
  include 'inc/footer.php';
}?>