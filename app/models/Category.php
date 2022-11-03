<?php

namespace MVC\models;

use MVC\core\model;

class Category extends model
{
    public function getAllCategory(){
        $categorys = model::db()->rows("SELECT * FROM category");
        return $categorys;
    }
    public function getCategory($id){
        $category = model::db()->row("SELECT * FROM category WHERE `id`=$id");
        return $category;
    }
    public function addCategory($data){
        $data=model::db()->insert("category",$data);
        return $data;
    }
    public function updateCAtegory($data,$id){
        $data=model::db()->update("category",$data,$id);
        return $data;
    }
    public function deleteCategory($id){
        $data=model::db()->delete("category",['id' => $id]);
        return $data;
    }
}