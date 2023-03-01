<?php
class Subject extends Controller{
    public function default()
    {
        $this->view("main_layout",[
            "Page" => "subject",
            "Title" => "Quản lý môn học"
        ]);
    }
}

?>