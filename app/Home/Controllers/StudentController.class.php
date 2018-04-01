<?php
//定义最终的学生控制器类，并继承基础控制器类
final class StudentController extends BaseController
{
    //显示列表
    public function index()
    {
        //创建学生模型类对象
        $modelObj = FactoryModel::getInstance('StudentModel');
        //获取多行数据
        $arrs = $modelObj->fetchAll();
        //调用视图显示数据
        include VIEW_PATH.'index.html';
    }

    //显示添加的表单
    public function create()
    {
        include VIEW_PATH.'add.html';
    }

    //插入数据
    public function store()
    {
        //获取表单提交值
        $data['name']       = $_POST['name'];
        $data['sex']         = $_POST['sex'];
        $data['age']         = $_POST['age'];
        $data['edu']         = $_POST['edu'];
        $data['salary']  = $_POST['salary'];
        $data['bonus']    = $_POST['bonus'];
        $data['city']      = $_POST['city'];
        //创建模型类对象
        $modelObj = FactoryModel::getInstance('StudentModel');
        if ($modelObj->store($data))
        {
            $this->jump("学生信息添加成功！","?p=Home&c=Student");
        } else {
            $this->jump("学生信息添加失败！","?p=Home&c=Student");
        }
    }

    //显示修改的表单
    public function edit()
    {
        //获取地址栏传递的id
        $id = $_GET['id'];
        //创建模型类对象
        $modelObj = FactoryModel::getInstance('StudentModel');
        //获取指定id的数据
        $arr = $modelObj->fetchOne($id);
        //加载视图文件
        include VIEW_PATH.'edit.html';
    }

    //更新数据
    public function update()
    {
        //获取表单提交值
        $id                              = $_POST['id'];
        $data['name']       = $_POST['name'];
        $data['sex']         = $_POST['sex'];
        $data['age']         = $_POST['age'];
        $data['edu']         = $_POST['edu'];
        $data['salary']  = $_POST['salary'];
        $data['bonus']    = $_POST['bonus'];
        $data['city']      = $_POST['city'];
        //创建模型类对象
        $modelObj = FactoryModel::getInstance('StudentModel');
        if ($modelObj->update($data,$id))
         {
            $this->jump("id={$id}记录更新成功！","?p=Home&c=Student");
        } else {
            $this->jump("id={$id}记录更新失败！","?p=Home&c=Student");
        }
    }

    //删除记录
    public function destroy() {
        //获取地址栏传递的id
        $id = $_GET['id'];
        //创建学生模型类对象
        $modelObj = FactoryModel::getInstance('StudentModel');
        //调用模型类的删除方法
        if ($modelObj->destroy($id))
         {
            $this->jump("id={$id}记录删除成功！","?p=Home&c=Student");
        } else {
            $this->jump("id={$id}记录删除失败！","?p=Home&c=Student");
        }
    }
}