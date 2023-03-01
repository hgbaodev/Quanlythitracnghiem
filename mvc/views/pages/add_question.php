<div class="content">
    <!-- Your Block -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Thêm câu hỏi</h3>
        </div>
        <div class="block-content">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-12">
                    <form action="be_pages_ecom_product_edit.html" method="POST" onsubmit="return false;">
                        <div class="mb-4">
                            <div class="row">
                                <div class="col-4">
                                    <label for="" class="form-label">Môn học</label>
                                    <select class="js-select2 form-select" id="mon-hoc" name="mon-hoc"
                                        style="width: 100%;" data-placeholder="Choose one..">
                                        <option></option>
                                        <option value="1">HTML</option>
                                        <option value="2">CSS</option>
                                        <option value="3">JavaScript</option>
                                        <option value="4">PHP</option>
                                        <option value="5">MySQL</option>
                                        <option value="6">Ruby</option>
                                        <option value="7">Angular</option>
                                        <option value="8">React</option>
                                        <option value="9">Vue.js</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <label class="form-label">Chương</label>
                                    <select class="js-select2 form-select" id="chuong" name="chuong"
                                        style="width: 100%;" data-placeholder="Choose one..">
                                        <option></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <label class="form-label">Độ khó</label>
                                    <select class="js-select2 form-select" id="dokho" name="chuong" style="width: 100%;"
                                        data-placeholder="Choose one..">
                                        <option></option>
                                        <option value="1">Cơ bản</option>
                                        <option value="2">Trung bình</option>
                                        <option value="3">Nâng cao</option>
                                        <option value="4">Khó</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="js-ckeditor">Nội dung câu hỏi</label>
                            <textarea id="js-ckeditor" name="ckeditor">OOP là viết tắt của từ nào ?</textarea>
                        </div>
                        <div class="mb-4 row">
                            <div class="col-6 mb-4">
                                <label class="form-label" for="js-ckeditor-1">Lựa chọn 1</label>
                                <textarea id="js-ckeditor-1" name="ckeditor-1">OOP là viết tắt của từ nào ?</textarea>
                            </div>
                            <div class="col-6 mb-4">
                                <label class="form-label" for="js-ckeditor-2">Lựa chọn 2</label>
                                <textarea id="js-ckeditor-2" name="ckeditor-2">OOP là viết tắt của từ nào ?</textarea>
                            </div>
                            <div class="col-6 mb-4">
                                <label class="form-label" for="js-ckeditor-3">Lựa chọn 3</label>
                                <textarea id="js-ckeditor-3" name="ckeditor-3">OOP là viết tắt của từ nào ?</textarea>
                            </div>
                            <div class="col-6 mb-4">
                                <label class="form-label" for="js-ckeditor-4">Lựa chọn 4</label>
                                <textarea id="js-ckeditor-4" name="ckeditor-4">OOP là viết tắt của từ nào ?</textarea>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="row">
                                <div class="col-2">
                                    <label for="" class="form-label">Câu trả lời đúng</label>
                                </div>
                                <div class="col-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="luachondung" id="luachon-1" value="1">
                                        <label class="form-check-label" for="luachon-1">Lựa chọn 1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="luachondung" id="luachon-2" value="2">
                                        <label class="form-check-label" for="luachon-2">Lựa chọn 2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="luachondung" id="luachon-3" value="3">
                                        <label class="form-check-label" for="luachon-3">Lựa chọn 3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="luachondung" id="luachon-4" value="4">
                                        <label class="form-check-label" for="luachon-4">Lựa chọn 4</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="mb-4">
                            <button type="submit" class="btn btn-alt-primary"><i class="fa fa-fw fa-plus me-1"></i> Lưu câu hỏi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END Your Block -->
</div>