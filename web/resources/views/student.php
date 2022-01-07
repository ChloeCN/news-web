<!-- table>tr*2>td*5 -->
<table>
        <tr>
            <th>ID编号</th>
            <th>姓名</th>
            <th>性别</th>
            <th>邮箱</th>
            <th>电话</th>
        </tr>
        <?php foreach ($data as $row) : ?>
        <tr>
            <td><?=$row['id'] ?></td>
            <td><?=$row['name'] ?></td>
            <td><?=$row['gender'] ?></td>
            <td><?=$row['email'] ?></td>
            <td><?=$row['mobile'] ?></td>
        </tr>
        <?php endforeach ?>
    </table>