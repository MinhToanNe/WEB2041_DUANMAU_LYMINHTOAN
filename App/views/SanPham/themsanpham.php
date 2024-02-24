<div class="row">
    <div class="row formtitle">
        <h1>Thêm hàng hóa</h1>
    </div>
    <div class="row formcontent">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                Tên hàng hóa <br>
                <input type="text" name="name"> <br>
                <p style="color:red"><?= (isset($data['validate']['validateName'])) ? $data['validate']['validateName'] : '' ?></p>
            </div>
            <div class="row mb10">
                Hình ảnh <br>
                <input type="file" name="image">
                <p style="color:red"><?= (isset($data['validate']['validateImage'])) ? $data['validate']['validateImage'] : '' ?></p>
            </div>
            <div class="row mb10">
                Danh mục
                <select name ="category" id="">
                    <?php if(isset($data['danhmuc'])): ?>
                        <?php foreach($data['danhmuc'] as $danhmuc): ?>
                    <option  value="<?=$danhmuc['ma_loai']?>"><?=$danhmuc['ten_loai']?></option>
                    <?php endforeach ?>
                    <?php endif ?>
                </select>
            </div>
            <div class="row mb10">
                Giá <br>
                <input type="text" name="price">
                <p style="color:red"><?= (isset($data['validate']['validatePrice'])) ? $data['validate']['validatePrice'] : '' ?></p>
            </div>
            <div class="row mb10">
                Giá Giảm <br>
                <input type="text" name="saleprice">
                <p style="color:red"><?= (isset($data['validate']['validateSalePrice'])) ? $data['validate']['validateSalePrice'] : '' ?></p>
            </div>
            <div class="row mb10">
                Mô tả <br>
                <textarea name = "content" id="summernote"></textarea>
                <p style="color:red"><?= (isset($data['validate']['validateContent'])) ? $data['validate']['validateContent'] : '' ?></p>
            </div>
            <div class="row mb10">
                <input type="submit" value="Thêm mới">
                <input type="reset" value="Nhập lại">
            </div>
        </form>
    </div>
</div>
</div>
</body>

</html>