<div class="navbar navbar-default navbar-fixed-top col-xs-12" role="navigation">
    <!-- header-brand -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand no-top-down" href="../index.php">
            <img src="/images/logo.png" alt="logo" style="height:100% !important;">
        </a>
    </div>
    <!-- dropdown menu -->
    <div class="collapse navbar-collapse" id="myNavbar">
        <!-- left menu -->
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a class="smartphone" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Smartphone</a>
                <ul class="dropdown-content" >
                    <li><a href="/modules/product.php" class="brand" onclick="return getBrand();" value="apple">Apple</a></li>
                    <li><a href="/modules/product.php" class="brand" onclick="return getBrand();" value="oppo">Oppo</a></li>
                    <li><a href="/modules/product.php" class="brand" onclick="return getBrand();" value="lg">LG</a></li>
                    <li><a href="/modules/product.php" class="brand" onclick="return getBrand();" value="sony">Sony</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="tablet" href="#">Tablet</a>
                <ul class="dropdown-content">
                    <li><a href="/modules/product.php">Apple</a></li>
                    <li><a href="/modules/product.php">Samsung</a></li>
                    <li><a href="/modules/product.php">LG</a></li>
                    <li><a href="/modules/product.php">Sony</a></li>
                </ul>
            </li>
            <li class="dropdown" type="">
                <a class="tv" href="#">TV</a>
                <ul class="dropdown-content">
                    <li><a href="/modules/product.php">Apple</a></li>
                    <li><a href="/modules/product.php">Samsung</a></li>
                    <li><a href="/modules/product.php">LG</a></li>
                    <li><a href="/modules/product.php">Sony</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="camera" href="#">Camera</a>
                <ul class="dropdown-content">
                    <li><a href="#">Apple</a></li>
                    <li><a href="#">Samsung</a></li>
                    <li><a href="#">LG</a></li>
                    <li><a href="#">Sony</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="accessories" href="#">Accessories</a>
                <ul class="dropdown-content">
                    <li><a href="#">Apple</a></li>
                    <li><a href="#">Samsung</a></li>
                    <li><a href="#">LG</a></li>
                    <li><a href="#">Sony</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="promotion" href="#">Promotion</a>
                <ul class="dropdown-content">
                    <li><a href="#">Apple</a></li>
                    <li><a href="#">Samsung</a></li>
                    <li><a href="#">LG</a></li>
                    <li><a href="#">Sony</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="contact" href="#">Contact Us</a>
                <ul class="dropdown-content">
                    <li><a href="#">Apple</a></li>
                    <li><a href="#">Samsung</a></li>
                    <li><a href="#">LG</a></li>
                    <li><a href="#">Sony</a></li>
                </ul>
            </li>
        </ul>
        <!-- right menu -->
        <?php include 'info-menu.php' ?>
    </div>
</div>
