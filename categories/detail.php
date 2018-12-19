<?php
    $user = new resources_libs_UserIdentity();
    $router = new resources_libs_Router();

    $categories = new resources_models_Categories();
    $id = intval($router->getGET("id"));

    //
    if ($id) {
        $categoriesDetail = $categories->buildQueryParams([
            "where"=>"matheloai=:id",
            "params"=>[":id"=>$id]
        ])->selectOne();
        if (!$categoriesDetail) {
            $router->pageNotFound();
        }
    } else {
        $categoriesDetail = [
            "tentheloai"=> ""
        ];
    }

    if ($router->getPOST("save")) {
        
        $params = [
            ":tentheloai" => $router->getPOST("tentheloai")
        ];
        $result = FALSE;
        if ($id) {
            $params[":id"] = $id;
            $result = $categories->buildQueryParams([
                "value"=> "tentheloai=:tentheloai",
                "where"=>"matheloai=:id",
                "params"=>$params
            ])->update();
        } else {
            $result = $categories->buildQueryParams([
                "field"=>"(tentheloai) VALUES (?)",
                "value"=>[$params[":tentheloai"]]
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
    <h3 class="text-center"> <?= !$id ? "Thêm thể loại" : "Cập nhật thể loại " ?></h3>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <form action="" method="post">
                    <div class="input-group">
                        <label>Tên Thể Loại Sách</label><br>
                        <div class="input-group">
                            <input class="form-control" type="text" name="tentheloai" value="<?= $categoriesDetail["tentheloai"] ?>">
                        </div>
                    </div>
                    <br>
                    <div class="text-right"><button type="submit" name="save" value="save" class="btn btn-sm btn-success">Lưu</button></div>
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