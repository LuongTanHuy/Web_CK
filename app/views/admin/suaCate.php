<div class="main-top">
    <h1>Edit Danh Mục Sản Phẩm</h1>
    <i class="fas fa-user-cog"></i>
</div>
<form action="<?php echo _WEB_ROOT . '/quan-li/editCate'; ?>" method="POST">
    <input name="id" type="text" hidden value="<?php echo $categories['id'] ?>">
    <div class="form-group">
        <label for="title">Tên danh mục</label>
        <input type="text" class="form-control" name="name" value="<?php echo  $categories['name'] ?>" />
    </div>
    <div class="form-group">
        <label for="title">ParentID</label>
        <input type="text" class="form-control" name="parentID" value="<?php echo  $categories['parent_id'] ?>" />
    </div>
    <div class="thuchien">
        <button type="submit" class="btn btn-primary" name="addButton">Cập Nhật</button>
    </div>
</form>