<?php
    $user = new resources_libs_UserIdentity();
    $router = new resources_libs_Router();
?>

<div class="header2">
    <div class="row row2">
        <div class="col-sm-3">
            <div class="icon-text">
                <span class="glyphicon glyphicon-earphone icon"></span>
                <span class="text">Hotline</span><br>
                <span class="text">1900636467</span>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="icon-text">
                <span class="glyphicon glyphicon-send icon"></span>
                <span class="text">Miễn phí giao hàng</span><br>
                <span class="text" style="color: #737373">Tận nơi toàn quốc</span>
            </div>
        </div>
        <div class="col-sm-6">
            <ul class="nav navbar-nav navbar-right">
                
                <li class="active"><a href="<?= $router->createUrl("home" )?>" class="link-menu">HOME</a></li>
                <?php if($user->getSESSION("hoten")) : ?>
                    <li>
                        <a href="<?= $router->createUrl("management" )?>">QUẢN LÝ</a>
                    </li>
                    <li>
                        <a href="<?= $router->createUrl("logout" )?>">ĐĂNG XUẤT</a>
                    </li>
                <?php else : ?>
                    <li>
                        <a href="<?= $router->createUrl("register" )?>">ĐĂNG KÝ</a>
                    </li>
                    <li>
                        <a href="#" id="dangnhap">ĐĂNG NHẬP</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>