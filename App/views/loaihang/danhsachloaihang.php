<div class="row">
  <div class="row formtitle">
    <h1>Danh sách loại hàng</h1>
  </div>
  <div class="row formcontent">
    <div class="row mb10 formdsloai">
      <table>
        <tr>
          <th></th>
          <th>Mã loại</th>
          <th>Tên loại</th>
          <th></th>
        </tr>
        <?php if (isset($data["loaihang"])) : ?>
          <?php foreach ($data["loaihang"] as $DanhSachLoaiHang) : ?>
            <tr>
              <td><input type="checkbox" /></td>
              <td><?= $DanhSachLoaiHang["ma_loai"] ?></td>
              <td><?= $DanhSachLoaiHang["ten_loai"] ?></td>
              <td>
                <input type="button" name="" id="" value="Sửa" />
                <input type="button" value="Xóa" />
              </td>
            </tr>
          <?php endforeach ?>
        <?php endif ?>
      </table>
    </div>
    <div class="row mb10">
      <input type="button" value="Chọn tất cả" />
      <input type="button" value="Bỏ chọn tất cả" />
      <input type="button" value="Xóa các mục đã chọn" />
      <a href="/loaihang/add"><input type="button" value="Nhập thêm" /></a>
    </div>
  </div>
</div>
</div>
</body>

</html>