<!DOCTYPE html>
<html lang="en">

  <?php include("includes/head.html"); ?>

  <body>

    <div class="container">

      <?php include("includes/navigation.html"); ?>

      <div id="page" class="index" display="none"></div>

      <!-- Start page content -->
      <div class="container-fluid">

        <div class="jumbotron">
          <h1>WckdDev</h1>
          <h3>Mobile Development</h3>
          <p>Clean, Simple, Secure Apps</p>
        </div>

        <div class="row">

          <div class="col-md-4">
            <img src="../../img/Mirror-PlayStore.png" class="img-responsive img-rounded">
          </div>

          <div class="col-md-8">
            <br />
            <p>
              Mirror by wckdDev is a simulated mirror app for your tablet or phone. 
              It's great for those quick checks on appearance or for everyday use. 
              Mirror currently has over 850,000 combined downloads and is available 
              on the Google and Amazon app stores.
            </p>
            <br/>
            <p><a href="mirror-home.php"  class="btn btn-primary" role="button">More Info &raquo;</a></p>
          </div>

        </div>

      </div>
      <br/>

      <!-- End page content -->

      <?php include("includes/footer.html"); ?>

    </div>

  <script>initPage();</script>
  </body>

</html>