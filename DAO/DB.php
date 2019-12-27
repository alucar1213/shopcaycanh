<?php
class DB
{
    var $host       = 'localhost';
    var $user       = 'root';
    var $password   = '';
    var $database   = 'quanlycaycanhstore';

    public function ExcuteQuery($sql){
        $connection = new mysqli($this->host, $this->user, $this->password, $this->database) or die('Không thể kết nối database');
        mysqli_set_charset($connection,'UTF8');
        $result = mysqli_query($connection, $sql);
        mysqli_close($connection);
        return $result;
    }
}
?>