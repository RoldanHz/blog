
<table border="1">
    <thead>
        <tr>
            <th>TITULO DEL POST</th>
            <th>Nombre del Autor</th>
            <th>Categoría</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($posts as $post): ?>
            <tr>
                <td><?= $post['NombrePost'];?></td>
                <td><?= $post['NombreAutor'];?></td>
                <td><?= $post['Categoria'];?></td>
            </tr>    
        <?php endforeach; ?>
    </tbody>
</table>