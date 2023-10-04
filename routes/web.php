<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DropzoneController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\Admin\{AuthController,ProfileController,UserController,BugController,ProjectController};

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/login',[AuthController::class,'getLogin']) -> name('getLogin');

Route::post('/admin/login',[AuthController::class,'postLogin']) -> name('postLogin');

Route::group(['middleware'=>['admin_auth']],function()
{
    Route::get('/admin/users/form', [UserController::class, 'create']);

    Route::get('/admin/users/register', function(){
        return view('/admin/users/register');
        });

    Route::post('/admin/users/register', [UserController::class, 'store']);

    Route::get('/admin/dashboard',[ProfileController::class,'dashboard']) -> name('dashboard');

    Route::get('/admin/users',[UserController::class,'index']) -> name('users.index');

    Route::get('/admin/bugs',[BugController::class,'view']) -> name('bugs.view');

    Route::get('/admin/bugs_info/{id}',[BugController::class,'info']) -> name('bugs.info');

    Route::get('/admin/projects',[ProjectController::class,'view']) -> name('projects.view');

    Route::get('/admin/bug_report', [BugController::class,'add']);


    Route::get('/admin/project_report',[ProjectController::class,'add']);

    Route::post('/admin/bugs/create',[BugController::class,'store']) -> name('bugs.store');
    Route::post('/admin/projects/create',[ProjectController::class,'store']) -> name('project.store');

    Route::get('/admin/bugs/delete/{id}',[BugController::class,'delete']) -> name('bugs.delete');
    Route::get('/admin/project/delete/{id}',[ProjectController::class,'delete']) -> name('project.delete');

    Route::get('/admin/bugs/edit/{id}', [BugController::class, 'edit'])->name('bugs.edit');
    Route::get('/admin/project/edit/{id}', [ProjectController::class, 'edit'])->name('project.edit');

    Route::post('/admin/bugs/update/{id}', [BugController::class, 'update'])->name('bugs.update');
    Route::post('/admin/project/update/{id}', [ProjectController::class, 'update'])->name('project.update');


    Route::get('/admin/pro',[UserController::class,'plist']) -> name('projects.plist');

    Route::get('/admin/logout',[ProfileController::class,'logout']) -> name('logout');

    Route::get('/admin/user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');

    Route::get('/admin/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');

    Route::post('/admin/user/update/{id}', [UserController::class, 'update'])->name('user.update');

    Route::get('/dropzone',[DropzoneController::class,'dropzone']);

    Route::post('/dropzone-store',[DropzoneController::class,'dropzoneStore'])->name('dropzone.store');

});



