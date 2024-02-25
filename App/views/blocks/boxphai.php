<div class="boxphai">
                <div class="row mb">
                    <div class="boxtitle">Tài khoản</div>
                    <div class="boxcontent formtaikhoan">
                        <form action="/" method="post">
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
                                <a href="/ressign">Đăng kí thành viên</a>
                            </li>
                        </form>
                    </div>
                </div>
                <div class="row mb">
                    <div class="boxtitle">Danh mục</div>
                    <div class="boxcontent2 menudoc">
                        <?php if(isset($data['category'])):?>
                            <?php foreach($data['category'] as $category): ?>
                        <ul>
                            <li>
                                <a href="#"><?= $category['ten_loai'] ?></a>
                            </li>
                        </ul>
                        <?php endforeach ?>
                        <?php endif ?>
                       
                    </div>
                    <div class="boxfooter searchbox">
                        <form action="#" method="post">
                            <input type="text" placeholder="Tìm kiếm tại đây">
                        </form>
                    </div>
                </div>
            </div>