
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
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
            <?php if(isset($data['product'])):?>
            <?php foreach($data['product'] as $product):?>
            <div class="boxtitle"><?= $product['ten_hh'] ?></div>
            <div class="row boxcontent">
            
                <?= '<div class="row mb spct"><img src="/' . $product['hinh'] . '"></div>'; ?>
                <?= '<h2>Tên sản phẩm: ' . $product['ten_hh'] . '</h2>'; ?>
                <?= '<h1>Giá sản phẩm: ' . number_format($product['don_gia'], 0, ',', '.') . ' VNĐ</h1>';?>
                <?= (!empty($product['giam_gia']))?'<h1>Giảm giá: ' . number_format($product['giam_gia'], 0, ',', '.') . ' VNĐ</h1>':''?>
                <?= '<h3>Mô tả sản phẩm: </h3>'; ?>
                <?= '<h4>'.$product['mo_ta'].'</h4>' ?>
               
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