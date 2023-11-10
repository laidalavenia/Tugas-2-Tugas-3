<?php
require_once 'controller/controllers.php';
require_once 'model/models.php';
class RoleController{
    static function index() {
        $role = Roles::select();
        var_dump($role);


        if ($role) {
            var_dump($role);
        } else {
            echo "Gagal mengambil data.";
        }

        // view('subview/roles', [
        //     'roles' => Roles::select(),
        //     'header' => titleheader('Read data scr AJAX dgn jQuery', 'h1', 'text-center mb-3')
        // ]);
    }

    static function getRoles($id) {
        $roles = Roles::getRoles($id); //ada di model
        var_dump($roles);

        if ($roles) {
            var_dump($roles);
        } else {
            echo "Gagal mengambil data.";
        }
        // view('subview/show', [
        //     'roles' => Students::selectById($id),
        //     'header' => titleheader('Students', 'h1', 'text-center mb-3')
        // ]);
    } 
}
