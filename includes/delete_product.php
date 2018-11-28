<?php
  include('db.php');
  include('backout_header.php');
  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $_SESSION['temp_prod_id'] = $id;
  }
?>

<div class="ui container full-basic-segment">

      <div class="ui container">
        <div class="ui grid">
          <div class="one column row">
            <div class="center aligned column">
              <h3 class="ui header">Site Administrator</h3>
            </div>
          </div>  

          <div class="one column row">
            <div class="center aligned column">
              <h4 class="ui header">Delete</h4>
            </div>
          </div>  

          <div class="one column row">
            <div class="column">

              <!-- CATALOG -->
              <div class="ui bottom attached tab segment active" data-tab="catalog">
                <?php
                  echo "<div class=\"ui one column centered grid\"><div class=\"row\">";
                  echo "<h3>Delete for sure?</h3>";
                  echo "</div></div>";
                  echo "<div class=\"ui one column centered grid\"><div class=\"row\">";
            echo "<button class=\"black ui secondary button\" name=\"back\"><a style=\"color:#FFF;\" href=\"../admin.php\">Go Back</a></button>";
            if(isset($_GET['id'])){
              echo "<form name=\"delete_form\" action=\"delete.php\" method=\"POST\">";
              echo "<button class=\"red ui submit button\" name=\"delete\">Delete</button>";
              echo "</form>";
            } else {
              //Delete button does nothing if ID is missing
              echo "<button class=\"red ui button\" name=\"delete\">Delete</button>";
            }
            echo "</div></div>";
                ?>
              </div>

            </div>
          </div>  <!--End of row with table-->

        </div>    
      </div>
    </div>

    <div id="footer-style" class="ui container fluid footer-style">
      <div class="center aligned one column stackable ui grid sign-up">
      <div class="eight wide column">
        <h4>Sign up for the Boujee Bin Bulletin</h4>
        <form class="ui form">
          <div class="field">
            <div class="ui action input">
              <input type="email" name="email" placeholder="E-mail address">
              <button class="ui button">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div id="footer-style" class="ui container fluid footer-style">
      <footer class="ui container basic segment">
        <?php include('backout_footer.html'); ?>
      </footer>
    </div>
  </body><!--end body-->
</html>