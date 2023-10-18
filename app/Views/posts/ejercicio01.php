<table border="1">
    <thead>
        <tr>
            <th>POST ID</th>
            <th>CATEGORIA</th>
            <th>PUBLICACIÓN</th>
            <th>NOMBRE DE USUARIO</th>
            <th>PUBLICACIÓN</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($posts as $post): ?>
            <tr>
                <td><?= $post['id'];?></td>
                <td><?= $post['category'];?></td>
                <td><?= $post['title'];?></td>
                <td><?= $post['username'];?></td>
                <td><?= $post['created_at'];?></td>
            </tr>    
        <?php endforeach; ?>
    </tbody>
</table>