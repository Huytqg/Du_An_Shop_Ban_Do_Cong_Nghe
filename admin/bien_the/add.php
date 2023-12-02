<h1>Thêm biến thể</h1>
<form action="index.php?act=addbienthe" method="post">
    <input required type="text" name="name" id="" placeholder="Nhập tên biến thể">
        <select name="category_id" id="">
            <?php foreach ($all_dm as $dm) : ?>
                <option value="<?= $dm['id'] ?>">
                    <?= $dm['name'] ?>
                </option>
            <?php endforeach ?>
        </select>
    <input type="submit" class="btn" name="add_bienthe" value="Thêm mới">
</form>