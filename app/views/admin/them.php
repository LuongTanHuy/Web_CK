    <div class="col-2"></div>
    <section class="main col-10">
        <div class="main-top">
            <h1>Quản lí sản phẩm</h1>
            <i class="fas fa-user-cog"></i>
        </div>
        <div class="sanpham">
            <form action="<?php echo _WEB_ROOT . '/quan-li/addProduct'; ?>" method="POST">
                <div class="form-group">
                    <label for="title">Tên sản phẩm</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="title">Giá</label>
                    <input type="text" class="form-control" id="title" name="price">
                </div>
                <div class="form-group">
                    <label for="title">Giá giảm</label>
                    <input type="text" class="form-control" id="title" name="discount">
                </div>
                <div class="form-group">
                    <label for="title">Ảnh</label>
                    <input type="text" class="form-control" id="title" name="thumbnail">
                </div>
                <div class="form-group">
                    <label for="title">Mô tả ngắn</label>
                    <input type="text" class="form-control" id="title" name="description">
                </div>
                <div class="thuchien">
                    <button type="submit" class="btn btn-primary" name="addButton">Thêm</button>
                </div>
            </form>
        </div>
        <div class="danhmuc" style="margin-bottom: 50px;">
            <div style="margin-bottom: 20px;">
                <h3>Thông số kỹ thuật</h3>
            </div>
            <form action="<?php echo _WEB_ROOT . '/quan-li/addNameSpecify'; ?>" method="POST">
                <div class="accordion-item">
                    <label for="exampleFormControlInput1" class="form-label">Tên thông số</label>
                    <input type="" class="form-control" id="exampleFormControlInput1" name="titleSpec">
                    <button type="submit" class="btn btn-primary" name="addButton">Thêm</button>

            </form>
            <form action="<?php echo _WEB_ROOT . '/quan-li/addSpecify'; ?>" method="POST">
                <div class="row p-2">
                    <div class="col-4">
                        <div class="mb-2">
                            <label for="exampleFormControlInput1" class="form-label">Loại thông số</label>
                            <input class="form-control" id="exampleFormControlInput1" name="loai">
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="mb-2">
                            <label for="exampleFormControlInput1" class="form-label">Mo ta thoong so</label>
                            <input class="form-control" id="exampleFormControlInput1" name="mota">
                        </div>
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary" name="addButton">Thêm</button>
                </div>
            </form>

            <div style="margin-bottom: 50px;">
                <div class="title">
                    <h3>
                        Thêm ảnh SlideShow
                    </h3>
                </div>
                <form action="<?php echo _WEB_ROOT . '/quan-li/addSlideShow'; ?>" method="POST">
                    <div class="mb-2">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="" class="form-control" id="exampleFormControlInput1"
                            placeholder="Nhập đường dẫn ảnh" name="duongdan">
                        <button type="submit" class="btn btn-primary" name="addButton">Thêm</button>
                    </div>
                </form>
            </div>
            <div class="anhcon">
                <h3>
                    Ảnh con sản phẩm
                </h3>
            </div>
            <form action="<?php echo _WEB_ROOT . '/quan-li/addImgProduct' ?>" method="POST" class="-ml-6">
                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="form-label"></label>
                    <input name="pictures[0][]" type="" class="form-control" id="exampleFormControlInput1"
                        placeholder="Nhập tên thông số">
                </div>
                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="form-label"></label>
                    <input name="pictures[1][]" type="" class="form-control" id="exampleFormControlInput1"
                        placeholder="Nhập tên thông số">
                </div>
                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="form-label"></label>
                    <input name="pictures[2][]" type="" class="form-control" id="exampleFormControlInput1"
                        placeholder="Nhập tên thông số">
                </div>
                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="form-label"></label>
                    <input name="pictures[3][]" type="" class="form-control" id="exampleFormControlInput1"
                        placeholder="Nhập tên thông số">
                </div>
                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="form-label"></label>
                    <input name="pictures[4][]" type="" class="form-control" id="exampleFormControlInput1"
                        placeholder="Nhập tên thông số">
                </div>
                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="form-label"></label>
                    <input name="pictures[5][]" type="" class="form-control" id="exampleFormControlInput1"
                        placeholder="Nhập tên thông số">
                </div>
                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="form-label"></label>
                    <input name="pictures[6][]" type="" class="form-control" id="exampleFormControlInput1"
                        placeholder="Nhập tên thông số">
                </div>
                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="form-label"></label>
                    <input name="pictures[7][]" type="" class="form-control" id="exampleFormControlInput1"
                        placeholder="Nhập tên thông số">
                </div>
                <button type="submit" class="btn btn-primary" name="addButton">Thêm</button>
            </form>
    </section>
    </div>

    <!--<form action="<?php echo _WEB_ROOT . '/quan-li/addNameSpecify'; ?>" method="POST">
                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="form-label">Tên thông số</label>
                    <input type="" class="form-control" id="exampleFormControlInput1" placeholder="Nhập tên thông số" name="titleSpec">
                    <button type="submit" class="btn btn-primary" name="addButton">Thêm</button>
                </div>
            </form>
            <form action="<?php echo _WEB_ROOT . '/quan-li/addSpecify'; ?>" method="POST">
                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="form-label">ID</label>
                    <input type="" class="form-control" id="exampleFormControlInput1" placeholder="Nhập ID" name="idspec">
                </div>

                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="form-label">Loại thông số</label>
                    <input type="" class="form-control" id="exampleFormControlInput1" placeholder="Nhập tên thông số" name="loai">
                </div>
                <div class="mb-2">
                    <label for="exampleFormControlTextarea1" class="form-label">Mô tả loại thông số</label>
                    <input class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Nhập mô tả thuộc tính của thông số" name="mota"></input>
                </div>
                <button type="submit" class="btn btn-primary" name="addButton">Thêm</button>
            </form>-->