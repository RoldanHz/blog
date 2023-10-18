
<table border="1">
    <thead>
        <tr>
            <th>USERNAME</th>
            <th>NOMBRE COMPLETO</th>
            <th>EMAIL</th>
            <th>GÉNERO</th>
            <th>FECHA DE CREACIÓN</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($posts as $post): ?>
            <tr>
                <td><?= $post['Username'];?></td>
                <td><?= $post['NombreCompleto'];?></td>
                <td><?= $post['Email'];?></td>
                <td><?= $post['Genero'];?></td>
                <td><?= $post['FechaCreacion'];?></td>
            </tr>    
        <?php endforeach; ?>
    </tbody>
</table>