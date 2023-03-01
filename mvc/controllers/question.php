<?php
    class Question extends Controller{
        function default() {
            $this->view("main_layout", [
                "Page" => "question",
                "Title" => "Câu hỏi"
            ]);
        }

        function add() {
            $this->view("main_layout", [
                "Page" => "add_question",
                "Title" => "Tạo câu hỏi",
                "Plugin" => [
                    "ckeditor" => 1,
                    "select" => 1
                ],
                "Script" => "add_question"
            ]);
        }

        function edit($id) {
            $this->view("main_layout", [
                "Page" => "add_question",
                "Title" => "Sửa câu hỏi"
            ]);
        }

        function delete($id) {

        }
    }
?>