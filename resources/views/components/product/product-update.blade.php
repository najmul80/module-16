<div class="modal animated zoomIn" id="update-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Product</h5>
            </div>
            <div class="modal-body">
                <form id="update-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label for="productname">Product Name</label>
                                    <input id="productname" name="productname" value="product name" type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="manufacturername">Manufacturer Name</label>
                                    <input id="manufacturername" name="manufacturername" value="manufacturername" type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="manufacturerbrand">Manufacturer Brand</label>
                                    <input id="manufacturerbrand" name="manufacturerbrand" value="manufacturerbrand" type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="price">Price</label>
                                    <input id="price" name="price" type="text" value="Price" class="form-control">
                                </div>
                           
                                <div class="mb-3">
                                    <label class="control-label">Category</label>
                                    <select class="form-control select2" id="categoryId">
                                        <option selected disabled>Select Categoroy</option>
                                        <option value="FA">Fashion</option>
                                        <option value="EL">Electronic</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="productdesc">Product Description</label>
                                    <textarea class="form-control" id="productdesc" rows="5"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="photo">Product Image</label>
                                    <input id="photo" name="photo" type="file" class="form-control">
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
                <div class="modal-footer">
                    <button id="update-modal-close" class="btn bg-gradient-primary" data-bs-dismiss="modal" aria-label="Close">Close</button>
                    <button onclick="Update()" id="update-btn" class="btn bg-gradient-success" >Update</button>
                </div>
            </div>
        </div>
    </div>
</div>