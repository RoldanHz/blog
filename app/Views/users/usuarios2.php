

    <table>
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Contraseña</th>
                <th>Status de Usuario</th>
            </tr>
        </thead>

        <tbody>
        <?php foreach($usuarios as $usuario): ?>
            <tr>
                <td><?= $usuario['username'];?></td>
                <td><?= $usuario['password'];?></td>
                <?php if($usuario['status']==1) : ?>
                    <td>activo</td>
                <?php else : ?>
                    <td>Inactivo</td>
                <?php endif;?>
            </tr>    
        <?php endforeach; ?>
        </tbody>
    </table>