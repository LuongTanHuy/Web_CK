    <!-- Header -->
    <header>
        <div class="site-header">
            <div class="site-identity">
                <h1><a href="<?php echo _WEB_ROOT ?>" style="color: rgb(103, 103, 103);">HV APPLE</a></h1>
            </div>
            <div class="menu">
                <nav class="site-navigation">
                    <ul class="nav">
                        <?php foreach ($categoriesHeader as $item) : ?>
                            <li><a href="<?php echo _WEB_ROOT . '/danh-muc?id=' . $item['id']; ?>" style="color: rgb(103, 103, 103);"><?php echo $item['name']; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            </div>
            <div class="search">
                <form action="" method="get">
                    <input type="text" placeholder="Tìm Kiếm Sản Phẩm....">
                </form>
            </div>
            <div class="search-cart">
                <div class="search-sp">
                    <a href="#" style="color: rgb(103, 103, 103);"><i class="bi bi-search"></i></a>
                </div>
                <div class="cart">
                    <a href="<?php echo _WEB_ROOT . '/gio-hang/'; ?>" id="addToCartButton" style="color: rgb(103, 103, 103);">
                        <i class="bi bi-cart-plus"></i> <!-- Sử dụng class tương ứng với biểu tượng giỏ hàng -->
                    </a>
                </div>
                <?php if ($user = Session::data("user")) {
                    echo '<a style= "color: rgb(103, 103, 103); display: inline-block; position: relative; top:10px;">' . $user['email'] . '</a>'
                        . '<span><a href="' . _WEB_ROOT . '/tai-khoan/logout" class= "btn btn-sm btn-secondary ms-2 mt-2">Đăng Xuất</a></span>';
                } else { ?>
                    <div class="person">
                        <a href="<?php echo _WEB_ROOT . '/tai-khoan/'; ?>" id="personIcon" style="color: rgb(103, 103, 103);">
                            <i class="bi bi-person-circle"></i>
                        </a>
                    </div>
                <?php } ?>

            </div>
        </div>
        <!--Script cuộn trang -->
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script>
            $(document).ready(function() {
                $(window).scroll(function() {
                    if ($(this).scrollTop()) {
                        $('header').addClass('sticky');
                    } else {
                        $('header').removeClass('sticky');
                    }
                });
            });
        </script>
    </header>