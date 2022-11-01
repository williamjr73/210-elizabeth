<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/logo11.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style_j.css">

    <title>Jebog - Single Page Responsive Coming Soon</title>
  </head>
  <body>

    <!-- Section Opening Loader -->
    <div class="openingloader">
        <div class="tb">
          <div class="cell">
              <div class="wrapspin">
                  <div class="loader"></div>
              </div>
          </div>
        </div>
    </div>
    
    <!-- Head -->
    <!-- <div class="head">
        <img src="images/logo11.png" class="img-fluid" alt="logo">
    </div> -->
    
    <!-- Copyrights -->
    <!-- <div class="cp">
        <p>&copy; <?php echo date('Y'); ?> Jebog</p>
    </div> -->
    
    <!-- Main content -->
    <div class="wrapblock">
        <div class="block block1">
          <div class="tb">
            <div class="cell">
                <div id="daypost"></div>
            </div>
          </div>
        </div>
        <div class="block block1 hidesmooth">
          <div class="tb">
            <div class="cell">
              <div id="daypost"></div>
            </div>
          </div>
        </div>
        <div class="block block2 blocktransform">
          <div class="tb">
            <div class="cell">
              <div class="content">
                <div class="top">
                  <img src="images/header-image.jpg" style="width: 90%;" />
                  <img
                    src="images/logo.png"
                    width="200px"
                    style="margin: 5px 0 10px;"
                  />
                  <p style="font-size: 20px;">
                    A line of text to here regarding words LOFTS and OFFICES
                  </p>
                </div>
                <div class="bottom"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="block block3">
          <div class="tb">
            <div class="cell">

              <div class="wrap">

                <h3>Please don't hesitate to contact us now.</h3>

                <form method="POST" action="thank-you.php">
                  <div class="wrapinput">
                    <img src="images/user.png" alt="user">
                    <input type="text" name="fullname" placeholder="Full name" required="">
                  </div>

                  <div class="wrapinput">
                    <img src="images/email.png" alt="email">
                    <input type="email" name="email" placeholder="Email" required="">
                  </div>

                  <div class="wrapinput">
                    <img src="images/phone.png" alt="number">
                    <input type="number" name="phone" placeholder="Phone" required="">
                  </div>
                  
                  <div class="wrapinput">
                    <img src="images/comment.png" alt="comment">
                    <textarea rows="3" placeholder="Message"></textarea>
                  </div>

                  <div class="wrapinput">
                    <?php
                      session_start();
                      $_SESSION['val1'] = rand(1,9);
                      $_SESSION['val2'] = rand(1,9);
                    ?>
                    <label>Security question! <?php echo $_SESSION['val1']. "+" .$_SESSION['val2']. "="; ?></label>
                    <img src="images/padlock.png" alt="padlock">
                    <input type="number" name="answer" placeholder="Your anwer here..." required="">
                  </div>
                  
                  <div class="wrapinput">
                    <input type="submit" name="submit" value="SEND">
                  </div>
                </form>

                <div class="atag atagback">
                  <a href="#" id="goback"><img src="images/prevdark.png" class="img-fluid arrow arrowprev" alt="go back"> &nbsp;GO BACK</a>
                </div>

              </div>
            </div>
          </div>
        </div>
    </div>
    

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
