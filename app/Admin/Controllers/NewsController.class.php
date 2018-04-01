<?php
//定义最终的新闻控制器类，并继承基础控制器类
final class NewsController extends BaseController
{
    //显示列表
    public function index()
    {
        //创建新闻模型类对象
        $modelObj = FactoryModel::getInstance('NewsModel');
        //获取多行数据
        $arrs = $modelObj->fetchAll();
        //调用视图显示数据
        include VIEW_PATH.'index.html';
    }

    //删除记录
    public function destroy()
    {
        //获取地址栏传递的id
        $id = $_GET['id'];
        //创建新闻模型类对象
        $modelObj = FactoryModel::getInstance('NewsModel');
        //调用模型类的删除方法
        if ($modelObj->destroy($id))
         {
            $this->jump("id={$id}记录删除成功！","?p=Admin&c=News");
        } else {
            $this->jump("id={$id}记录删除失败！","?p=Admin&c=News");
        }
    }
}