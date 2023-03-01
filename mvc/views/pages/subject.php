<div class="content">
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Danh sách môn học</h3>
            <div class="block-options">
                <button type="button" class="btn btn-primary me-3" data-bs-toggle="modal" data-bs-target="#modal-add-subject">Thêm mới</button>
                <div class="dropdown">
                    <button type="button" class="btn btn-alt-secondary" id="dropdown-ecom-filters"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Filters <i class="fa fa-angle-down ms-1"></i>
                    </button>
                    <div class="dropdown-menu mt-1 dropdown-menu-end" aria-labelledby="dropdown-ecom-filters">
                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                            href="javascript:void(0)">
                            Pending..
                            <span class="badge bg-black-50 rounded-pill">35</span>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                            href="javascript:void(0)">
                            Processing
                            <span class="badge bg-warning rounded-pill">15</span>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                            href="javascript:void(0)">
                            For Delivery
                            <span class="badge bg-info rounded-pill">20</span>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                            href="javascript:void(0)">
                            Canceled
                            <span class="badge bg-danger rounded-pill">72</span>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                            href="javascript:void(0)">
                            Delivered
                            <span class="badge bg-success rounded-pill">890</span>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                            href="javascript:void(0)">
                            All
                            <span class="badge bg-primary rounded-pill">997</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-content">
            <form action="be_pages_ecom_orders.html" method="POST" onsubmit="return false;">
                <div class="mb-4">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-alt" id="one-ecom-orders-search"
                            name="one-ecom-orders-search" placeholder="Tìm kiếm môn học..">
                        <span class="input-group-text bg-body border-0">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                </div>
            </form>
            <div class="table-responsive">
                <table class="table table-vcenter">
                    <thead>
                        <tr>
                            <th class="text-center">Mã môn</th>
                            <th>Tên môn</th>
                            <th class="d-none d-xl-table-cell text-center">Số câu hỏi</th>
                            <th class="d-none d-sm-table-cell text-center">Số chương</th>
                            <th class="text-center">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center fs-sm"><strong>841464</strong></td>
                            <td>Lập trình Web và ứng dụng nâng cao</td>
                            <td class="d-none d-xl-table-cell text-center fs-sm">20</td>
                            <td class="d-none d-sm-table-cell text-center fs-sm">10</td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html"
                                    data-bs-toggle="tooltip" title="View">
                                    <i class="fa fa-fw fa-eye"></i>
                                </a>
                                <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_order.html"
                                    data-bs-toggle="tooltip" title="Edit">
                                    <i class="fa fa-fw fa-pencil"></i>
                                </a>
                                <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)"
                                    data-bs-toggle="tooltip" title="Delete">
                                    <i class="fa fa-fw fa-times"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <nav aria-label="Photos Search Navigation">
                <ul class="pagination pagination-sm justify-content-end mt-2">
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                            Prev
                        </a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="javascript:void(0)">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">4</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)" aria-label="Next">
                            Next
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-add-subject" tabindex="-1" role="dialog" aria-labelledby="modal-add-subject"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-popin" role="document">
        <div class="modal-content">
            <div class="block block-rounded block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Thêm môn học</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content fs-sm">
                    <div class="mb-3">
                        <label for="" class="form-label">Tên môn học</label>
                        <input type="text" class="form-control" name="subject_name" id="subject_name"
                            placeholder="Nhập tên môn học">
                    </div>
                    <div class="mb-3">
                        <div class="block block-rounded border">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">
                                    Chọn nhóm lớp
                                </h3>
                            </div>
                            <div class="block-content pb-3">
                                <div class="row mb-1" id="list-group">
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="0" id="group-0"
                                                name="ds-grp">
                                            <label class="form-check-label" for="group-0">Khác</label>
                                        </div>
                                    </div>
                                </div>
                                <a class="fw-bold" data-bs-toggle="collapse" href="#collapseExample" role="button"
                                    aria-expanded="false" aria-controls="collapseExample"><i
                                        class="fa fa-fw fa-plus"></i> Thêm nhóm</a>
                                <div class="collapse" id="collapseExample">
                                    <form method="post" class="mt-2">
                                        <div class="row mb-1">
                                            <div class="col-8">
                                                <input type="text" class="form-control" name="name_group"
                                                    id="name_group" placeholder="Nhập tên nhóm">
                                            </div>
                                            <div class="col-4">
                                                <button id="add_group" type="submit" class="btn btn-primary"
                                                    name="add_group">Tạo nhóm</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-content block-content-full text-end bg-body">
                    <button type="button" class="btn btn-sm btn-alt-secondary me-1"
                        data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-sm btn-primary" id="add_class">Lưu</button>
                </div>
            </div>
        </div>
    </div>
</div>