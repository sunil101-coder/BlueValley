<!DOCTYPE html>
<html lang="en">
<title>Home</title>
<?php  require "ChangeTitle.php"; ?>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
   <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="CSS/style.css">
  <!-- CSS only -->
  <!--icon only-->
  <link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
</head>
<body>
<header class="header">
    <div class="container1">
        <div class="row1 align-items-center justify-content-between">
            <div class="logo">
               <a href="index.php">Blue Valley</a>
            </div>
            <button type="button" class="nav-toggler">
               <span></span>
            </button>
            <nav class="nav">
               <ul>
                  <li><a href="aboutus.php">About Us</a></li>
                  <li><a href="service.php" onclick="changePageTitle()">services</a></li>
                  <li><a href="gallery.php">Gallery</a></li>
                  <li><a href="contact.php">Contact</a></li>
                  <li><a href="#">Book Now</a></li>
               </ul>
            </nav>
        </div>
    </div>  
    <script type="text/javascript">
        function changePageTitle() {
            newPageTitle = 'The title has changed!';
            document.title = newPageTitle;
        }
    </script>
 </header>