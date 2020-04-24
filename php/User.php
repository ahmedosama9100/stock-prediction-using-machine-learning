<?php
class User
{
    private $Email;
    private $counter;
    private $Password;
    private $gender;
    private $birthday;
    //Empty Constructor
    public function __construct()
    {
    }

    //No Need for it Right now
    /*public function __construct($Email,$counter,$Password,$gender,$birthday){
        $this->Email = $Email;
        $this->counter = $counter;
        $this->Password = $Password;
        $this->gender = $gender;
        $this->birthday = $birthday;
    }*/
    public function set_Signin($Email, $Password)
    {
        $this->Email = $Email;
        $this->Password = $Password;
    }
    public function set_Signup($Email, $counter, $Password, $gender, $birthday)
    {

        $this->Email = $Email;
        $this->counter = $counter;
        $this->Password = $Password;
        $this->gender = $gender;
        $this->birthday = $birthday;
    }
    public function get_Email()
    {
        return $this->Email;
    }
    public function get_counter()
    {
        return $this->counter;
    }
    public function get_Password()
    {
        return $this->Password;
    }
    public function get_gender()
    {
        return $this->gender;
    }
    public function get_birthday()
    {
        return $this->birthday;
    }
}
class ausentication
{
    public function checksignin()
    {
        $objs = new dbuser;
        $obj = new dbuser;
        $objs->set_Signin($_POST['emaili'], $_POST['passwordi']);
        $obj->getuser($_POST['emaili']);
        if ($objs->get_Password() == $obj->get_Password() && $objs->get_Password() != "") {
            return true;
        } else {
            return false;
        }
    }
    public function checksignup()
    {
        $obj = new dbuser;
        $check = $obj->getuser($_POST['Email']);
        echo $check->get_Email();
        if (empty($check->get_Email())) {
            return true;
        } else {
            return false;
        }
    }
}
class UserServices extends ausentication
{
    public function signin()
    {
        if ($this->checksignin()) {
            session_start();
            $_SESSION['email'] = $_POST['emaili'];
            header("location:userpage.php");
        } else {
            echo "Wrong Password or Username !!";
        }
    }

    public function signup()
    {
        $obj = new dbuser;
        if ($this->checksignup()) {
            $obj->set_Signup($_POST['Email'], $_POST['Counter'], $_POST['Password'], $_POST['Gender'], $_POST['Birthday']);
            $r = $obj->saveuser();
            if ($r == 1) {
                echo "signup successully";
            }
        } else {
            echo "there is wrong with connection";
        }
    }
}

class dbuser extends user
{

    public function saveuser()
    {

        $db = mysqli_connect('localhost', 'root', 'POTO', 'stockdb');
        $e = $this->get_Email();
        $p = $this->get_Password();
        $c = $this->get_counter();
        $g = $this->get_gender();
        $b = $this->get_birthday();
        echo $e . " " . $c . " ";
        $query = mysqli_query($db, "INSERT INTO users (Email,Counter,Password,Gender,Birthday) VALUES ('$e','$p','$c','$g','$b')");
        if (!$db) {
            return 0;
        } else {
            return 1;
        }
    }
    public function deleteuser($Email)
    {
        $db = mysqli_connect('localhost', 'root', 'POTO', 'stockdb');
        $query = mysqli_query($db, "DELETE FROM users WHERE email==$Email ");
        if (!$db) {
            return 0;
        } else {
            return 1;
        }
    }

    public function getuser($Email)
    {
        $db = mysqli_connect('localhost', 'root', 'POTO', 'stockdb');
        $query = mysqli_query($db, "SELECT * FROM users Where Email='$Email'");
        $result = mysqli_fetch_array($query);
        $this->set_Signup($result[1], $result[2], $result[3], $result[4], $result[5]);
        return $this;
    }
}
