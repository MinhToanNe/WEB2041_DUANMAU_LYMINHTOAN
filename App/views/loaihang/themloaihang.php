<div class="row">
    <div class="row formtitle">
        <h1>Thêm loại hàng hóa</h1>
    </div>
    <div class="row formcontent">
        <form action="" method="post">
            <div class="row mb10">
                Tên loại <br>
                <input type="text" name="tenloai">
                <p style="color: red;"><?= !empty($data['validate']) ? $data['validate']['validateName'] : '' ?></p>
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