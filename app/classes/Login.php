<?php 
namespace App;
use App\Database;

class Login{

    public function loginCheck( $data ){
       $username = $data['username'];
       $password = $data['password'];

       $query = "SELECT * FROM users WHERE username='$username' && password='$password'";
       $result = mysqli_query(Database::db_connection(), $query);

        if( $result->num_rows ){
            session_start();
            $_SESSION['username'] = $username;
            header("Location: index.php");
        }else{
            echo "Try again to login";
        }

    }

}

