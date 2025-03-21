<div class="container-fluid">
    <div class="row">
    <div class="col-md-12 col-sm-12 col-lg-12">
        <div class="card px-5 py-5">
            <div class="row justify-content-between ">
                <div class="align-items-center col">
                    <h4>Category</h4>
                </div>
                <div class="align-items-center col">
                    <button data-bs-toggle="modal" data-bs-target="#create-modal" class="float-end btn m-0 bg-gradient-primary">Create</button>
                </div>
            </div>
            <hr class="bg-secondary"/>
            <div class="col-sm-4">
                <div class="search-box me-2 mb-2 d-inline-block">
                    <div class="position-relative">
                        <input type="text" class="form-control" placeholder="Search...">
                        <i class="bx bx-search-alt search-icon"></i>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table" id="tableData" >
                    <thead class="text-center">
                    <tr class="bg-light">
                        
                        <th>No</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody id="tableList" class="text-center">
                        <tr>
                            <td>1</td>
                            <td>Category 1</td>
                            <td>
                                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#update-modal"><i class="fa fa-edit font-size-18"></i></button>
                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-modal"><i class="fa fa-trash font-size-18"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>