<h1>Danh sách Sản phẩm</h1>

<table border="1px solid black" style="width: 100%;text-align: center;">
    <tr>
        <th>HÌNH ẢNH</th>
        <th>ID SẢN PHẨM</th>
        <th>TÊN SẢN PHẨM</th>
        <th>GIÁ TIỀN</th>
        <th>GIÁ CŨ</th>
        <th>SỐ LƯỢNG</th>
        <th>MÔ TẢ</th>
        <th>CATEGORY_ID</th>
        <th>TÙY BIẾN</th>
    </tr>
    <?php foreach ($listsp as $sp) : ?>
        <tr>
            <td><img style="width: 50px;" src="../images/<?= $sp['image'] ?>"></td>
            <td><?= $sp['id'] ?></td>
            <td><?= $sp['name'] ?></td>
            <td><?= $sp['price'] ?></td>
            <td><?= $sp['price_new'] ?></td>
            <td><?= $sp['quantity'] ?></td>
            <td><?= $sp['description']?></td>
            <td><?= $sp['category_id'] ?></td>
            <td><a href="index.php?act=editsp&&id=<?= $sp['id'] ?>"><i class='bx bx-edit'></i></a> -
                <a onclick="return confirm('Bạn có muốn xóa không?')" href="index.php?act=deletesp&&id=<?= $sp['id'] ?>"><i class='bx bx-trash'></i></a>
            </td>
        </tr>
    <?php endforeach ?>
</table>