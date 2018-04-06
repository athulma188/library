<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/books', 'BooksController@index')->name('view_books');
Route::get('/books/add', 'BooksController@add')->name('add_book');
Route::get('/members', 'MembersController@index')->name('view_members');
Route::get('/members/add', 'MembersController@add')->name('add_member');
Route::get('/employees', 'EmployeesController@index')->name('view_employees');
Route::get('/employees/add', 'EmployeesController@add')->name('add_employee');
Route::get('/departments/add', 'DepartmentController@add')->name('add_department');
Route::get('/departments', 'DepartmentController@index')->name('view_departments');
Route::get('/authors', 'AuthorController@index')->name('view_authors');
Route::get('/authors/add', 'AuthorController@add')->name('add_author');
