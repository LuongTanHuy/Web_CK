<div class="col-2"></div>
<section class="main col-10">
    <div class="main-top">
        <h1>Edit sản phẩm</h1>
        <i class="fas fa-user-cog"></i>
    </div>
    <div class="sanpham">
        <form action="<?php echo _WEB_ROOT . '/quan-li/editProduct' ?>" method="POST">
            <input name="id" type="text" hidden value="<?php echo $product['id'] ?>">
            <div class="form-group">
                <label for="title">Tên </label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo $product['title'] ?>">
            </div>
            <div class="form-group">
                <label for="title">Giá</label>
                <input type="text" class="form-control" id="title" name="price" value="<?php echo $product['price'] ?>">
            </div>
            <div class="form-group">
                <label for="title">Giá giảm</label>
                <input type="text" class="form-control" id="title" name="discount" value="<?php echo $product['discount'] ?>">
            </div>
            <div class="form-group">
                <label for="title">Ảnh</label>
                <input type="text" class="form-control" id="title" name="thumbnail" value="<?php echo $product['thumbnail'] ?>">
            </div>
            <div class="form-group">
                <label for="title">Mô tả ngắn</label>
                <input type="text" class="form-control" id="title" name="description" value="<?php echo $product['description'] ?>">
            </div>
            <div class="thuchien">
            </div>
    </div>
    <div class="danhmuc" style="margin-bottom: 50px;">
        <div style="margin-bottom: 20px;">
            <h3>Thông số kỹ thuật</h3>
        </div>
        <div class="accordion-item">
            <?php foreach ($specify as $key => $spe) : ?>
                <label for="" class="form-label">Tên thông số</label>
                <input type="hidden" name="specify[<?php echo $key; ?>][id]" value="<?php echo $spe['id']; ?>">
                <input type="" class="form-control" id="" name="specify[<?php echo $key; ?>][title]" value="<?php echo $spe['title']; ?>">
                <div class="row p-2">
                    <?php foreach ($spe['sub-specify'] as $key => $sub) : ?>
                        <input type="hidden" name="sub_specify[<?php echo $key; ?>][id]" value="<?php echo $sub['id']; ?>">
                        <div class="col-4">
                            <div class="mb-2">
                                <label for="" class="form-label">Loại thông số</label>
                                <input type="" class="form-control" id="" name="sub_specify[<?php echo $key; ?>][name_space]" value="<?php echo $sub['name_space']; ?>">
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="mb-2">
                                <label for="" class="form-label">Loại thông số</label>
                                <input type="" class="form-control" id="" name="sub_specify[<?php echo $key; ?>][value_space]" value="<?php echo $sub['value_space']; ?>">
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="anhcon">
        <h3>
            Ảnh con sản phẩm
        </h3>
    </div>

    <?php foreach ($galery as $key => $value) : ?>
        <div class="mb-2">
            <input type="hidden" name="pictures[<?php echo $key ?>][id]" value="<?php echo $value['id'] ?>">
            <input name="pictures[<?php echo $key ?>][thumbnail]" type="text" class="form-control" placeholder="Nhập đường dẫn ảnh" value="<?php echo $value['thumbnail'] ?>">
        </div>
    <?php endforeach; ?>

    <button type="submit" class="btn btn-primary" name="addButton">Cập Nhật</button>
    </form>
</section>
</div>