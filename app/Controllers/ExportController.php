<?php

namespace App\Controllers;

class ExportController extends BaseController
{
    public function index()
    {
        return view('database_export');
    }

    public function exportDatabase()
{
     $filename = 'Respaldo' . date('Y-m-d_H-i-s') . '.sql';

     // Comando para exportar la base de datos usando mysqldump
     $command = "mysqldump -u roldan -p 1234 blog > $filename";

     // Ejecutar el comando
     exec($command);

     // Descargar el archivo de copia de seguridad
     return $this->response->download($filename);
}

}
