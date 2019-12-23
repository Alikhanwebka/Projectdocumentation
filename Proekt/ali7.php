<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="ali6.css" />
    <link rel="stylesheet" href="ali7.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Great+Vibes|Montserrat&display=swap" rel="stylesheet">
    <title>ADMIN Panel</title>
  </head>
  <body>
    <header class="Intro_com">
      <div class="order">
        <i class="material-icons" style="padding:20px; size:30px;";>reorder</i>
      </div>
      <div class="main_intro">
          <div class="logo">
            <h1 id="logo">Царь-Ali</h1>
          </div>
          <nav class="h_nav">
            <a class="nav" href="file:///C:/xampp/htdocs/Proekt/ali.html">Home</a>
            <a class="nav" href="file:///C:/xampp/htdocs/Proekt/ali6.html">Admin</a>
            <a class="nav" href="#">Delivery&Payment</a>
            <a class="nav" href="#" data-scroll="#production">Production</a>
            <a class="nav" href="file:///C:/xampp/htdocs/Proekt/ali5.html">About us</a>
          </nav>
          <div class="cart">
              <i class="material-icons">local_grocery_store</i>
              <a class="cart_img" href="#">cart</a>
            </div>
           <div class="log_in">
             <div class="sign">
              <a class="cart_img" href="file:///C:/xampp/htdocs/Proekt/ali2.html">sign in</a>
              </div>
            </div>
      </div>
      <div class="last_intro">
        <div class="supports">
            <div class="genre">
              <a class="genre_link" href="#">Top sales</a>
              <a class="genre_link" href="#">Brand Focus</a>
              <a class="genre_link" href="#">Discount</a>
              <a class="genre_link" href="file:///C:/xampp/htdocs/Proekt/ali3.html">Categories</a>
              <a class="genre_link" href="#">Projects</a>
            </div>
            <div class="sup">
              <a class="genre_link" href="#">Support</a>
            </div>
        </div>
        <div class="search">
          <i class="material-icons">search</i>
        </div>
      </div>
    </header>
    <div class="body">
      <div class="all">
        <div class="secon">
          <?php require_once "process.php";?>
          <?php 
            $mysqli=new mysqli('localhost','root','','crud') or die(mysqli_error($mysqli));
            $result=$mysqli->query("SELECT * FROM data") or die($mysqli->error);
            pre_r($result->fetch_assoc());
            function pre_r($array){
              echo "<pre>";
              print_r($array);
              echo "</pre>";
            }
          ?>
          <div class="signin-form">
            <label>For?</label>
            <form action="process.php" method="Post">
            <div class="form-item form-item-email">
              <div class="login-block">
                <input type="text" name="For?" value="FOR-MEN / FOR-WOMEN / FOR-CHILDREN / BAGS / FOR-THE-LITLLE-ONES" />                     
                
              </div>
            </div>
            <label>miniCategories</label>
            <form action="process.php" method="Post">
            <div class="form-item form-item-email">
              <div class="login-block">
                <input type="text" name="mini-Categories" value="Popular-categories / Trousers / Underwear" />                        
                
              </div>
            </div>
            <label>Categories</label>
            <form action="process.php" method="Post">
            <div class="form-item form-item-email">
              <div class="login-block">
                <input type="text" name="login" value="Accessories / Hats / Scarves / Belts / Gauntlets / Glasses / Ties / Suspender"/>                        
                
              </div>
            </div>
            <button type="submit" class="btn btn-primary" name="save">Save</button>
          </div>
        </div>
      </div>       
    </div>
    <div class="business_card">
      <a class="contact">About-admin</a>
      <a class="contact">Alikhan</a>
      <a class="contact">Abdigani</a>
      <a class="contact">Sdu-student:</a>
      <a class="contact">180107270</a>
      <a class="contac">@stu.sdu.edu.kz</a>
      <a class="contact">87079453532</a>
      <a class="contact">vk.com:</a>
      <a class="contact">Али Магзум</a>
    </div>
  </body>
</html>