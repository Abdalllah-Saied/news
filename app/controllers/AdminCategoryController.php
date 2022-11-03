<?php

namespace MVC\controllers;

use MVC\core\controller;
use MVC\core\Helpers;
use MVC\core\Session;
use MVC\models\Category;

class AdminCategoryController extends controller
{
    public $user_data;
    public $category;
    public function __construct()
    {
        Session::Start();
        $this->user_data=Session::Get('user');
        if(empty($this->user_data)){
            echo'class not access';
            die;
        }
        $this->category=new Category();
    }
    public function index(){
        $data=$this->category->getAllCategory();
        $this->view('back/category',['title'=>'Categorys','categorys'=>$data]);

    }
    public function addCategory(){
        $this->view('back/addCategory',['title'=>'Add Category']);
    }
    public function postAddCategory(){
        $image=$_FILES['image'];
        //var_dump($image);die;
        move_uploaded_file($image['tmp_name'],'image/'.$image['name']);
        foreach ($this->user_data as $data){}
        $data=['name'=>$_POST['categoryname'],'icon'=>$_POST['icon'],'user_id'=>$data["id"],'img'=>$image['name']];
        $data=$this->category->addCategory($data);
        if($data){
            Helpers::redirect('admincategory/index');
        }
    }
    public function delete($id){
        $data=$this->category->deleteCategory($id);
        if($data){
            Helpers::redirect('admincategory/index');
        }
    }
    public function update($id){
        $data=$this->category->getCategory($id);
        $this->view('back/updateCategory',['title'=>'Update Category','category'=>$data]);
    }
    public function postUpdateCategory(){
        if (!empty($_FILES['image']['name'])){
            $image=$_FILES['image'];
            move_uploaded_file($image['tmp_name'],'image/'.$image['name']);
            foreach ($this->user_data as $data){}
            $data=['name'=>$_POST['categoryname'],'icon'=>$_POST['icon'],'user_id'=>$data["id"],'img'=>$image['name']];
        }else{
            foreach ($this->user_data as $data){}
            $data=['name'=>$_POST['categoryname'],'icon'=>$_POST['icon'],'user_id'=>$data["id"]];
        }
        $id=['id'=>$_POST['id']];
        $data=$this->category->updateCAtegory($data,$id);
        if($data){
            Helpers::redirect('admincategory/index');
        }else{
            var_dump($data);die;
            Helpers::redirect('admincategory/index');
        }
    }


}