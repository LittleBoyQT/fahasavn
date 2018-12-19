<div id="header" class="hidden-xs">
    <div class="container">
        <!-- navbar-->
        <?php require("navbar.php") ?>
        <!-- logo, search box, cart-->
        <div class="header3">
            <div class="row">
                <!-- logo -->
                <div class="col-sm-3">
                    <a href="home.html"><img src="./public_html/img/logo/logo.png" class="img-responsive"></a>
                </div>
                <!-- search box -->
                <div class="col-sm-7">
                    <?php require("searchBox.php") ?>
                </div>
                <!-- cart -->
                <div class="col-sm-2">
                    <div class="link-cart">
                        <a href="cart.html"><span class="glyphicon glyphicon-shopping-cart"></span> 0 Sản phẩm</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <!-- categories & menu -->
        <div class="header4">
            <div class="row">
                <!-- categories -->
                <div class="col-sm-3">
                    <?php require('categories.php') ?>
                </div>
                <!-- menu -->
                <!-- <div class="col-sm-9">
                    <?php require('menu.php') ?>
                </div> -->
            </div>
        </div>
    </div>
</div>
