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
                    <a href="#">Trang chủ</a>
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
                <!-- <div class="row">
                    <div class="banner">
                        <img src="img/banner-polo (4).jpg" alt="">
                    </div>
                </div> -->
                <div class="row">
                    <?php if (isset($data['Product'])) : ?>
                        <?php foreach ($data['Product'] as $product) : ?>
                            <div class="boxsp mr ">
                                <div class="img row">
                                    <img src="<?= $product['hinh'] ?>" alt="dang cap nhat">
                                </div>
                                <p style="color:green">
                                    <?= !empty($product['giam_gia']) ? '<del>' : '' ?>
                                    <?= number_format($product['don_gia'], 0, "", ".") ?>
                                    <?= empty($product['giam_gia']) ? '</del>' : '' ?> VNĐ</p>
                                <p style="color:red"><?= !empty($product['giam_gia']) ? number_format($product['giam_gia'], 0, "", ".") . 'VNĐ' : '' ?>
                                    <a href=""><?= $product['ten_hh'] ?></a>
                            </div>
                        <?php endforeach ?>
                    <?php endif ?>
                </div>
            </div>

            <div class="boxphai">
                <div class="row mb">
                    <div class="boxtitle">Tài khoản</div>
                    <div class="boxcontent formtaikhoan">
                        <form action="" method="post">
                            <div class="row mb10">
                                Tên đăng nhập
                                <br>
                                <input type="text" name="user" id="">
                                <p style="color:red"><?= (isset($data['validate']['validateUser'])) ? $data['validate']['validateUser'] : '' ?></p>
                                <p style="color:red"><?= (isset($data['validate']['Error'])) ? $data['validate']['Error'] : '' ?></p>
                            </div>
                            <div class="row mb10">
                                Mật khẩu
                                <br>
                                <input type="password" name="pass" id="">
                                <p style="color:red"><?= (isset($data['validate']['validatePassword'])) ? $data['validate']['validatePassword'] : '' ?></p>
                            </div>
                            <div class="row mb10">
                                <input type="checkbox">
                                ghi nhớ tài khoản ?
                            </div>
                            <div class="row mb10">
                                <input type="submit" value="Đăng Nhập">
                            </div>
                            <li>
                                <a href="#">Quên mật khẩu</a>
                            </li>
                            <li>
                                <a href="#">Đăng kí thành viên</a>
                            </li>
                        </form>
                    </div>
                </div>
                <div class="row mb">
                    <div class="boxtitle">Danh mục</div>
                    <div class="boxcontent2 menudoc">
                        <ul>
                            <li>
                                <a href="#">Đồng hồ</a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <a href="#">Laptop</a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <a href="#">Điện thoại</a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <a href="#">Balo</a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <a href="#">Đồng hồ</a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <a href="#">Laptop</a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <a href="#">Điện thoại</a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <a href="#">Balo</a>
                            </li>
                        </ul>
                    </div>
                    <div class="boxfooter searchbox">
                        <form action="#" method="post">
                            <input type="text" placeholder="Tìm kiếm tại đây">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb footer">copyright &copy; 2023</div>
    </div>



</body>

</html>