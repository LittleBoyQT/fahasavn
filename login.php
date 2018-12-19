

<div id="login">
    <div class="container">
        <div class="modal fade" role="dialog" id="modal-client">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <span class="glyphicon glyphicon-user"></span> &nbsp;&nbsp;
                        <span class="title-dangnhap">ĐĂNG NHẬP</span>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo $router->createUrl('login') ?>" method="POST" id="loginform">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-envelope"></span>
                                </div>
                                <input id="emailid" type="email" name="email" value="admin@gmail.com" placeholder="Nhập địa chỉ email của bạn" autocomplete="off" class="form-control">
                            </div>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-lock"></span>
                                </div>
                                <input id="password" type="password" name="password" value="123" placeholder="Mật khẩu" class="form-control">
                            </div>
                            <!-- <div class="checkbox">
                                <label><input type="checkbox" name="remember" checked> Lưu tài khoản</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="">Quên mật khẩu?</a>
                            </div> -->
                            <div class="button">
                                <button type="submit" class="btn btn-success btn-block">ĐĂNG NHẬP</button>
                            </div>
                            <p>Chưa có tài khoản vui lòng <a href="<?= $router->createUrl("register") ?>"> ĐĂNG KÝ</a></p>
                        </form>
                    </div>
                    <!-- <div class="modal-footer">
                        <a href=""><img src="./public_html/img/login/google.png"></a>
                        <a href=""><img src="./public_html/img/login/facebook.png"></a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
            $('#loginform').submit(function(e) {
                e.preventDefault();                
                var email=$("#emailid").val();
                var password=$("#password").val();
                if(email!="" && password!="") {
                    $.ajax({
                        type: "POST",
                        url: '?r=loginProcess',
                        data: {
                            login_button: 'login_button',
                            email: email,
                            password: password
                        },
                        success: function(res)
                        {
                            if (res == 1) {
                                window.location.href = '/fahasavn/index.php?r=management';
                            }
                            else {
                                alert('Vui lòng kiểm tra lại');
                            }
                        }
                    });
                } else {
                     alert("Điền đầy đủ email và mật khẩu");
                }
            });
    });
</script>