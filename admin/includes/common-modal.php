<!-- update product modal start -->
<div class="modal fade theme-modal view-modal" id="update-product-modal" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg ">
        <div class="modal-content">
            <div class="modal-header p-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <form class='theme-form theme-form-2 mega-form' id='update-product-data'>
                    <div id="edit-product-data"></div>
                    <div id='success_response'></div>
                    <div class='mt-5 d-flex justify-content-end'>
                        <button type='submit' class='btn btn-solid'> Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- update product modal end -->


<!-- add product category modal start -->
<div class="modal fade theme-modal view-modal" id="add-category-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md ">
        <div class="modal-content">
            <div class="modal-header p-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body pt-5 pb-4">
                <form class='theme-form theme-form-2 mega-form' id='add-categories'>
                    <div class="mb-4 row align-items-center">
                        <label class="form-label-title col-sm-3 mb-0">Category</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" placeholder="Category Name" id="product_category">
                        </div>
                    </div>
                    <div id="category-success-response"></div>
                    <div class="text-end">
                        <button class="category_submit_button">submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- update product category modal start -->
<div class="modal fade theme-modal view-modal" id="update-category-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md ">
        <div class="modal-content">
            <div class="modal-header p-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body pt-5 pb-4">
                <form class='theme-form theme-form-2 mega-form' id='update-category'>
                    <div id="edit-category-data"></div>
                    <div id="category-success-response"></div>
                    <div class="text-end">
                        <button class="category_submit_button">submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- add product subcategory modal start -->
<div class="modal fade theme-modal view-modal" id="add-subcategory-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-md ">
        <div class="modal-content">
            <div class="modal-header p-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body pt-5 pb-4">
                <form class='theme-form theme-form-2 mega-form' id='add-subategories'>
                    <div class="mb-4 row align-items-center">
                        <label class="form-label-title col-sm-3 mb-0">Sub Category</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" placeholder="Sub Category Name" id="product_sub_category">
                        </div>
                    </div>
                    <div class="mb-4 row align-items-center">
                        <label
                            class="col-sm-3 col-form-label form-label-title">Parent Categories</label>
                        <div class="col-sm-9">
                            <select class="js-example-basic-single w-100"
                                id="display_parent_categories">
                            </select>
                        </div>
                    </div>

                    
                    <div id="subcategory-success-response"></div>
                    <div class="text-end">
                        <button type="submit" class="category_submit_button" >submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- update product sub category modal start -->
<div class="modal fade theme-modal view-modal" id="update-sub-category-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md ">
        <div class="modal-content">
            <div class="modal-header p-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body pt-5 pb-4">
                <form class='theme-form theme-form-2 mega-form' id='update-sub-category'>
                    <div id="edit-sub-category-data"></div>

                    <div class="text-end">
                        <button class="category_submit_button">submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

