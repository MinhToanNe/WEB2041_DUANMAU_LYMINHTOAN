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
                                   <p style="color:red"><?= !empty($product['giam_gia']) ? number_format($product['giam_gia'], 0, "", ".") . 'VNĐ' : '' ?><br></p>
                                    <a href="/home/detailproduct?id=<?=$product['ma_hh']?>"><?=$product['ten_hh'] ?></a>
                                    <input type="submit" name="addtocart" class="btn btn-success add_cart" value="Thêm giỏ hàng">
                            </div>
                        <?php endforeach ?>
                    <?php endif ?>
                </div>
            </div>

           <?php include ("blocks/boxphai.php") ?>
        </div>
        <div class="row mb footer">copyright &copy; 2023</div>
    </div>



</body>

</html>