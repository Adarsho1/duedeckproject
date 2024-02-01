<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Industry;
use App\Livewire\Designation;
use App\Http\Controllers\EmpController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\DashboardController;
//use App\Http\Controllers\BlogController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/table', function () {
    return view('table');
});

//login page route


//Route::post('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/login', [CustomAuthController::class, 'login']);
Route::get('/Registration', [CustomAuthController::class, 'Registration']);
Route::post('/Register-user', [CustomAuthController::class, 'RegisterUser'])->name('Register.user');
Route::post('/login-user', [CustomAuthController::class, 'loginUser'])->name('login.user');
Route::get('/logout', [CustomAuthController::class, 'logout'])->name('logout');
//Route::get('/dashboards', [CustomAuthController::class, 'dashboards'])->name('dashboard')->Middleware('isLoggedIN');



//dashboard page route
Route::get('/', [DashboardController::class, 'showDashboardForm'])->name('/dashboard')->Middleware('isLoggedIN');

// Handle the dashboard form submission
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard')->Middleware('isLoggedIN');

//Employee Route

Route::get('/Edit', function () {
    return view('employee.Edit');
});


//Save EMPLOYEE FUNCTION
Route::post('/saveemployee', [EmpController::class, 'create']);
//index function
Route::get('index', [EmpController::class, 'index']);

Route::get('createemployee', [EmpController::class, 'createemployee']);

//edit form function
Route::get('Edit/{id}', [EmpController::class, 'Edit']);
//delete function
Route::get('/deleteemployee/{id}', [EmpController::class, 'delete']);

//update employee function
Route::post('/updateemployee', [EmpController::class, 'update']);


//emp end
// c
Route::get('/adarsh', function () {
    return view('adarsh');
});

//client route

Route::get('createclient', [ClientController::class, 'createclient']);

//submit client function
Route::post('/saveclient', [ClientController::class, 'create']);
//client index function
Route::get('client', [ClientController::class, 'client']);
//client form function
Route::get('adarsh/{id}', [ClientController::class, 'adarsh']);

//client delete function
Route::get('deleteclient/{id}', [ClientController::class, 'delete']);
//edit function
// routes/web.php
Route::post('/updateclient', [ClientController::class, 'update']);


//end

//department route


//department form
Route::post('/savedepartments', [DepartmentController::class, 'create']);
Route::get('/department', [DepartmentController::class, 'department']);
Route::get('deletedepartments/{id}',[DepartmentController::class, 'delete']);
//Route::get('adarsh/{id}', [ClientController::class, 'adarsh']);
//Route::post('/submitclient',  [ClientController::class, 'submit']);


//industry
Route::get('/industry', function () {
    return view('industry');
});

// Route::get('industry', Industry::class);

//designation
Route::get('/designation', function () {
    return view('designation');
});

//Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
//Route::get('/blog', [BlogController::class, 'blog']);

// Route::get('/blog', function () {
//     return view('blog');
// });
// Route::get('/blog', [BlogController::class, 'index']);

// Route::get('/createpost', [BlogController::class, 'create']);

// Route::get('/editpost/{id}', [BlogController::class, 'edit']);

// Route::post('/updatepost', [BlogController::class, 'update']);

// Route::get('/deletepost/{id}', [BlogController::class, 'delete']);







