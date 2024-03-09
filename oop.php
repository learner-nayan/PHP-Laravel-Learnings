<?php

class User{
    public $username;
    public $email;
    public $password;

    public function __construct($username, $email, $password) {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    public function getUsername(){
        return $this->username;
    }
}

class Teacher extends User{
    public $teacher_id;
    public function __construct($username, $email, $password, $teacher_id) {
        parent::__construct($username,$email,$password);
        $this->teacher_id = $teacher_id;
    }

    public function getTeacherId(){
        return "\n".$this->teacher_id;
        // return "\n".parent::getUsername();
    }
}

$newUser = new User("nayan","nayan@khanal","123");
echo $newUser->getUsername();

$new_teacher = new Teacher("nayan","nayan@khanal","123",77);
echo $new_teacher->getTeacherId();
