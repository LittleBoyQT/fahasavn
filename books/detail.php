<?php
    $user = new resources_libs_UserIdentity();
    $router = new resources_libs_Router();

    $category = new resources_models_Categories();
    $books = new resources_models_Books();
    $id = intval($router->getGET("id"));

    //
    if ($id) {
        $bookDetail = $books->buildQueryParams([
            "where"=>"idsach=:id",
            "params"=>[":id"=>$id]
        ])->selectOne();
        // var_dump($bookDetail); die();
        if (!$bookDetail) {
            $router->pageNotFound();
        }
    } else {
        $bookDetail = [
            "idsach"=> "",
            "tensach"=>"",
            "hinhanh"=>"",
            "gia"=>"",
            "tacgia"=>"",
            "sotrang"=>"",
            "tennhacc"=>"",
            "nxb"=>"",
            "namxuatban"=>"",
            "kichthuoc"=>"",
            "tinhtrang"=>"",
            "noibat"=>"",
            "hinhthuc"=>"",
            "matheloai"=>[]
        ];
    }

    if ($router->getPOST("save")) {
        
        $params = [
            ":id"=> $router->getPOST("id"),
            ":tensach"=> $router->getPOST("tensach"),
            ":hinhanh"=> $router->getPOST("hinhanh"),
            ":gia"=> $router->getPOST("gia"),
            ":tacgia"=> $router->getPOST("tacgia"),
            ":sotrang"=> $router->getPOST("sotrang"),
            ":kichthuoc"=> $router->getPOST("kichthuoc"),
            ":tennhacc"=> $router->getPOST("tennhacc"),
            ":nxb"=> $router->getPOST("nxb"),
            ":namxuatban"=> $router->getPOST("namxuatban"),
            ":kichthuoc"=> $router->getPOST("kichthuoc"),
            ":tinhtrang"=> $router->getPOST("tinhtrang"),
            ":noibat"=> $router->getPOST("noibat"),
            ":hinhthuc"=> $router->getPOST("hinhthuc"),
            ":matheloai"=> $router->getPOST("matheloai")
        ];
        $result = FALSE;
        if ($id) {
            $params[":id"] = $id;
            $result = $books->buildQueryParams([
                "value"=> "tensach=:tensach, hinhanh=:hinhanh, gia=:gia, tacgia=:tacgia, sotrang=:sotrang,
                    tennhacc=:tennhacc, nxb=:nxb, namxuatban=:namxuatban, kichthuoc=:kichthuoc, tinhtrang=:tinhtrang, noibat=:noibat, hinhthuc=:hinhthuc, matheloai=:matheloai
                ",
                "where"=>"idsach=:id",
                "params"=>$params
            ])->update();
        } else {
            
            $result = $books->buildQueryParams([
                "field"=>"(tensach, hinhanh, gia, tacgia, sotrang, kichthuoc, tennhacc, nxb, namxuatban, tinhtrang, noibat, hinhthuc, matheloai) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)",
                "value"=>[$params[":tensach"], $params[":hinhanh"], $params[":gia"], $params[":tacgia"], $params[":sotrang"], $params[":kichthuoc"], $params[":tennhacc"], $params[":nxb"], $params[":namxuatban"],$params[":tinhtrang"],$params[":noibat"],$params[":hinhthuc"],$params[":matheloai"]]
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
        <h3 class="text-center"> <?= !$id ? "Thêm Sách Mới" : "Cập nhật sách " ?></h3>
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <form action="<?php echo $router->createUrl('books/detail', ["id"=>$bookDetail["idsach"]]) ?>" method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="input-group">
                                <label>Tên Sách</label>
                                <input type="text" name="tensach" class="form-control" required value="<?= $bookDetail["tensach"] ?>">
                            </div><br>
                            <div class="input-group">
                                <label>Hình Ảnh</label>
                                <input type="text" name="hinhanh" class="form-control" required value="<?= $bookDetail["hinhanh"] ?>">
                            </div><br>
                            <div class="input-group">
                                <label>Giá Sách</label>
                                <input type="text" name="gia" class="form-control" required value="<?= $bookDetail["gia"] ?>">
                            </div><br>
                            <div class="input-group">
                                <label>Tác Giả</label>
                                <input type="text" name="tacgia" class="form-control" required value="<?= $bookDetail["tacgia"] ?>">
                            </div><br>
                            <div class="input-group">
                                <label>Số Trang</label>
                                <input type="text" name="sotrang" class="form-control" required value="<?= $bookDetail["sotrang"] ?>">
                            </div><br>
                            <div class="input-group">
                                <label>Kích Thước</label>
                                <input type="text" name="kichthuoc" class="form-control" required value="<?= $bookDetail["kichthuoc"] ?>">
                            </div><br>
                            <div class="input-group">
                                <label>Hình Thức</label>
                                <input type="text" name="hinhthuc" class="form-control" required value="<?= $bookDetail["hinhthuc"] ?>">
                            </div><br>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <label>Tên Nhà Cung Cấp</label>
                                <input type="text" name="tennhacc" class="form-control" required value="<?= $bookDetail["tennhacc"] ?>">
                            </div><br>
                            <div class="input-group">
                                <label>Nhà Xuất Bản</label>
                                <input type="text" name="nxb" class="form-control" required value="<?= $bookDetail["nxb"] ?>">
                            </div><br>
                            <div class="input-group">
                                <label>Năm Xuất Bản</label>
                                <input type="text" name="namxuatban" class="form-control" required value="<?= $bookDetail["namxuatban"] ?>">
                            </div><br>
                            <div class="input-group">
                                <label>Tình Trạng</label>
                                <input type="text" name="tinhtrang" class="form-control" required value="<?= $bookDetail["tinhtrang"] ?>">
                            </div><br>
                            <div class="input-group">
                                <label>Nổi Bật</label>
                                <input type="text" name="noibat" class="form-control" required value="<?= $bookDetail["noibat"] ?>">
                            </div><br>
                            <div class="input-group">
                                <label>Thể Loại Sách</label>
                                <select name="matheloai" class="form-control">
                                    <?php
                                        $listCategory = $category->buildSelectBox();
                                        foreach($listCategory as $key=>$value) {
                                    ?>
                                        <option <?= $key == $bookDetail["matheloai"] ? "selected" : "" ?> value=<?= $key?> ><?= $value ?></option>
                                    <?php } ?>
                                </select>
                            </div><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-group">
                                <label>Review Sách</label>
                                <textarea name="review" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-lg btn-success" value="save" name="save">Lưu</button>
                    </div>
                </form>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
    </div>
</div>
<!--/CONTENT-->

<!-- Footer -->
<?php require_once("resources/templates/footer.php") ?>
</body>
</html>