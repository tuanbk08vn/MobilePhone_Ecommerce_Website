<?php
if(!isset($_SESSION)) {
    session_start();
}
$cart_amount = (isset($_SESSION['cart']) ? count($_SESSION['cart']) : '');
?>

<ul class="nav navbar-nav navbar-right">
<!--Cart-->
    <li>
        <a class="cart-icon" style="" href="../modules/cart.php">
            <span class="glyphicon glyphicon-shopping-cart" style=""></span>
            <span class="cart-amount"><?php echo $cart_amount ;?></span>
        </a>
    </li>
<!--    Search-->
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">
			<span class="glyphicon glyphicon-search"></span>Search
		</a>
		<ul class="dropdown-content" style="background-color: transparent !important;border: none;" >
			<li class="input-group">
				<input id="search" type="text" class="form-control input-lg" name="search" placeholder="..." style="width: 150% !important; border-radius: 4px; font-size: 1em;">
			</li>
		</ul>
	</li>
<!--Sign In-->
	<li class="dropdown">
        <?php
            if(isset($_SESSION['username'])) {
                ?>
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <?php echo $_SESSION['username']; ?>
          </a>
          <ul class="dropdown-content" aria-labelledby="dropdownMenu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a id="logOut" href="../modules/logout.php">Log Out</a></li>
          </ul>

            <?php
                }
            else {
                ?>
                <a class="signIn" data-toggle="modal" data-target="#loginModal"><span
                            class="glyphicon glyphicon-user"></span>Sign In</a>
                <?php require ROOT . "/modules/login.php";
            }
            ?>
	</li>
</ul>