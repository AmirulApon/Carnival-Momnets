<!--Footer-->
<section class="main-container-footer">
  <div class="container footer">
    <div class="row footer-inner">
      <div class="col-md-4 footer-social">
        <div class="logo">
           <a href="">
              <img src="assets/image/cm.png" alt="" />
            </a>
          
          <p >
          Welcome to Carnival Moments's Wedding Photography page! We understand that your wedding day is one of the most important and memorable days of your life. As your wedding photographer, our goal is to capture the magic and beauty of your special day, creating timeless memories that you can treasure forever.
          </p>
        </div>
        <div class="top-social">
          <ul>
              <li>
                <a href="#"><i class="fa-brands fa-facebook fa-icon"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa-brands fa-youtube fa-icon"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa-brands fa-twitter fa-icon"></i> </a>
              </li>
              <li>
                <a href="#"> <i class="fa-brands fa-linkedin fa-icon"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa-brands fa-instagram fa-icon"></i></a>
              </li>
            </ul>
        </div>
        
      </div>
      <div class="col-md-2 footer-link">
      <h3>Useful Links</h3>
          <ul>
            <li><a href="about.php">About us</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="photos.php"> Photos</a></li>
            <li><a href="videos.php">Videos</a></li>
          </ul>
      </div>
      <div class="col-md-2 footer-services">
      <h3>Services</h3>
          <ul>
            
            <li><a href="event.php">Event</a></li>
            <li><a href="wedding.php">Wedding</a></li>
            <li><a href="model.php">Model</a></li>
          </ul>
      </div>
      <div class="col-md-4 footer-subscribe">
      <h3>Subscribe Now</h3>

    <form class="subscribe" action="">
      <label for="email">Don’t miss our future updates! Get Subscribed Today!</label>
      <div class="subscribe_form">
        <input  type="email" class="form-control" id="email" name="email" placeholder="Your mail here"/>
        <button class="subscribebtn" type="submit">submit</button>
      </div>       
    </form>
      </div>
    </div>
    </div>
      <div class="container-fluid footer-outer ">
        <div class="container">
        <div class="row footer-outer-inner">
           <div class="col-md-6 left">
            <p>Copyright © 2022 Carnival Moments. All Rights Reserved.</p></div>
           <div class="col-md-6 right ">
            <p> Desgined & developed by <span>S A HASSAN APON <p></div>
        
        </div>
      </div>
      </div>
    
  

</section>
<section>
  <!-- Messenger Chat plugin Code -->
  <div id="fb-root"></div>

<!-- Your Chat plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "102881424696835");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v16.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
</section>
<!--//Footer-->