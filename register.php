<?php

    $users = new resources_models_Users();
    $router = new resources_libs_Router();

    $router->router();
    
    $name = trim($router->getPOST('name'));
    $email = trim($router->getPOST('email'));
    $password = trim($router->getPOST('password'));
    $password2 = trim($router->getPOST('password2'));
    $birthday = trim($router->getPOST('birthday'));
    $gender = trim($router->getPOST('gender'));

    

    $identify = new resources_libs_UserIdentity();
    if ($identify->getSESSION("id")) {
        $router->homePage();
    }

    if ($router->getPOST("register") 
        && $name && $email && $password && $password2 & $birthday && $gender!==null && $password === $password2
    ) {
        $params = [
            ":email" => $email,
            ":name" => $name,
            ":password" => md5($password),
            ":birthday" => $birthday,
            ":gender"=> $gender,
            ":role"=> ""
        ];
        $result = FALSE;
        // var_dump($result); die();
        $result = $users->buildQueryParams([
            "field"=>"(email, hoten, matkhau, ngaysinh, gioitinh, quyentruycap) VALUES (?,?,?,?,?,?)",
            "value"=>[$params[":email"],$params[":name"],$params[":password"],$params[":birthday"], $params[":gender"], $params[":role"]]
        ])->insert();

        if ($result) {
            $router->redirect("index");
        } else {
            $router->pageError("Vui lòng kiểm tra các trường và thử lại.");
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./public_html/css/Library/bootstrap.min.css">
    <link rel="stylesheet" href="./public_html/css/Library/bootstrap-theme.min.css">
    <link rel="stylesheet" href="./public_html/css/CSS-code/header.css">
    <link rel="stylesheet" href="./public_html/css/CSS-code/footer.css">
    <link rel="stylesheet" href="./public_html/css/CSS-code/dangki.css">
    <link rel="shortcut icon" href="./public_html/img/logo/favicon.ico" type="image/x-icon">
    <script src="./public_html/js/Library/jquery-3.3.1.min.js"></script>
    <script src="./public_html/js/Library/bootstrap.min.js"></script>
    <script src="./public_html/js/JS-code/js-pages.js"></script>
    <title>FAHASA.com</title>
</head>
<body>

<!--Header -->
<?php require_once("resources/templates/header.php") ?>

<!--Login -->
<?php require_once("login.php") ?>


<!-- Content -->
<div id="content-dangki" class="hidden-xs">
    <div class="container">
        <div class="title1">
            <div class="gachchan">
                <span>Bạn chưa có tài khoản? Đăng kí ngay</span>
            </div>
        </div>
        <div class="dangki">
            <div class="row">
                <div class="col-sm-8">
                    <div class="dangki-left">
                        <div class="left-title">
                            <div class="gachchan">
                                <span>ĐĂNG KÍ TÀI KHOẢN</span>
                            </div>
                        </div>

                        <div>
                            <form action="<?php echo $router->createUrl('register') ?>" method="POST">
                                <label>Họ và Tên</label>
                                <input type="text" name="name" autocomplete="off"><br>
                                <label>Email</label>
                                <input type="email" name="email" autocomplete="off"><br>
                                <label>Mật khẩu</label>
                                <input type="password" name="password" autocomplete="off"><br>
                                <label>Nhập lại mật khẩu</label>
                                <input type="password" name="password2" autocomplete="off"><br>
                                <label>Ngày sinh</label>
                                <input type="date" name="birthday" placeholder="yyyy - mmmm - dddd" autocomplete="off"><br>
                                <label>Giới tính</label>
                                <input type="radio" name="gender" value="1"> Nam &nbsp;&nbsp;&nbsp;
                                <input type="radio" name="gender" value="0"> Nữ <br>
                                <label></label>
                                <button type="submit" name="register" value="ĐĂNG KÍ">ĐĂNG KÍ</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="dangki-right">
                        <div class="text-center">
                            <span>Đăng nhập bằng tài khoản khác</span>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <br>
                        <a href=""><img src="./public_html/img/dangki/google.jpg" class="img-dangki"></a>
                        <br>
                    </div>
                    <div class="col-sm-12">
                        <a href=""><img src="./public_html/img/dangki/facebook.jpg" class="img-dangki"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-dangki">
        <span style="font-size: 20px; font-weight: 600">Benefits of becoming a registered member</span><br><br>
        <ul style="color: #3c3c3c">
            <li>Log in at any time to check order statuses</li>
            <li>Personalize your shopping</li>
            <li>Speed up future purchases</li>
        </ul>
    </div>
</div>

<!-- Footer -->
<?php require_once("resources/templates/footer.php") ?>

</body>
</html>