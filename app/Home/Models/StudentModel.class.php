<?php
//定义最终的学生模型类，并继承基础模型类
final class StudentModel extends BaseModel
{
    //获取单个数据
    public function fetchOne($id)
    {
        //构建查询的SQL语句
        $sql = "select * from student where id = {$id} limit 1";
        //执行SQL语句，并返回结果（一维数组）
        return $this->db->fetchOne($sql);
    }

    //获取多行数据
    public function fetchAll()
    {
        //构建查询的SQL语句
        $sql = "select * from student order by id desc";
        //执行SQL语句，并返回结果（二维数组）
        return $this->db->fetchAll($sql);
    }

    //插入数据
    public function store($data)
    {
        //构建插入的SQL语句
        $sql = "insert into  student values (null,'{$data['name']}','{$data['sex']}',{$data['age']},'{$data['edu']}',{$data['salary']},{$data['bonus']},'{$data['city']}')";
        //执行SQL语句，并返回结果（布尔值）
        return $this->db->exec($sql);
    }

    //更新数据
    public function update($data,$id)
    {
        //构建“name=value”更新字符串
        $str = '';
        foreach ($data as $key => $value) {
            $str .= "$key='$value',";
        }
        //去除字符串结尾的逗号
        $str = rtrim($str,',');

        //构建更新的SQL语句
        $sql = "update student set {$str} where id={$id}";
        //执行SQL语句，并返回结果（布尔值）
        return $this->db->exec($sql);
    }

    //删除一条记录
    public function destroy($id)
    {
        //构建删除的SQL语句
        $sql = "delete  from student where id={$id}";
        //执行SQL语句，并返回结果（布尔值）
        return $this->db->exec($sql);
    }

}