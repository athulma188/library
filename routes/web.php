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
Route::get('/book_category', 'BookCategoryController@index')->name('view_book_category');
Route::get('/member_category', 'MemberCategoryController@index')->name('view_member_category');
Route::get('/book_category/add', 'BookCategoryController@add')->name('add_book_category');
Route::get('/member_category/add', 'MemberCategoryController@add')->name('add_member_category');
Route::get('issued', 'BooksController@issued')->name('issued');
Route::get('unsettled_fine', 'FineController@view_unsettled_fine');
Route::get('settled_fine', 'FineController@view_settled_fine');
Route::get('books/issue', 'BooksController@issue');
Route::get('authored_by', 'AuthorController@authored_by');
Route::get('professors', 'DepartmentController@professors');
Route::get('professors/add', 'DepartmentController@add_professor');
Route::get('authorized_professors', 'DepartmentController@view_authorized_professors');
Route::get('authorized_professors/set', function(){ return view('set_authorized_professor');});
Route::get('/book_copy/add', function(){ return view('add_book_copy');});
Route::get('/holds', 'HoldController@view_holds');
Route::get('/transactions', 'TransactionController@index');

Route::get('/books/renew', function(){ return view('renew_book');});
Route::post('/books/renew', 'BooksController@renew');
Route::get('/holds/issue', function(){ return view('issue_hold');});
Route::post('/holds/issue', 'HoldController@issue');
Route::get('/holds/add', function(){ return view('add_hold');});
Route::post('/holds/add', 'HoldController@add_hold');
Route::get('/settle', function(){ return view('settle_fine');});
Route::post('/settle', 'FineController@settle');
Route::get('/books/return', function(){ return view('return_book');});
Route::post('/books/return', 'BooksController@return');

Route::post('/book_copy/add', 'BooksController@add_copy');
Route::post('authorized_professors/set','DepartmentController@set_authorized_professor');
Route::post('professors/add', 'DepartmentController@store_professor');
Route::post('authored_by', 'AuthorController@add_authored_by');
Route::post('books/issue', 'BooksController@issue_book');
Route::post('/authors/add', 'AuthorController@create');
Route::post('/books/add', 'BooksController@create');
Route::post('/book_category/add', 'BookCategoryController@create');
Route::post('/member_category/add', 'MemberCategoryController@create');
Route::post('/departments/add', 'DepartmentController@create');
Route::post('/members/add', 'MembersController@create');
Route::post('/employees/add', 'EmployeesController@create');
