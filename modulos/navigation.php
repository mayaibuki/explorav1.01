<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-logo page-scroll" href="../#page-top"><img src="/media/logo.svg"></a><a class="navbar-brand page-scroll" href="../#page-top">Explora.life</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#"></a>
                </li>
                <li>
                    <a class="page-scroll" href="/comprar/">Comprar</a>
                </li>                    
                <li>
                    <a class="page-scroll" href="/leer/">Leer</a>
                </li>
                <li>
                    <a class="page-scroll" href="/tuppersex/">TupperSex</a>
                </li>
                <li>
                    <a class="page-scroll" href="/nosotros/">Nosotros</a>
                </li>
                <li>
                    <a class="page-scroll" href="https://www.facebook.com/ExploraLife" target="_blank"><i class="fa fa-lg fa-facebook-square"></i></a>
                </li>
                <li>
                    <a class="page-scroll btn btn-cart" href="/cart"> 
                    	<i class="fa fa-lg fa-shopping-cart"> <?php if($_SESSION["count"]>0){ echo $_SESSION["count"]; } ?></i>
					</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
