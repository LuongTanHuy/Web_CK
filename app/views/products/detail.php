<?php if (!empty($products)) :
?>
    <main>
        <div id="productIP">
            <div class="intro-detail">
                <div class="center-page">
                    <div class="slider-detail">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <?php foreach ($pictures as $key => $picture) : ?>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $key ?>" aria-label="Slide 2" class="<?php echo ($key == 0) ? 'active' : ''; ?>">
                                        <img src="<?php echo $picture['thumbnail']; ?>" class="d-block w-100" alt="...">
                                    </button>
                                <?php endforeach; ?>
                            </div>
                            <div class="carousel-inner">
                                <?php foreach ($pictures as $key => $picture) : ?>
                                    <div class="carousel-item <?php echo ($key == 0) ? 'active' : ''; ?>">
                                        <img src="<?php echo $picture['thumbnail']; ?>" alt="" class="d-block w-100">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                    <!---->
                    <div class="product-infor">
                        <div class="infor">
                            <h1 style="margin-bottom: 10px;"><?php echo $products['title']; ?></h1>
                            <small style="margin-bottom: 10px;">By APPLE</small>
                            <div class="infor-icon">
                                <span><i class="bi bi-star-fill" style="color: yellow;"></i></span>
                                <span><i class="bi bi-star-fill" style="color: yellow;"></i></span>
                                <span><i class="bi bi-star-fill" style="color: yellow;"></i></span>
                                <span><i class="bi bi-star-fill" style="color: yellow;"></i></span>
                                <span><i class="bi bi-star-fill" style="color: yellow;"></i></span>
                            </div>
                            <table>
                                <tr class="price">
                                    <td style="color: aqua;">
                                        <strike><?php echo number_format($products['discount'], 0, ',', '.') . ' vnđ' ?></strike>
                                    </td>
                                    <td><?php echo number_format($products['price'], 0, ',', '.') . ' vnđ' ?></td>
                                    <td class=""><span></span><small class="">&nbsp;&nbsp;</small></td>
                                </tr>
                            </table>
                            <div class="capacity">
                                <span>Dung lượng</span>
                                <ul>
                                    <?php foreach ($capacity as $item) : ?>
                                        <li><a href="#"><?php echo $item['storage_capacity']; ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="buy-sp">
                                <button class="btn btn-secondary btn-lg">
                                    Mua ngay
                                </button>
                                <button class="btn btn-secondary btn-lg"><a href="<?php echo _WEB_ROOT . '/gio-hang/add/' . $products['id']; ?>">
                                        Giỏ hàng
                                    </a></button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
<?php endif; ?>
<!--  -->