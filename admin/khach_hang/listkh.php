<h1>Danh sách danh mục</h1>

<table border="1px solid black" style="width: 100%;text-align: center;">
    <tr>
        <th>ID DANH MỤC</th>
        <th>TÊN DANH MỤC</th>
        <th>TÙY BIẾN</th>
    </tr>
    <?php foreach ($list_dm as $dm) : ?>
        <tr>
            <td><?= $dm['id'] ?></td>
            <td><?= $dm['name'] ?></td>
            <td><a href="index.php?act=editdm&&id=<?= $dm['id'] ?>"><i class='bx bx-edit'></i></a> -
                <a onclick="return confirm('Bạn có muốn xóa không?')" href="index.php?act=deletedm&&id=<?= $dm['id'] ?>"><i class='bx bx-trash'></i></a>
            </td>
        </tr>
    <?php endforeach ?>
</table>