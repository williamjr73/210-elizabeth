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

    <title>210 Elizabeth Street - Coming Soon</title>
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
        <div class="block block3 opensmooth">
          <div class="tb">
            <div class="cell">

              <div class="wrap">

                <h3>Please don't hesitate to contact us now.</h3>

                <form method="POST" action="thank-you.php" id="contact-form">
                  <div class="wrapinput">
                    <label for="name" class="left-label">Full name</label>
                    <input id="name" type="text" name="fullname" required="" />
                  </div>

                  <div class="wrapinput">
                    <label for="email" class="left-label">Email</label>
                    <input id="email" type="email" name="email" required="" />
                  </div>

                  <div class="wrapinput">
                    <label for="phone" class="left-label">Phone</label>
                    <input id="phone" type="number" name="phone" required="" />
                  </div>

                  <div class="wrapinput">
                    <label for="message" class="left-label">Message</label>
                    <textarea id="message" rows="3"></textarea>
                  </div>

                  <div class="wrapinput">
                    <?php
                      session_start();
                      $_SESSION['val1'] = rand(1,9);
                      $_SESSION['val2'] = rand(1,9);
                    ?>
                    <label
                    for="sec-ques"
                    style="
                      text-align: left !important;
                      width: 45% !important;
                      max-width: 400px !important;
                      display: block;
                      margin: 0 auto;
                    "
                    >Security question! <?php echo $_SESSION['val1']. "+" .$_SESSION['val2']. "="; ?></label>
                    <img src="images/padlock.png" alt="padlock">
                    <input type="number" name="answer" placeholder="Your anwer here..." required="">
                  </div>
                  
                  <div class="wrapinput" style="
                    text-align: right !important;
                    width: 45% !important;
                    max-width: 400px !important;
                    margin: 0 auto !important;
                  ">
                    <input type="submit" name="submit" value="SUBMIT">
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>

        <div class="mobile mobile-footer">
          <img src="images/footer-image.jpg" width="100%" />
        </div>
    </div>
    

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
