<?php

session_start();
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
                  <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view-cart.php">CART</a>
                  </li> 
              </ul>
            </div>
          </nav>  
  </header>
  
  

<div id="grid-container">
    <h1>Shopping Cart</h1><br>
<table class="table">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Product</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['cart'] as $key => $value) {?>
                    <tr>
                    <td><?php echo $value['hidden_name']; ?></td>
                    <td><?php echo '1' ?></td>
                    <td><?php echo number_format((float)$value['hidden_price'], 2, '.', ''); ?></td>
                    <td onclick="" class="btn btn-danger">x</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            
            
            
            
        
</div>  

<footer class="footer">
      <p id="copyright">Copyright © 2019 Hellen Fitness</p>

</footer>

</div>
</body>

</html> 