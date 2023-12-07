<!--Slide Show-->
<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000" style="margin-top: 120px;">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="6"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="7"></button>

    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
        <?php foreach ($slideshow as $index => $item) : ?>
        <div class="carousel-item <?php echo ($index == 0) ? 'active' : ''; ?>">
            <img src="<?php echo $item['duong_dan_anh'] ?>" alt="Slide <?php echo $index + 1 ?>" class="d-block w-100">
        </div>
        <?php endforeach; ?>
    </div>


    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>
<!-- Box -->
<?php if (!empty($categories)) : ?>
<section class="properties container" id="">
    <br><br><br>
    <div class="box-product">
        <div class="box">
            <ul class="choose">
                <?php foreach ($categories as $item) : ?>
                <li>
                    <a href="<?php echo _WEB_ROOT . '/danh-muc?id=' . $item['id'] ?>">
                        <div class="img-cate">
                            <img src="<?php echo $item['anh_sp'] ?>" alt="">
                        </div>
                        <span>
                            <center><?php echo $item['name']; ?></center>
                        </span>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
            <?php foreach ($productWithCate as $item) : ?>
            <!--IPHONE-->
            <div class="box-slide">
                <a href="<?php echo _WEB_ROOT . '/danh-muc?id=' . $item['id'] ?>" class="logo-cate">
                    <h2><?php echo $item['name']; ?></h2>
                </a>
                <div class="slide">
                    <div class="item">
                        <?php foreach ($item['products'] as $product) : ?>
                        <a href="#">
                            <div class="img-slide">
                                <img src="<?php echo $product['thumbnail']; ?>" alt="">
                            </div>
                            <h3><?php echo $product['title']; ?></h3>
                            <span
                                class="price"><?php echo number_format($product['price'], 0, ',', '.') . ' vnđ' ?></span>
                            <p class="text-online"><?php echo $product['description'] ?></p>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div><br><br>
            <?php endforeach; ?>
            <!--News-->
            <div class="box-new">
                <a href="" class="logo-cate">
                    <h2>MẸO HAY CHO BẠN</h2>
                </a>
                <div class="slide-topnews">
                    <div class="container">
                        <div class="box">
                            <div class="item">
                                <img src="" alt="">
                                <a
                                    href="https://www.topzone.vn/tekzone/cach-ghep-4-video-thanh-1-khung-tren-capcut-1554889">
                                    <div class="img-slide">
                                        <img alt="" width="376" height="150"
                                            src="https://cdn.tgdd.vn/Files/2023/11/14/1554889/2-141123-105428-760x367.jpg">
                                    </div>
                                    <h3>Cách ghép 4 video thành 1 khung trên Capcut, giúp bạn tạo ra những sản phẩm đầy
                                        tính sáng tạo</h3>
                                    <span class="timepost">43 phút trước</span>
                                </a>
                            </div>
                        </div>
                        <div class="box">
                            <div class="item">
                                <img src="" alt="">
                                <a href="https://www.topzone.vn/tekzone/cach-dang-ky-tai-khoan-whatsapp-1554869">
                                    <div class="img-slide">
                                        <img alt="" width="376" height="150"
                                            src="https://cdn.tgdd.vn/Files/2023/11/13/1554869/2-141123-105010-760x367.jpg">
                                    </div>
                                    <h3>Cách đăng ký tài khoản WhatsApp, giúp bạn có thể dễ dàng sử dụng để gọi điện và
                                        nhắn tin cùng với bạn bè và người thân</h3>
                                    <span class="timepost">1 giờ trước</span>
                                </a>
                            </div>
                        </div>
                        <div class="box">
                            <div class="item">
                                <img src="" alt="">
                                <a href="https://soundcloud.com/huy-t-n-26066383">
                                    <div class="img-slide">
                                        <img alt="" width="376" height="150" src="./assets/img/SCL.png">
                                    </div>
                                    <h3>Bạn cần những set nhạc để bay phòng, hãy vào ngay SoundCloud của HuyDeen để nghe
                                        nhé!!</h3>
                                    <span class="timepost">50 phút trước</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</section>
<?php endif; ?>