<?php
    $categories = new resources_Models_Categories();
    $books = new resources_Models_Books();
    $users = new resources_Models_Users();
    $user = new resources_libs_UserIdentity();
    $comments = new resources_Models_Comments();

    $cateQuery = $categories->buildQueryParams()->select();
    $bookQuery = $books->buildQueryParams()->select();
    $userQuery = $users->buildQueryParams()->select();
    $commentQuery = $comments->buildQueryParams()->select();

    $router = new resources_libs_Router();
    $identify = new resources_libs_UserIdentity();
    if (!$identify->getSESSION("quantri")) {
        $router->homePage();
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
    <div id="admin-crud" class="hidden-md hidden-xs hidden-sm">
        <div class="container">
            <div class="link-top">
                <ul class="nav nav-pills">
                    <li class="active"><a href="#admin-page" data-toggle="pill">ADMIN PAGE</a></li>
                    <li><a href="#theloai" data-toggle="pill">THỂ LOẠI SÁCH</a></li>
                    <li><a href="#khosach" data-toggle="pill">KHO SÁCH</a></li>
                    <li><a href="#user" data-toggle="pill">NGƯỜI DÙNG</a></li>
                    <li><a href="#nhanxet" data-toggle="pill">NHẬN XÉT CỦA NGƯỜI DÙNG</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div id="admin-page" class="tab-pane fade in active">
                    <div class="text-center">
                        <br><br><br>
                        <h1>Hello ADMIN!</h1>
                        <h3>Chúc bạn một ngày làm việc vui vẻ!</h3>
                        <br><br><br>
                    </div>
                </div>
                <div id="theloai" class="tab-pane fade">
                    <h5 class="text-center"><a href="<?= $router->createUrl("categories/detail") ?>" class="btn btn-md btn-success">THÊM MỚI THỂ LOẠI</a></h5>
                    <table class="tb-theloai">
                        <tr>
                            <th>Mã Thể Loại</th>
                            <th>Tên Thể Loại</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach($cateQuery as $row) { ?>
                            <tr>
                                <td><?= $row['matheloai'] ?></td>
                                <td><?= $row['tentheloai'] ?></td>
                                <td>
                                    <a href="<?= $router->createUrl("categories/detail", ["id" =>$row["matheloai"]])?>" class="btn btn-sm btn-warning">EDIT</a>
                                    &nbsp;&nbsp;&nbsp;
                                    <a href="" class="btn btn-sm btn-danger delete_category" id="<?= $row['matheloai'] ?>">DELETE</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
                <div id="khosach" class="tab-pane fade">
                    <h5 class="text-center"><a href="<?= $router->createUrl("books/detail") ?>" class="btn btn-md btn-success">THÊM SÁCH MỚI</a></h5>
                    <table class="tb-khosach">
                        <tr>
                            <th>ID Sách</th>
                            <th>Tên Sách</th>
                            <th>Giá</th>
                            <th>Tên Tác Giả</th>
                            <th>Hình Thức</th>
                            <th>Số Trang</th>
                            <th>Mã Thể Loại</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach($bookQuery as $row) { ?>
                        <tr>
                            <td><?= $row['idsach'] ?></td>
                            <td><?= $row['tensach'] ?></td>
                            <td><?= $row['gia'] ?></td>
                            <td><?= $row['tacgia'] ?></td>
                            <td><?= $row['hinhthuc'] ?></td>
                            <td><?= $row['sotrang'] ?></td>
                            <td><?= $row['matheloai'] ?></td>
                            <td>
                                <a href="<?= $router->createUrl("books/detail", ["id" =>$row["idsach"]]) ?>" class="btn btn-sm btn-warning">EDIT</a>
                                &nbsp;&nbsp;&nbsp;
                                <a href="" class="btn btn-sm btn-danger delete_book" id="<?= $row['idsach'] ?>">DELETE</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
                <div id="user" class="tab-pane fade">
                    <h5 class="text-center"><a href="<?= $router->createUrl("users/detail") ?>" class="btn btn-md btn-success">THÊM ADMIN</a></h5>
                    <table class="tb-khosach">
                        <tr>
                            <th>Email</th>
                            <th>Họ Tên</th>
                            <th>Ngày Sinh</th>
                            <th>Giới Tính</th>
                            <th>Quyền Truy Cập</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach($userQuery as $row) { ?>
                        <tr>
                            <td><?= $row['email'] ?></td>
                            <td><?= $row['hoten'] ?></td>
                            <td><?= $row['ngaysinh'] ?></td>
                            <td><?= $row['gioitinh'] === '1' ? "Nam" : "Nữ" ?></td>
                            <td><?= $row['quantri'] === '1' ? "Quản trị" : "Người dùng" ?></td>
                            <td>
                                <a href="<?= $router->createUrl("users/detail", ["id" =>$row["id"]]) ?>" class="btn btn-sm btn-warning">EDIT</a>
                                &nbsp;&nbsp;&nbsp;
                                <a href="" class="btn btn-sm btn-danger delete_user" id="<?= $row['id'] ?>">DELETE</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
                <div id="nhanxet" class="tab-pane">
                    <br>
                    <table class="tb-khosach">
                        <tr>
                            <th>Tên Khách Hàng</th>
                            <th>Tên Sách</th>
                            <th>Ngày Nhận Xét</th>
                            <th>Lời Nhận Xét</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach($commentQuery as $row) { ?>
                        <tr>
                            <td><?= $row['hoten'] ?></td>
                            <td><?= $row['tensach'] ?></td>
                            <td><?= $row['ngayhientai'] ?></td>
                            <td><?= $row['nhanxet'] ?></td>
                            <td>
                                <a href="" class="btn btn-sm btn-danger delete_comment" id="<?= $row['idnhanxet'] ?>">DELETE</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
<!--/CONTENT-->

<!-- Footer -->
<?php require_once("resources/templates/footer.php") ?>
<script>
    $(document).ready(function() {
            $('.delete_comment').click(function(e){
                e.preventDefault();    
                var del_id= $(this).attr('id');
                var $ele = $(this).parent().parent();      
                if (confirm('Xóa bản ghi này')) {
                    $.ajax({
                        type:'POST',
                        url:'?r=comments/delete',
                        data: {'id': del_id},
                        success: function(data){
                            if(data==1){
                                $ele.fadeOut().remove();
                            } else {
                                alert("Không thể xóa dòng này")
                            }
                        }
                    });
                } else {
                    return;
                }
                
            });
            $('.delete_user').click(function(e){
                e.preventDefault();    
                var del_id= $(this).attr('id');
                var $ele = $(this).parent().parent();      
                if (confirm('Xóa bản ghi này')) {
                    $.ajax({
                        type:'POST',
                        url:'?r=users/delete',
                        data: {'id': del_id},
                        success: function(data){
                            if(data==1){
                                $ele.fadeOut().remove();
                            } else {
                                alert("Không thể xóa dòng này")
                            }
                        }
                    });
                } else {
                    return;
                }
                
            });
            $('.delete_book').click(function(e){
                e.preventDefault();    
                var del_id= $(this).attr('id');
                var $ele = $(this).parent().parent();      
                if (confirm('Xóa bản ghi này')) {
                    $.ajax({
                        type:'POST',
                        url:'?r=books/delete',
                        data: {'id': del_id},
                        success: function(data){
                            if(data==1){
                                $ele.fadeOut().remove();
                            } else {
                                alert("Không thể xóa dòng này")
                            }
                        }
                    });
                } else {
                    return;
                }
                
            });
            $('.delete_category').click(function(e){
                e.preventDefault();    
                var del_id= $(this).attr('id');
                var $ele = $(this).parent().parent();      
                if (confirm('Xóa bản ghi này')) {
                    $.ajax({
                        type:'POST',
                        url:'?r=categories/delete',
                        data: {'id': del_id},
                        success: function(data){
                            if(data==1){
                                $ele.fadeOut().remove();
                            } else {
                                alert("Không thể xóa dòng này")
                            }
                        }
                    });
                } else {
                    return;
                }
                
            });
    });
</script>
</body>
</html>