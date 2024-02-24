<div class="row">
    <div class="row formtitle">
        <h1>Cập nhật loại hàng hóa</h1>
    </div>
    <div class="row formcontent">
        <form action="" method="post">
            <? if(isset($data['loaihang'])): ?>
                <? foreach ($data['loaihang'] as $loai): ?>
            <div class="row mb10">
               <label for="">Tên loại</label>
                <input type="text" name="tenloai" value="<?= $loai['ten_loai'] ?>">
                <p style="color: red;"><?= !empty($data['validate']) ? $data['validate']['validateName'] : '' ?></p>
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="">
                <input type="submit" name="capnhat" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listdm"> <input type="button" value="Danh sách"></a>
            </div>
            <? endforeach ?>
     
           <? endif ?>

           
        </form>
    </div>
</div>
</div>