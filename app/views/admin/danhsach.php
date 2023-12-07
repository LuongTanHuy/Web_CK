<div>
    <div class="main-top">
        <h1>Danh sách sản phẩm</h1>
        <i class="fas fa-user-cog"></i>
    </div>
    <div class="form">
        <div class="container">
            <form action="<?php echo _WEB_ROOT . '/quan-li/search'; ?>" method="GET">
                <div class="form-group">
                    <label for="title">Tìm kiếm sản phẩm</label>
                    <input type="text" class="form-control" id="title" name="search" />
                </div>
                <div class="thuchien">
                    <button type="submit" class="btn btn-primary" name="searchButton">
                        Tìm kiếm
                    </button>
                </div>
            </form>
        </div>
    </div>
    <?php
    // Số sản phẩm hiển thị trên mỗi trang
    $itemsPerPage = 8;

    // Tính toán tổng số trang
    $totalPages = ceil(count($products) / $itemsPerPage);

    // Lấy trang hiện tại từ tham số truyền vào hoặc mặc định là trang 1
    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

    // Xác định vị trí bắt đầu của dãy sản phẩm trên trang hiện tại
    $startIndex = ($currentPage - 1) * $itemsPerPage;

    // Lấy danh sách sản phẩm cho trang hiện tại
    $currentProducts = array_slice($products, $startIndex, $itemsPerPage);

    ?>

    <!-- Hiển thị danh sách sản phẩm -->
    <div class="danhsach" style="margin-bottom: 50px">
        <table class="table table-bordered" id="myTable">
            <thead>
                <tr class="ex">
                    <th width="auto">Tên Sản Phẩm</th>
                    <th width="auto">Giá</th>
                    <th>Giá giảm</th>
                    <th>Ảnh</th>
                    <th>Mô tả</th>
                    <th>Tính Năng</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($currentProducts as $item) : ?>
                <tr>
                    <td><?php echo $item['title']; ?></td>
                    <td><?php echo $item['price']; ?></td>
                    <td><?php echo $item['discount']; ?></td>
                    <td>
                        <?php echo $item['thumbnail']; ?>
                    </td>
                    <td><?php echo $item['description']; ?></td>
                    <td>
                        <a class="edit" href="<?php echo _WEB_ROOT . '/quan-li/edit_product?id=' . $item['id']; ?>"
                            data-original-title="Sửa"><i class="bi bi-pencil-square"></i></a>
                        <a onclick="return confirm('Bạn có muốn xóa danh mục này không')" class="delete"
                            href="<?php echo _WEB_ROOT . '/quan-li/deleteProduct?id=' . $item['id']; ?>" title=""
                            data-original-title="Xóa"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- Hiển thị phân trang -->
        <ul class="pagination">
            <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
            <li class="page-item <?php echo ($i == $currentPage) ? 'active' : ''; ?>">
                <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
            </li>
            <?php endfor; ?>
        </ul>
    </div>

</div>