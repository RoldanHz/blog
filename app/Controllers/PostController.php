<?php

namespace App\Controllers;

use App\Models\PostModel;

class PostController extends BaseController
{
    public function ejercicio01()
    {
        $db = \Config\Database::connect();
        $posts = $db->query('select c.category, p.id, p.title, u.username, p.created_at from categories as c right join posts as p on p.category= c.id 
        left join users as u on u.id=p.autor where p.created_at between "2023/01/01" and "2023/12/31"')->getResultArray();
        $data = ['posts' => $posts];
        return view('posts/ejercicio01', $data);
    }

    public function ejercicio02()
    {
        $db = \Config\Database::connect();
        $posts = $db->query('select p.title as "NombrePost", concat(u.name, " ", u.lastname) as "NombreAutor", c.category as "Categoria" from posts p
        join userinfo u on p.autor = u.id join categories c on p.category=c.id where p.category = (select max(id) from categories)')->getResultArray();
        $data = ['posts' => $posts];
        return view('posts/ejercicio02', $data);
    }


    public function ejercicio04()
    {
        $db = \Config\Database::connect();
        $posts = $db->query('select u.username as "Username", concat(ui.name, " ", ui.lastname) as "NombreCompleto", ui.email as "Email", case
        when ui.gender = "M" then "Hombre" else "Mujer" end as "Genero", p.created_at as "FechaCreacion" from users u join posts p on u.id = p.autor
        join userinfo ui on u.id=ui.id where year(p.created_at) = 2022')->getResultArray();

        $data = ['posts' => $posts];
        return view('posts/ejercicio04', $data);
    }

    public function ejercicio05()
    {
        $db = \Config\Database::connect();
        $totalUsers = $db->query('select count(*) as "totalUsuarios" from users')->getResultArray();
        $totalPosts = $db->query('select count(*) as "totalPublicaciones" from posts')->getResultArray();
        $totalComments = $db->query('select count(*) as "totalComentarios" from comments')->getResultArray();
        $totalCategories = $db->query('select count(*) as "totalCategorias" from categories')->getResultArray();
        $data = [
            'totalUsers'        => $totalUsers,
            'totalPosts'        => $totalPosts,
            'totalComments'        => $totalComments,
            'totalCategories'    => $totalCategories
        ];
        return view('posts/ejercicio05', $data);
    }

    public function ejercicio07()
    {
        $db = \Config\Database::connect();
        $postEscritosporMujeres = $db->query('select p.*, u.*, ui.* from post as p join users as u on p.autor=u.id join userinfi as ui u.id=ui.id')->getResultArray();

        $data = [
            'postEscritosporMujeres' => $postEscritosporMujeres
        ];
    }


    public function exportar()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('userinfo');
        $query = $builder->get();
        $delimiter = ",";
        $newline = "\r\n";
        $filename = "tabla_userinfo.csv";
        $f = fopen('php://memory', 'w');
        $fields = array('id', 'name', 'lastname', 'birthday', 'gender', 'phone', 'bio', 'email');
        fputcsv($f, $fields, $delimiter, $newline);
        foreach ($query->getResult() as $row) {
            fputcsv($f, array($row->id, $row->name, $row->email), $delimiter, $newline);
        }
        fseek($f, 0);
        header('Content-Type: application/csv');
        header('Content-Disposition: attachment; filename="' . $filename . '";');
        fpassthru($f);
    }
}
