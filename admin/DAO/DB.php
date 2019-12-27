<?php
    class Database{
        var $host       = 'localhost';
        var $user       = 'root';
        var $password   = '';
        var $database   = 'quanlycaycanhstore';

        public function ExecuteQuery($sql){
            $connection = new mysqli($this->host, $this->user, $this->password, $this->database) or die('Không thể kết nối database');
            mysqli_set_charset($connection,'UTF8');
            $result     = mysqli_query($connection, $sql);
            mysqli_close($connection);
            return $result;
        }

        public function num_rows($sql){

            $connection = new mysqli($this->host, $this->user, $this->password, $this->database) or die('Không thể kết nối database');
            mysqli_set_charset($connection,'UTF8');

            $query = mysqli_query($connection, $sql);

            if($query){
                $row = mysqli_num_rows($query);
                mysqli_close($connection);
                return $row;
            }
            mysqli_close($connection);

        }
    }
