
<div class="row">
  <div class="row formtitle "  style = "margin:0;">
    <h1>Danh sách sản phẩm</h1>
  </div>
  <div class="row formcontent " style = "margin:0;margin-left:15px;">
    <div class="row mb10 formdsloai">
      <table>
        <tr>
          <th>STT</th>
          <th>Tên đăng nhập</th>
          <th>Email</th>
          <th>Vai trò</th>
          <th></th>
        </tr>
            <tr>
              <?php if(isset($data['user'])):?>
              <?php $stt = 1?>
              <?php foreach($data['user'] as $user):?>
              <td><?= $stt?></td>
              <td><?=$user['tai_khoan'] ?></td>
              <td><?=$user['email'] ?></td>
              <td><?=($user['vai_tro']==1)?'Khách hàng':'Admin' ?></td>
              <td>
                <?php if($user['vai_tro']==1):?>
                <a href="/user/delete?id=<?=$user['ma_kh'] ?>">
                  <input type="button" value="Xóa" />
                </a>
                <?php endif ?>
              </td>
              <?php  $stt++ ?>
            </tr>
           
            <?php endforeach ?>
              <?php endif ?>
       
      </table>
    </div>
  </div>
</div>
</div>
</body>

</html>