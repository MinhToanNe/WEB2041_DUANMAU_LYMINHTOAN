<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="boxcenter">
        <div class="row mb header">
            <h1>Siêu thị trực tuyến</h1>
        </div>
        <div class="row mb menu">
            <ul>
                <li>
                    <a href="/">Trang chủ</a>
                </li>
                <li>
                    <a href="#">Giới thiệu</a>
                </li>
                <li>
                    <a href="#">Liên hệ</a>
                </li>
                <li>
                    <a href="#">Góp ý</a>
                </li>
                <li>
                    <a href="#">Hỏi đáp</a>
                </li>
            </ul>
        </div>
        <div class="row mb">
            <div class="boxtrai mr">
                <div class="row mb">

                    <div class="boxtitle">Đăng Ký Thành Viên</div>
                    <div class=" row boxcontent formtaikhoan">
                        <form action="" method="post">
                            <div class="row mb10">
                                Email
                                <input type="text" name="email">
                                <p style="color:red"><?= (!empty($data['validate']['validateEmail'])?$data['validate']['validateEmail']:'') ?></p>
                                

                            </div>
                            <div class="row mb10">
                                Tên đăng nhập
                                <input type="text" name="user">
                                <p style="color:red"><?= (!empty($data['validate']['validateUserR'])?$data['validate']['validateUserR']:'') ?></p>
                                
                            </div>

                            <div class="row mb10">
                                Password
                                <input type="password" name = "pass">
                                <p style="color:red"><?= (!empty($data['validate']['validatePass'])?$data['validate']['validatePass']:'') ?></p>
                                
                              
                            </div>

                            <input type="submit" value="Đăng Ký" name="dangky">
                            <input type="reset" value="Nhập lại">

                        </form>
                       
                    </div>
                </div>

            </div>
            <?php include ("blocks/boxphai.php") ?>
        </div>
        <div class="row mb footer">copyright &copy; 2023</div>
    </div>



</body>

</html>