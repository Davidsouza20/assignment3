<?php
$str = file_get_contents('products.json');
$json = json_decode($str, true); // decode the JSON into an associative array

?>



<!DOCTYPE html>
<html>

<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
 <meta name="description" content="#">
 <title>Loja </title>
 <link rel="stylesheet" type="text/css" href="style.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="function.js"></script>
 <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

</head>

<body>
  <div id="body">
    <header id="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"> <img id="logo-img" src="img/logo-nav.png" alt="logo"></a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view-cart.php">CART</a>
                  </li>
               
                
              </ul>
            </div>
          </nav>  
  </header>
  <div id="banner">
    <img class="mySlides" src="img/banner.png" style="width:100%">  
  </div>



<div id="grid-container">
        <?php foreach ($json as $key => $value) {?>
          <form id="form" action='addToCart.php' method="post">  
          <div class="card" style="width: 18rem;">
              <img src=<?php echo $value["img"]; ?> class="card-img-top" alt="...">
              <div class="card-body">
                  <h5 class="card-title"><?php echo $value["name"]; ?></h5>
                  <p class="card-text"><?php echo $value["description"]; ?></p>
                  <h5 class="card-title">$ <?php echo " " . 
                  number_format((float)$value["price"], 2, '.', ''); ?></h5>

              
                  <input id="id" type="hidden" name="hidden_id" value="<?php echo $value["id"]; ?>" />
                  <input id="name" type="hidden" name="hidden_name" value="<?php echo $value["name"]; ?>" />
                  <input id="price" type="hidden" name="hidden_price" value="<?php echo $value["price"]; ?>" />
                  <input id="btn-submit" type='submit' class="btn btn-primary" value="Add To Cart"/>
                                    
              </div>
          </div>
          </form>
        <?php } ?>
</div>  

<footer class="footer">
      <p id="copyright">Copyright © 2019 Hellen Fitness</p>

</footer>

</div>
</body>

</html>