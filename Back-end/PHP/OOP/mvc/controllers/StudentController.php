<?php
include_once './models/Student.php';

class StudentController
{

    public function __construct()
    {
        if (!Auth::check()) {
            return header('Location: http://mvc.local/?controller=page&action=login');
        }
    }

    public function index() // Danh sách

    {
        $studentModel = new Student;
        $page = GetRequest::get('page') != null ? GetRequest::get('page') : 1;
        $name = GetRequest::get('name') ? GetRequest::get('name') : '';

        $limit = 2;
        $offset = ($page - 1) * $limit;

        $totalStudent = intval($studentModel->countStudent($name));
        $totalPage = ceil($totalStudent / $limit);
        $students = $studentModel->paginateStudent($name, $limit, $offset);
        $paginate = new Pagination($totalPage, $page);
        include './views/student/index.php';
    }

    public function create() // Hiển thị form create

    {
        return View::render('student.create');
    }

    public function store() // Nhận dữ liệu từ form create

    {
        // Validator
        $data = PostRequest::all();
        $rules = [
            'name' => 'required|minlength:5',
            'code' => 'required|number|min:1000|max:20000',
            'phone' => 'required|minlength:10|maxlength:255',
        ];

        $validator = new Validator($data, $rules);
        if ($validator->fail()) {
            FormData::set($data);
            $error = $validator->error();
            FlashMessage::danger($error);
            return header('Location: http://mvc.local/?controller=student&action=create');
        }

        $data = PostRequest::only(['name', 'code', 'phone', 'address', 'dob', 'gender']);
        $studentModel = new Student;
        $studentModel->insert($data);
        // Session::set('flash_message', [
        //     'type' => 'danger',
        //     'message' => 'Tạo mơi sinh viên thất bại'
        // ]);
        //
        FlashMessage::success('Thêm mới sinh viên thành công');
        header('Location: http://mvc.local/?controller=student');
    }

    public function edit() // Hiển thị form edit

    {
        $id = GetRequest::get('id');
        $studentModel = new Student;
        $student = $studentModel->getById($id);
        include './views/student/edit.php';
    }

    public function update() // Nhận dữ liệu từ form edit

    {
        $data = PostRequest::only(['name', 'code', 'phone', 'address', 'dob', 'gender']);
        $id = PostRequest::get('_id');
        $studentModel = new Student;
        $studentModel->update($data, $id);
        return header('Location: http://mvc.local/?controller=student');
    }

    public function destroy() // Xóa dữ liệu

    {
        $id = GetRequest::get('id');
        $studentModel = new Student;
        $studentModel->delete($id);
        header('Location: http://mvc.local/?controller=student');
    }

    public function show() // Hiển thị chi tiết một bản ghi

    {
        # code...
    }

}