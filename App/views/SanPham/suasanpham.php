<div class="row">
    <div class="row formtitle">
        <h1>Sửa hàng hóa</h1>
    </div>
    <div class="row formcontent">
        <form action="" method="post" enctype="multipart/form-data">
            <?php if(isset($data['product'])):?>
                <?php foreach($data['product'] as $product):?>
            <div class="row mb10">
                Tên hàng hóa <br>
                <input type="text" name="name" value = "<?= $product['ten_hh']?>"> <br>
                <p style="color:red"><?= (isset($data['validate']['validateName'])) ? $data['validate']['validateName'] : '' ?></p>
            </div>
            <div class="row mb10">
                Hình ảnh <br>
                <input type="file" name="image">
                <input name = "thumbnail" type="hidden" value ="<?= $product['hinh']?>">
            </div>
            <div class="row mb10">
                Danh mục
                <select name ="category" id="">
                    <?php if(isset($data['danhmuc'])): ?>
                        <?php foreach($data['danhmuc'] as $danhmuc): ?>
                    <option  value="<?=$danhmuc['ma_loai']?>" <?= ($danhmuc['ma_loai']==$product['ma_loai'])?'selected': '' ?>> <?=$danhmuc['ten_loai']?> </option>
                    <?php endforeach ?>
                    <?php endif ?>
                </select>
            </div>
            <div class="row mb10">
                Giá <br>
                <input type="text"  name="price" value = "<?= $product['don_gia']?>">
                <p style="color:red"><?= (isset($data['validate']['validatePrice'])) ? $data['validate']['validatePrice'] : '' ?></p>
            </div>
            <div class="row mb10">
                Giá Giảm <br>
                <input type="text" name="saleprice" value = "<?= $product['giam_gia']?>">
                <p style="color:red"><?= (isset($data['validate']['validateSalePrice'])) ? $data['validate']['validateSalePrice'] : '' ?></p>
            </div>
            <div class="row mb10">
                Mô tả <br>
                <textarea name = "content" id="summernote"><?= $product['mo_ta']?></textarea>
                <p style="color:red"><?= (isset($data['validate']['validateContent'])) ? $data['validate']['validateContent'] : '' ?></p>
            </div>
            <?php endforeach ?>
            <?php endif ?>
            <div class="row mb10">
                <input type="submit" value="Cập nhật">
                <input type="reset" value="Nhập lại">
            </div>
        </form>
    </div>
</div>
</div>
</body>

</html>