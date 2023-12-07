<div class="main-top">
    <h1>Danh Mục Sản Phẩm</h1>
    <i class="fas fa-user-cog"></i>
</div>
<form action="<?php echo _WEB_ROOT . '/quan-li/addcate'; ?>" method="POST">
    <div class="form-group">
        <label for="title">Tên danh mục</label>
        <input type="text" class="form-control" id="title" name="name" />
    </div>
    <div class="form-group">
        <label for="title">ParentID</label>
        <input type="text" class="form-control" id="title" name="parentID" />
    </div>
    <div class="thuchien">
        <button type="submit" class="btn btn-primary" name="addButton">
            Thêm
        </button>
    </div>
</form>
<?php
// Số danh mục hiển thị trên mỗi trang
$categoriesPerPage = 6;

// Tính toán tổng số trang
$totalCategoryPages = ceil(count($categories) / $categoriesPerPage);

// Lấy trang hiện tại từ tham số truyền vào hoặc mặc định là trang 1
$currentCategoryPage = isset($_GET['category_page']) ? $_GET['category_page'] : 1;

// Xác định vị trí bắt đầu của dãy danh mục trên trang hiện tại
$startCategoryIndex = ($currentCategoryPage - 1) * $categoriesPerPage;

// Lấy danh sách danh mục cho trang hiện tại
$currentCategories = array_slice($categories, $startCategoryIndex, $categoriesPerPage);

?>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Danh Mục</th>
            <th scope="col">ParentID</th>
            <th scope="col">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($currentCategories as $item) : ?>
        <tr>
            <td><?php echo $item['name']; ?></td>
            <td><?php echo $item['parent_id']; ?></td>
            <td>
                <a href="<?php echo _WEB_ROOT . '/quan-li/edit_cate?id=' . $item['id']; ?>"
                    class="btn btn-primary">Sửa</a>
                <a onclick="return confirm('Bạn có muốn xóa danh mục này không')"
                    href="<?php echo _WEB_ROOT . '/quan-li/deleteCate?id=' . $item['id']; ?>"
                    class="btn btn-primary">Xóa</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<ul class="pagination">
    <?php for ($i = 1; $i <= $totalCategoryPages; $i++) : ?>
    <li class="page-item <?php echo ($i == $currentCategoryPage) ? 'active' : ''; ?>">
        <a class="page-link" href="?category_page=<?php echo $i; ?>"><?php echo $i; ?></a>
    </li>
    <?php endfor; ?>
</ul>