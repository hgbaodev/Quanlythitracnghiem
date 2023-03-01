<?php
class NguoiDungModel extends DB{
    
    public function insert($fullname, $email, $password)
    {
        $password = password_hash($password,PASSWORD_DEFAULT);
        $sql = "INSERT INTO `nguoidung`(`email`, `hoten`, `matkhau`, `ngaysinh`, `trangthai`) VALUES ('$email','$fullname','$password','2000-01-01',1)";
        $check = true;
        $result = mysqli_query($this->con, $sql);
        if(!$result) {
            $check = false;
        }
        return json_encode($check);
    }

    public function changePassword($email,$new_password)
    {
        $new_password = password_hash($new_password,PASSWORD_DEFAULT);
        $sql = "UPDATE `nguoidung` SET `matkhau`='$new_password' WHERE `email` = '$email'";
        $check = true;
        $result = mysqli_query($this->con, $sql);
        if(!$result) {
            $check = false;
        }
        return json_encode($check);
    }
}
?>