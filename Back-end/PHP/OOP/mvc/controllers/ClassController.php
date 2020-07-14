<?php 
include_once 'D:/xampp/htdocs/Kyziss/OOPs/mvc/models/Classes.php';

class ClassController
{
	public function __construct()
	{
		if (!Auth::check()) {
			return header('Location: http://mvc.local/?controller=page&action=login');
		}
	}

	public function index() // list
	{
		$classModel = new Classes;
		$page = GetRequest::get('page') != null ? GetRequest::get('page') : 1;
		$classname = GetRequest::get('classname') ? GetRequest::get('classname') : '';

		$limit = 2;
		$offset = ($page - 1) * $limit;

		$totalClass = intval($classModel->countClass($classname));
		$totalPage = ceil($totalClass / $limit);
		$classes = $classModel->paginateClass($classname, $limit, $offset);
		$paginate = new Pagination($totalPage, $page);
		include 'D:/xampp/htdocs/Kyziss/OOPs/mvc/views/class/index.php';
	}

	public function create() // hiển thị form create
	{
		include 'D:/xampp/htdocs/Kyziss/OOPs/mvc/views/class/create.php';
	}

	public function store() // nhận dữ liệu từ form create
	{
		$data = PostRequest::only(['classname']);
		$classModel = new Classes;
		$classModel->insert($data);
		header('Location: http://mvc.local/?controller=class');
	}

	public function edit() // hiển thị form edit
	{
		$id = GetRequest::get('id');
		$classModel = new Classes;
		$class = $classModel->getById($id);
		include 'D:/xampp/htdocs/Kyziss/OOPs/mvc/views/class/edit.php';
	}

	public function update() // nhận dữ liệu từ form edit
	{
		$data = PostRequest::only(['classname']);
		$id = PostRequest::get('_id');
		$classModel = new Classes;
		$classModel->update($data, $id);
		return header('Location: http://mvc.local/?controller=class');
	}

	public function destroy()	// xóa dữ liệu
	{
		$id = GetRequest::get('id');
		$classModel = new Classes;
		$classModel->delete($id);
		header('Location: http://mvc.local/?controller=class');
	}
}

 ?>