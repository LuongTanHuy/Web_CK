<main role="main">
    <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
    <div class="container-gs">
        <div id="thongbao" class="alert alert-danger d-none face" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <h1 class="title">Giỏ hàng</h1>

        <div class="row">
            <div class="col col-md-12">
                <?php if ($cart = Session::data('cart')) : ?>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Ảnh</th>
                                <th>Tên sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Đơn giá</th>
                                <th>Thành tiền</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="datarow">
                            <?php foreach ($cart as $product) : ?>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <img src="<?php echo $product['thumbnail']; ?>" class="hinhdaidien">
                                    </td>
                                    <td><?php echo $product['title']; ?></td>
                                    <td class="text-right"><?php echo $product['discount']; ?></td>
                                    <td class="text-right"><?php echo $product['soluong']; ?></td>
                                    <td class="text-right">
                                        <?php echo intval($product['discount']) * intval($product['soluong']); ?>
                                    </td>
                                    <td>
                                        <a id="delete_1" data-sp-ma="2" class="btn btn-danger btn-delete-sanpham" href="<?php echo _WEB_ROOT . "/gio-hang/delete/" . $product['id'] ?>">
                                            <i class="fa fa-trash" aria-hidden="true"></i> Xóa
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                    <a href="checkout.html" class="btn btn-primary btn-md"><i class="bi bi-credit-card-2-front"></i>&nbsp;Thanh toán</a>
                <?php else : ?>
                    <div class="non-cart m-auto text-center">
                        <img style=" width: 50%; mix-blend-mode: darken; margin-bottom: 30px;" src="<?php echo _WEB_ROOT . '/assets/img/nosp.jpg' ?>" alt="">
                        <h2 class="mt-2">Bạn chưa có sản phẩm nào</h2>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>