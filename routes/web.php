<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;

Route::get('/', function () {
    return view('home');
});

Route::get('/crear-persona', function () {
    return view('create_user');
});
Route::post('/subir-persona', [PersonaController::class, 'subir_persona']);

Route::get('/lista-personas', [PersonaController::class, 'listar_personas']);

Route::get('/actualizar', function () {
    return view('update_user');
});

Route::post('/actualizar-persona', [PersonaController::class, 'actualizar_persona']);

Route::get('/eliminar-persona', function () {
    return view('delete_user');
});

Route::get('/dashboard', function () {
    return view('dashboard', ['view' => 'lista']);
});

Route::get('/admin', function () {
    return view('adminLayout', [
        'menu' => [
            'MAIN NAVIGATION',
            [
                'text' => 'Blog',
                'url' => 'admin/blog',
            ],
            [
                'text' => 'Pages',
                'url' => 'admin/pages',
                'icon' => 'fas fa-fw fa-file',
            ],
            [
                'text' => 'Show my website',
                'url' => '/',
                'target' => '_blank',
            ],
            [
                'header' => 'ACCOUNT SETTINGS',
            ],
            [
                'text' => 'Profile',
                'route' => 'admin.profile',
                'icon' => 'fas fa-fw fa-user',
            ],
            [
                'text' => 'Change Password',
                'route' => 'admin.password',
                'icon' => 'fas fa-fw fa-lock',
            ],
        ],
    ]);
});
