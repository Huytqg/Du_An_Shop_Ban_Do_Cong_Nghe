<h1>Lịch sử đơn hàng</h1>
<!--  -->
<table border="1px solid black" style="width: 100%;text-align: center;">
    <tr>
        <th>MÃ ĐƠN HÀNG</th>
        <th>TÊN NGƯỜI NHẬN</th>
        <th>ĐỊA CHỈ</th>
        <th>ĐIỆN THOẠI </th>
        <th>NGÀY MUA</th>
        <th>TRẠNG THÁI</th>
        <th>OPTION</th>
    </tr>
    <?php foreach ($listdonhang as $donhang) : ?>
        <tr>
            <td><?= $donhang['id'] ?></td>
            <td><?= $donhang['name'] ?></td>
            <!-- <td><img style="width: 50px;" src="../images/<?= $donhang['image'] ?>"></td> -->
            <td><?= $donhang['address'] ?></td>
            <td><?= $donhang['phone'] ?></td>
            <td><?= date( $donhang['date_order'])  ?></td>
            <td><?php if ($donhang['trang_thai'] == 1) {
                    echo "Chưa xử lí";
                } elseif ($donhang['trang_thai'] == 2) {
                    echo "Đang xử lí";
                } elseif ($donhang['trang_thai'] == 3) {
                    echo "Đã xử lí";
                }  ?></td>
            <td>
                <a href="index.php?act=chitietdon&id=<?= $donhang['id'] ?>">xem</i></a>
            </td>
        </tr>
    <?php endforeach ?>
</table>