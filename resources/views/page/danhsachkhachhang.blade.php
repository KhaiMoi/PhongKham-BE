@extends('vuexy.master')
@section('noi_dung')
    <div class="container">
        <button class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal3"> THEM MOI</button>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <b>DANH SACH KHACH HANG</b>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">Ten Khach Hang </th>
                                    <th class="text-center">So Dien Thoai</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Dia Chi</th>
                                    <th class="text-center">Tinh Trang</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Nguyen Quoc Long</th>
                                    <td>0398 339 524</td>
                                    <td>helloword@gmail.com</td>
                                    <td>32 Xuan Dieu</td>
                                    <td>
                                        <button class="btn btn-warning">Tam Tat</button>
                                    </td>
                                    <td class="text-nowrap">
                                        <button class="btn btn-success " data-bs-toggle="modal"
                                            data-bs-target="#exampleModal1">Cap Nhat</button>
                                        <button class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal2">Xoa</button>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Nguyen Quoc Long</th>
                                    <td>0398 339 524</td>
                                    <td>helloword@gmail.com</td>
                                    <td>32 Xuan Dieu</td>
                                    <td>
                                        <button class="btn btn-warning">Tam Tat</button>
                                    </td>
                                    <td class="text-nowrap">
                                        <button class="btn btn-success " data-bs-toggle="modal"
                                            data-bs-target="#exampleModal1">Cap Nhat</button>
                                        <button class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal2">Xoa</button>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Nguyen Quoc Long</th>
                                    <td>0398 339 524</td>
                                    <td>helloword@gmail.com</td>
                                    <td>32 Xuan Dieu</td>
                                    <td>
                                        <button class="btn btn-warning">Tam Tat</button>
                                    </td>
                                    <td class="text-nowrap">
                                        <button class="btn btn-success " data-bs-toggle="modal"
                                            data-bs-target="#exampleModal1">Cap Nhat</button>
                                        <button class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal2">Xoa</button>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Nguyen Quoc Long</th>
                                    <td>0398 339 524</td>
                                    <td>helloword@gmail.com</td>
                                    <td>32 Xuan Dieu</td>
                                    <td>
                                        <button class="btn btn-warning">Tam Tat</button>
                                    </td>
                                    <td class="text-nowrap">
                                        <button class="btn btn-success " data-bs-toggle="modal"
                                            data-bs-target="#exampleModal1">Cap Nhat</button>
                                        <button class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal2">Xoa</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card">
                                            <div class="card-header">
                                                <b>Cap Nhat Khach Hang</b>
                                            </div>
                                            <div class="card-body">
                                                <div class="mt-2">
                                                    <label>Ten Khach Hang</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="mt-2">
                                                    <label>So Dien Thoai</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="mt-2">
                                                    <label>Dia Chi</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="mt-2">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="mt-2">
                                                    <label>Tinh Trang</label>
                                                    <select class="form-control">
                                                        <option value="0">Hoat Dong</option>
                                                        <option value="1">Tat</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="alert alert-warning" role="alert">
                                            Ban Co Chac Chan Muon Xoa
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card">
                                            <div class="card-header">
                                                <b>Them Moi Khach Hang</b>
                                            </div>
                                            <div class="card-body">
                                                <div class="mt-2">
                                                    <label>Ten Khach Hang</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="mt-2">
                                                    <label>So Dien Thoai</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="mt-2">
                                                    <label>Dia Chi</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="mt-2">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="mt-2">
                                                    <label>Tinh Trang</label>
                                                    <select class="form-control">
                                                        <option value="0">Hoat Dong</option>
                                                        <option value="1">Tat</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
