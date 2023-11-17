<h1>DANH SÁCH KHÁCH HÀNG</h1>

<table border="1px solid black" style="width: 100%;text-align: center;">
    <tr>
        <th>ID KHÁCH HÀNG</th>
        <th>TÀI KHOẢN KHÁCH HÀNG</th>
        <th>MẬT KHẨU</th>
        <th>VAI TRÒ</th>
        <th>TÙY BIẾN</th>
    </tr>
    <?php foreach ($listkh as $kh) : ?>
        <tr>
            <td><?= $kh['id'] ?></td>
            <td><?= $kh['username'] ?></td>
            <td><?= $kh['password'] ?></td>
            <td><?= $kh['role'] ?></td>
            <td><a href="index.php?act=editkh&&id=<?= $kh['id'] ?>"><i class='bx bx-edit'></i></a> -
                <a onclick="return confirm('Bạn có muốn xóa không?')" href="index.php?act=deletekh&&id=<?= $kh['id'] ?>"><i class='bx bx-trash'></i></a>
            </td>
        </tr>
    <?php endforeach ?>
</table>