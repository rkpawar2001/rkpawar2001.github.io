<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="Description" content="Engineering Notes ,eBooks and Previous Year Paper | Contact us" />
  <meta name="Keywords" content="First Year Engineering Notes ,eBooks and Previous Year Paper | Contact us" />
  <link rel="canonical" href="https://www.uitians.educationhost.cloud" />
  <meta name="author" />
  <link rel="icon" type="image/jpeg" href="images/logo.png">
  <title>Uitians | Technical Notes | Contact us</title>
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="css/styles.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <style type="text/css">
    body {
      background-image: url(images/contact.jpg);
    }
  </style>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-W0HSK9V0BK"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-W0HSK9V0BK');
  </script>

  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-MCVF6LQ');
  </script>
  <!-- End Google Tag Manager -->

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-185348326-1">
  </script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-185348326-1');
  </script>


  <!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
  <script>
    var __adobewebfontsappname__ = "dreamweaver"
  </script>
  <script src="http://use.edgefonts.net/actor:n4:default;alfa-slab-one:n4:default.js" type="text/javascript"></script>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<?php
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'education');
$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>

<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobileno = $_POST['mobileno'];
  $comments = $_POST['comments'];
  $query = mysqli_query($con, "INSERT INTO `contact form` (`Name`, `Email`, `Mobile No`, `Comments`) VALUES ( '$name', '$email', '$mobileno', '$comments')");
  echo "<script>window.location.href ='thankyou.html'</script>";
  echo "<script>window.location.href ='contact.php'</script>";
}
?>


<body style="padding-top: 70px">
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        <a class="navbar-brand" href="index.html"><i class="fa fa-book fa-pad"></i> Uitians | Technical Notes <i class="fa fa-book fa-pad"></i></a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="topFixedNavbar1">
        <ul class="nav navbar-nav navlist">
          <li class="navlistitem"><a href="index.html">Home</a> </li>
          <li class="navlistitem"><a href="about.html">About</a> </li>
          <li class="navlistitem"><a href="services.html">Services</a> </li>
          <li class="navlistitem active"><a href="contact.php">Contact</a></li>
        </ul>
        <ul>
          <li active id="listitem"><a href="login.html">Log In</a></li>
          <li id="listitem"><a href="signup.html">Sign Up</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>



  <header><img src="images/logo.png" width="80" height="80" alt="" /></header>

  <section class="sectionRight">
    <h2>Contact</h2>
    <form action="contact.php" method="post" name="form1" id="form1">
      <label for="name">Name:</label>
      <br>
      <input name="name" type="text" required class="formStyle" id="name" form="form1">
      <br>
      <label for="email">Email:</label>
      <br>
      <input name="email" type="email" required class="formStyle" id="email" form="form1">
      <br>
      <br>
      <label for="mobileno">Mobile No:</label>
      <br>
      <input name="mobileno" type="mobileno" required class="formStyle" id="mobileno" form="form1">
      <br>
      <label for="comments">Comments:</label>
      <br>
      <textarea name="comments" cols="5" required class="formStyle" id="comments" form="form1"></textarea>
      <br>
      <input type="submit" class="formStyle" name="submit" id="submit" value="Submit">
      <br>
      &nbsp;
    </form>

  </section>


  <footer>Copyright © 2021. <a href="https://www.uitians.educationhost.cloud/" target="_blank">
      www.uitians.educationhost.cloud</a></footer>
  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.js"></script>
</body>

</html>