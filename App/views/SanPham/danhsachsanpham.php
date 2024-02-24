
<div class="row">
  <div class="row formtitle m-0">
    <h1>Danh sách sản phẩm</h1>
  </div>
  <div class="row formcontent">
    <div class="row mb10 formdsloai">
      <table>
        <tr>
          <th>STT</th>
          <th>Tên Sản Phẩm</th>
          <th>Hình ảnh</th>
          <th>Danh mục</th>
          <th>Giá</th>
          <th></th>
        </tr>
            <tr>
              <?php if(isset($data['product'])):?>
              <?php $stt = 1?>
              <?php foreach($data['product'] as $product):?>
              <td><?= $stt?></td>
              <td><?=$product['ten_hh'] ?></td>
              <td><img src="<?=$product['hinh'] ?>" style="width:100px" alt=""></td>
              <td><?=$product['category'] ?></td>
              <td><p style="color:green">
              <?=!empty($product['giam_gia'])?'<del>':''?>
              <?=number_format($product['don_gia'],0,"",".")?>
              <?=empty($product['giam_gia'])?'</del>':''?> VNĐ</p>
                  <p style="color:red"><?=!empty($product['giam_gia'])?number_format($product['giam_gia'],0,"",".").'VNĐ':''?> </p>
                </td>
              <td>
                <a href="/loaihang/edit?id=">
                     <input type="button" name="" id="" value="Sửa" />
                </a>
                <a href="/admin/delete?id=<?=$product['ma_hh'] ?>">
                  <input type="button" value="Xóa" />
                </a>
                
              </td>
              <?php  $stt++ ?>
            </tr>
           
            <?php endforeach ?>
              <?php endif ?>
       
      </table>
    </div>
    <div class="row mb10">
      <input type="button" value="Chọn tất cả" />
      <input type="button" value="Bỏ chọn tất cả" />
      <input type="button" value="Xóa các mục đã chọn" />
      <a href="/admin/add"><input type="button" value="Nhập thêm" /></a>
    </div>
  </div>
</div>
</div>
</body>

</html>