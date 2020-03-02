<header>
<!-- Bootstrap link -->
<link href="css/bootstrap.min.css" rel="stylesheet">
    
    <link href="css/style.css" rel="stylesheet">
    
    
<?php // Initialize shopping cart class 
include_once 'Cart.class.php'; 
$cart = new Cart; ?>

<nav class="navbar navbar-expand-lg navbar-dark " style="background-color:#232f3e">
  <a class="navbar-brand" href="home.php">BookShop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Products   </a>
      </li>
     
   
    </ul>
   
    
        <a href="viewCart.php" title="View Cart" style="color:white;"><i class="fa fa-shopping-cart"></i> (<?php echo ($cart->total_items() > 0)?$cart->total_items().' Items':'Empty'; ?>)</a>
    

  </div>
</nav>
</header>