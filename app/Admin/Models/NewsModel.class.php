<?php
//定义最终的新闻模型类，并继承基础模型类
final class NewsModel extends BaseModel
{
    //获取多行数据
    public function fetchAll()
    {
        //构建查询的SQL语句
        $sql = "select * from news order by nid desc";
        //执行SQL语句，并返回结果（二维数组）
        return $this->db->fetchAll($sql);
    }

    //删除一条记录
    public function destroy($id)
    {
        //构建删除的SQL语句
        $sql = "delete  from news where nid={$id}";
        //执行SQL语句，并返回结果（布尔值）
        return $this->db->exec($sql);
    }

}