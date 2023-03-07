<?php
use PhpOffice\PhpWord\Element\AbstractContainer;
use PhpOffice\PhpWord\Element\Text;
use PhpOffice\PhpWord\IOFactory as WordIOFactory;

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

        public function addfile()
        {
            $this->view("main_layout", [
                "Page" => "add_question_from_file",
                "Title" => "Tạo câu hỏi",
                "Plugin" => [
                    "ckeditor" => 1,
                    "select" => 1
                ],
                "Script" => "add_file_docx"
            ]);
        }


        function edit($id) {
            $this->view("main_layout", [
                "Page" => "add_question",
                "Title" => "Sửa câu hỏi",
                "Plugin" => [
                    "ckeditor" => 1,
                    "select" => 1
                ],
                "Script" => "add_question"
            ]);
        }

        public function xulyDocx()
        {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                require_once 'vendor/autoload.php';
                $filename = $_FILES["fileToUpload"]["tmp_name"];
                $objReader = WordIOFactory::createReader('Word2007');
                $phpWord = $objReader->load($filename);
                $text = '';

                function getWordText($element) {
                    $result = '';
                    if ($element instanceof AbstractContainer) {
                        foreach ($element->getElements() as $element) {
                            $result .= getWordText($element);
                        }
                    } elseif ($element instanceof Text) {
                        $result .= $element->getText();
                    }

                    return $result;
                }

                foreach ($phpWord->getSections() as $section) {
                    foreach ($section->getElements() as $element) {
                        $text .= trim(getWordText($element));
                        $text .= "\\n";
                    }
                }

                $text = rtrim($text, "\\n");
                substr($text,-1);

                $questions = explode("\\n\\n",$text);
                $arrques = array();
                for($i = 0; $i < count($questions); $i++) {
                    $data = explode("\\n", $questions[$i]);
                    $arrques[$i]['question'] = trim($data[0]);
                    $arrques[$i]['answer'] = ord(trim(substr($data[count($data) - 1],8))) - 65 + 1;
                    $arrques[$i]['option'] = array();
                    for($j = 1; $j < count($data) - 1; $j++) {
                        $arrques[$i]['option'][] = trim(substr($data[$j],3));
                    }
                }

                echo json_encode($arrques);
            }
        }
    }
?>