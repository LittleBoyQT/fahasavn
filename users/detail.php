<?php
    $user = new resources_libs_UserIdentity();
    $router = new resources_libs_Router();

    $users = new resources_models_Users();
    $id = intval($router->getGET("id"));

    //
    if ($id) {
        $userDetail = $users->buildQueryParams([
            "where"=>"id=:id",
            "params"=>[":id"=>$id]
        ])->selectOne();
        if (!$userDetail) {
            $router->pageNotFound();
        }
    } else {
        $userDetail = [
            "id"=> "",
            "email"=> "",
            "hoten"=> "",
            "matkhau"=> "",
            "ngaysinh"=> "",
            "gioitinh"=> "",
            "quantri"=> ""
        ];
    }

    if ($router->getPOST("save")) {
        
        $params = [
            ":email" => $router->getPOST("email"),
            ":hoten" => $router->getPOST("hoten"),
            ":matkhau" => $router->getPOST("matkhau"),
            ":ngaysinh" => $router->getPOST("ngaysinh"),
            ":gioitinh" => intval($router->getPOST("gioitinh")),
            ":quantri" => $router->getPOST("quantri")
        ];
        $result = FALSE;
        if ($id) {
            $params[":id"] = $id;
            $result = $users->buildQueryParams([
                "value"=> "email=:email, hoten=:hoten, matkhau=:matkhau, ngaysinh=:ngaysinh, gioitinh=:gioitinh, quantri=:quantri",
                "where"=>"id=:id",
                "params"=>$params
            ])->update();
        } else {
            $result = $users->buildQueryParams([
                "field"=>"(email, hoten, matkhau, ngaysinh, gioitinh, quantri) VALUES (?,?,md5(?),?,?,?)",
                "value"=>[$params[":email"], $params[":hoten"], $params[":matkhau"], $params[":ngaysinh"], $params[":gioitinh"], $params[":quantri"]]
            ])->insert();
        }

        if ($result) {
            $router->redirect("management");
        } else {
            $router->pageError("Can not update database");
        }
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public_html/css/Library/bootstrap.min.css">
    <link rel="stylesheet" href="public_html/css/Library/bootstrap-theme.min.css">
    <link rel="stylesheet" href="public_html/css/CSS-code/header.css">
    <link rel="stylesheet" href="public_html/css/CSS-code/footer.css">
    <link rel="stylesheet" href="public_html/css/CSS-code/back-to-top.css">
    <link rel="shortcut icon" href="img/logo/favicon.ico" type="image/x-icon">
    <script src="public_html/js/Library/jquery-3.3.1.min.js"></script>
    <script src="public_html/js/Library/bootstrap.min.js"></script>
    <script src="public_html/js/JS-code/js-pages.js"></script>
    <script src="public_html/js/JS-code/back-to-top.js"></script>
    <title>FAHASA.com</title>
    <link rel="stylesheet" href="public_html/css/CSS-code/admin.css">
</head>
<body>
<!--Header -->
<?php require_once("resources/templates/header.php") ?>


<!-- Login Form -->
<?php require_once("login.php") ?>

<!--CONTENT-->
<br>
<div id="add-theloai" class="hidden-xs">
    <div class="container">
    <h3 class="text-center"> <?= !$id ? "Thêm người dùng" : "Cập nhật người dùng " ?></h3>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <form action="<?php echo $router->createUrl('users/detail', ["id"=>$userDetail["id"]]) ?>" method="post">
                    <div class="input-group">
                        <div class="input-group">
                            <label>Email</label>
                            <input class="form-control" type="email" name="email" required value="<?= $userDetail["email"] ?>">
                        </div>
                    </div><br>
                    <div class="input-group">
                        <div class="input-group">
                            <label>Mật Khẩu</label>
                            <input class="form-control" type="password" name="matkhau" required value="<?= $userDetail["matkhau"] ?>">
                        </div>
                    </div><br>
                    <div class="input-group">
                        <div class="input-group">
                            <label>Học và Tên</label>
                            <input class="form-control" type="text" name="hoten" required value="<?= $userDetail["hoten"] ?>">
                        </div>
                    </div><br>
                    <div class="input-group">
                        <div class="input-group">
                            <label>Ngày Sinh</label>
                            <input class="form-control" type="date" name="ngaysinh" required  value="<?= $userDetail["ngaysinh"] ?>">
                        </div>
                    </div><br>
                    <div class="input-group">
                        <div class="input-group">
                            <label>Giới Tính</label>
                            <select class="form-control" required name="gioitinh">
                                <option value="1" (<?= $userDetail["gioitinh"] == "1" ? "selected" : '' ?>)>Nam</option>
                                <option value="0" <?= $userDetail["gioitinh"] == "0" ? "selected" : '' ?>>Nữ</option>
                            </select>
                        </div>
                    </div><br>
                    <div class="input-group">
                        <div class="input-group">
                            <label>Quản trị</label>
                            <select class="form-control" required name="quantri">
                                <option value="0" (<?= $userDetail["quantri"] == "0" ? "selected" : '' ?>)>Người dùng</option>
                                <option value="1" <?= $userDetail["quantri"] == "1" ? "selected" : '' ?>>Admin</option>
                            </select>
                        </div>
                    </div><br>
                    <div class="text-right"><button type="submit" name="save" class="btn btn-md btn-success" value="Save">Lưu</button></div>
                </form>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</div>
<!--/CONTENT-->

<!-- Footer -->
<?php require_once("resources/templates/footer.php") ?>
</body>
</html>