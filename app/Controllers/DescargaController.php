<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DescargaController extends BaseController
{
    public function index()
    {
        //
    }


    public function descargaBD() {
        //$db = \Config\Database::connect();

        chdir('../../../../Program Files/MySQL/MySQL Workbench 8.0 CE');
        $command = 'mysqldump -u root estudiantec > "C:\Users\Rolda\Downloads\blog.sql"';
        
        //$command = 'mysqldump -u $db > "C:\Users\Rolda\Downloads\blog.sql"';
        exec($command);
            echo "Se ha realizado la exportación de la base de datos." . '<br>';
    }
}

