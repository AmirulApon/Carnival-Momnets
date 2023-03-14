<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <!--CSS-->
  <?php include './elements/header.php'; ?>
  <!--//CSS-->
</head>

<body>
  <header>
    <!--Header-->
    <?php include './elements/headerDesign.php'; ?>
    <!--//Header-->
  </header>
  <section class="main-container">
    <div class="container login-form">
      <div class="text">
        <h1>Customer Login</h1>
      </div>
      

      <form class="row login ">

        <div class="col-md-12 form-group login-inner ">
          <label class="form-label content" for="fname">Booking ID:</label>
          <input class="form-control content-input" type="text" id="bookingid" placeholder="Enter Booking ID" required>
        </div>

        <div class="col-md-12 form-group login-inner ">
          <label class="form-label content" for="lname">Mobile No:</label>
          <input class="form-control content-input" type="text" id="mobileno" placeholder="Enter Mobile No" required>
        </div>
        <button class="col-md-3 btn btn-primary blue-btn" type="submit">Send Message</button>
      </form>
    </div>


  </section>
  <footer>
    <!--Footer-->
    <?php include './elements/footerDesign.php'; ?>
    <?php include './elements/footer.php'; ?>
    <!--//Footer-->
  </footer>
</body>

</html>