<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller {
    public function index(){
        return view('modules.customer.index');
    }
    public function create() {
        return view('modules.customer.create');
    }
    public function show($id){
        return view('modules.customer.show');
    }
    public function edit($id){
        return view('modules.customer.edit');
    }
    public function delete($id){
        return view('modules.customer.delete');
    }
}