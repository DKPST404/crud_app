<?php

namespace App\Controllers;

use App\Models\StudentModel;
use CodeIgniter\Controller;

class StudentController extends Controller
{
    protected $studentModel;

    public function __construct()
    {
        $this->studentModel = new StudentModel();
    }

    public function index()
    {
        $data['students'] = $this->studentModel->findAll();
        return view('students/index', $data);
    }

    public function create()
    {
        return view('students/create');
    }

    public function store()
    {
        $this->studentModel->save([
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'address' => $this->request->getPost('address'),
        ]);
        return redirect()->to('/students');
    }

    public function edit($id)
    {
        $data['student'] = $this->studentModel->find($id);
        return view('students/edit', $data);
    }

    public function update($id)
    {
        $this->studentModel->update($id, [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'address' => $this->request->getPost('address'),
        ]);
        return redirect()->to('/students');
    }

    public function delete($id)
    {
        $this->studentModel->delete($id);
        return redirect()->to('/students');
    }
}
