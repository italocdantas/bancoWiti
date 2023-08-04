<?php

class Usuario{

    public function login($email,$senha){
        global $conn;

        $sql = "SELECT * FROM pessoas WHERE email = :email AND senha = :senha";
        $sql = $conn->prepare($sql);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":senha", $senha);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dado = $sql->fetch();

          $_SESSION['usu'] = $dado['id'];

          return true;
          
        }
            return false;
        
    }

        public function logged($id){
            global $conn;

            $array = array();

            $sql = "SELECT * FROM pessoas WHERE id = :id";
            $sql = $conn->prepare($sql);
            $sql -> bindValue(":id", $id);
            $sql-> execute();


            if($sql->rowCount() > 0){
                $array = $sql->fetch(PDO::FETCH_ASSOC);
               
            }
           

            return $array;
        

        }
    }






?>