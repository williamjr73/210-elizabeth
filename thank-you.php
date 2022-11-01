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
    <div class="head">
        <img src="images/logo11.png" class="img-fluid" alt="logo">
    </div>
    
    <!-- Copyrights -->
    <div class="cp">
        <p>&copy; <?php echo date('Y'); ?> Jebog</p>
    </div>
    
    <!-- Main content -->
    <div class="wrapblock">
        <div class="block block1 blockimg" style="background: url(images/green7.jpg) no-repeat center center;background-size: cover;-webkit-background-size: cover;-moz-background-size: cover;-ms-background-size: cover;-o-background-size: cover;"></div>

        <div class="block block2 blockcustom">
          <div class="tb">
            <div class="cell">
                <div class="wrap">

                  <?php
                    session_start();
                    $answer = 0;
                    $s1 = 0;
                    $s2 = 0;

                    if (isset($_SESSION['val1'])) { $s1 = $_SESSION['val1']; }
                    if (isset($_SESSION['val2'])) { $s2 = $_SESSION['val2']; }
                    
                    $s3 = $s1 + $s2;

                    if (isset($_POST['answer'])) { 
                          $answer = $_POST['answer'];
                    }

                    if ($answer == $s3){
                      ?>
                      <h2 class="main"><span>Thank you!</span></h2>
                      <div class="line"></div>
                      <div class="wrapdefault">
                        <p>We will notify you once the website is going live and we will bring to you about the latest progress.</p>
                      </div>
                      <?php
                    }else{
                      ?>
                      <h2 class="main"><span>Ops..Error!</span></h2>
                      <div class="line"></div>
                      <div class="wrapdefault">
                        <p>Your security question is wrong!</p>
                      </div>
                      <?php
                    }
                    session_destroy();
                  ?>

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