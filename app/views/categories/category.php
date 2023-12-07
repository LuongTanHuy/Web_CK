<!--Slide Show-->
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
<!-- demo -->
<section class="bo">
    <div class="filter-cate">
        <div class="ft-cate">
            <?php foreach ($categories as $item) : ?>
                <a href="<?php echo _WEB_ROOT . '/danh-muc?id=' . $item['id']; ?>" ?>
                    <?php echo $item['name']; ?>
                </a>
            <?php endforeach; ?>
        </div>
        <div class="container-so">
            <div class="ft-sort">
                <a href="javascript:;">Xếp theo: Bán chạy</a>
                <ul>
                    <li><a href="javascript:;" class="check">Bán chạy</a></li>
                    <li><a href="javascript:;" class="check">Giá từ cao đến thấp</a></li>
                    <li><a href="javascript:;" class="check">Giá từ thấp đến cao</a></li>
                </ul>
            </div>
        </div>
        <script>
            const ftSort = document.querySelector('.ft-sort');
            const dropdown = ftSort.querySelector('ul');

            ftSort.addEventListener('click', function() {
                if (dropdown.style.display === 'none') {
                    dropdown.style.display = 'block';
                } else {
                    dropdown.style.display = 'none';
                }
            });
        </script>
    </div>
    <!--Box Product-->

    <div class="container-productbox">
        <ul class="listing-cate" id="sp">
            <?php foreach ($products as $item) :  ?>
                <li>
                    <a href="<?php echo _WEB_ROOT . '/san-pham?id=' . $item['id'] ?>">
                        <label>Mới</label>
                        <div class="item-img">
                            <img src="<?php echo $item['thumbnail'] ?>" alt="" width="235" height="235">
                        </div>
                        <div class="prods-group">
                            <ul class="hasScroll">
                                <?php foreach ($item['storage_capacity'] as $capacity) : ?>
                                    <li><?php echo $capacity; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <h3><?php echo $item['title'] ?></h3>
                        <strong class="price"></strong>
                        <p class="item-txt-online"><?php echo $item['description'] ?></p>

                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
<br><br>