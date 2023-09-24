$(document).ready(function () {
    displayData();
    display_categories_data();
    display_subcategories_data();
    display_parent_categories();
})

function displayData() {
    var displayData = "true";
    $.ajax({
        url: "model/display-data.php",
        type: "POST",
        data: { displaySend: displayData },
        success: function (data, status) {
            $('#displayProductData').html(data);
        }
    })
}

$("#product-form").on("submit", function (e) {
    e.preventDefault();
    var product_title = $('#product_title').val();
    var product_category = $('#product_category').val();
    var product_subcategory = $('#product_subcategory').val();
    var product_brand = $('#product_brand').val();
    var product_unit = $('#product_unit').val();
    var product_quantity = $('#product_quantity').val();
    var product_tag = $('#product_tag').val();
    var product_refund = $('#product_refund').val();
    var product_discription = myClassicEditor.getData();
    var product_img1 = $("#product_img1")[0].files[0];
    var product_img2 = $("#product_img2")[0].files[0];
    var product_img3 = $("#product_img3")[0].files[0];
    var product_img4 = $("#product_img4")[0].files[0];
    var product_weight = [];
    $.each($("input[type='checkbox']:checked"), function () {
        product_weight.push($(this).val());
    });
    var product_manufacturing = $('#product_manufacturing').val();
    var product_price = $('#product_price').val();
    var product_meta_title = $('#product_meta_title').val();
    var product_meta_keyword = $('#product_meta_keyword').val();
    var product_meta_desc = $('#product_meta_desc').val();
    var product_url = $('#product_url').val();

    var data = new FormData();
    data.append('product_title', product_title);
    data.append('product_category', product_category);
    data.append('product_subcategory', product_subcategory);
    data.append('product_brand', product_brand);
    data.append('product_unit', product_unit);
    data.append('product_quantity', product_quantity);
    data.append('product_tag', product_tag);
    data.append('product_refund', product_refund);
    data.append('product_discription', product_discription);
    data.append('product_img1', product_img1);
    data.append('product_img2', product_img2);
    data.append('product_img3', product_img3);
    data.append('product_img4', product_img4);
    data.append('product_weight', product_weight);
    data.append('product_manufacturing', product_manufacturing);
    data.append('product_price', product_price);
    data.append('product_meta_title', product_meta_title);
    data.append('product_meta_keyword', product_meta_keyword);
    data.append('product_meta_desc', product_meta_desc);
    data.append('product_url', product_url);
    $.ajax({
        url: "model/insert.php",
        type: "POST",
        data: {
            product_title: product_title, product_category: product_category, product_subcategory: product_subcategory,
            product_brand: product_brand, product_unit: product_unit, product_quantity: product_quantity,
            product_tag: product_tag, product_refund: product_refund, product_discription: product_discription,
            product_img1: product_img1, product_img2: product_img2, product_img3: product_img3, product_img4: product_img4,
            product_weight: product_weight, product_manufacturing: product_manufacturing, product_price: product_price,
            product_meta_title: product_meta_title, product_meta_keyword: product_meta_keyword, product_meta_desc: product_meta_desc,
            product_url: product_url
        },
        cache: false,
        contentType: false,
        processData: false,
        data: data,
        success: (data) => {
            // console.log(data);
            if (data == 1) {
                $("#product-form").trigger("reset");
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: '<span style="font-size:27px"> Product Added Successfully !</span>',
                    showConfirmButton: false,
                    timer: 3500
                })
            } else if (data == 2) {
                alert("Image Size is so large");
            } else if (data == 3) {
                alert("invalid image extention");
            } else {
                // alert(" ");
            }
        }
    })


});

$(document).on("click", '#edit-product', function () {
    const id = $(this).data("id");
    // alert(id);
    $.ajax({
        url: "model/display-data.php",
        type: "POST",
        data: { id: id },
        success: (data) => {
            displayData();
            $("#edit-product-data").html(data);
        }
    })
});

$("#update-product-data").on("submit", function (e) {
    e.preventDefault();
    var id = $('#update_id').val();
    var update_product_title = $('#update_product_title').val();
    var update_product_category = $('#update_product_category').val();
    var update_product_subcategory = $('#update_product_subcategory').val();
    var update_product_brand = $('#update_product_brand').val();
    var update_product_unit = $('#update_product_unit').val();
    var update_product_quantity = $('#update_product_quantity').val();
    var update_product_tag = $('#update_product_tag').val();
    var update_product_refund = $('#update_product_refund').val();
    var update_product_discription = myClassicEditor.getData();
    var old_file1 = $("#old_file1").val();
    var new_file1 = $("#new_file1")[0].files[0];
    var old_file2 = $("#old_file2").val();
    var new_file2 = $("#new_file2")[0].files[0];
    var old_file3 = $("#old_file3").val();
    var new_file3 = $("#new_file3")[0].files[0];
    var old_file4 = $("#old_file4").val();
    var new_file4 = $("#new_file4")[0].files[0];
    // var update_product_img2 = $("#update_product_img2")[0].files[0];
    // var update_product_img3 = $("#update_product_img3")[0].files[0];
    // var update_product_img4 = $("#update_product_img4")[0].files[0];
    var update_product_manufacturing = $('#update_product_manufacturing').val();
    var update_product_price = $('#update_product_price').val();
    var update_meta_title = $('#update_meta_title').val();
    var update_meta_keyword = $('#update_meta_keyword').val();
    var update_meta_desc = $('#update_meta_desc').val();

    console.log(update_product_category);

    var data = new FormData();
    data.append('id', id);
    data.append('update_product_title', update_product_title);
    data.append('update_product_category', update_product_category);
    data.append('update_product_subcategory', update_product_subcategory);
    data.append('update_product_brand', update_product_brand);
    data.append('update_product_unit', update_product_unit);
    data.append('update_product_quantity', update_product_quantity);
    data.append('update_product_tag', update_product_tag);
    data.append('update_product_refund', update_product_refund);
    data.append('update_product_discription', update_product_discription);
    data.append('old_file1', old_file1);
    data.append('new_file1', new_file1);
    data.append('old_file2', old_file2);
    data.append('new_file2', new_file2);
    data.append('old_file3', old_file3);
    data.append('new_file3', new_file3);
    data.append('old_file4', old_file4);
    data.append('new_file4', new_file4);
    data.append('update_product_manufacturing', update_product_manufacturing);
    data.append('update_product_price', update_product_price);
    data.append('update_meta_title', update_meta_title);
    data.append('update_meta_keyword', update_meta_keyword);
    data.append('update_meta_desc', update_meta_desc);



    $.ajax({
        url: "model/update.php",
        type: "POST",
        data: {
            id: id, update_product_title: update_product_title, update_product_category: update_product_category,
            update_product_subcategory: update_product_subcategory, update_product_brand: update_product_brand,
            update_product_unit: update_product_unit, update_product_quantity: update_product_quantity,
            update_product_tag: update_product_tag, update_product_refund: update_product_refund,
            update_product_discription: update_product_discription, old_file1: old_file1, new_file1: new_file1,
            old_file2: old_file2, new_file2: new_file2, old_file3: old_file3, new_file3: new_file3, old_file4: old_file4, new_file4: new_file4,
            update_product_manufacturing: update_product_manufacturing, update_product_price: update_product_price,
            update_meta_title: update_meta_title, update_meta_keyword: update_meta_keyword, update_meta_desc: update_meta_desc
        },
        cache: false,
        contentType: false,
        processData: false,
        data: data,
        success: function (data) {
            if (data == 1) {
                $("#update-product-modal").modal("hide");
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: '<span style="font-size:27px"> Product updated Successfully !</span>',
                    showConfirmButton: false,
                    timer: 3500
                })
                displayData();
            } else if (data == 2) {
                alert("File is so large");
            } else {
                alert("Something woring");
            }
        }
    })

})

$(document).on("click", "#delete-product", function () {
    const id = $(this).data("id");

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "model/delete.php",
                type: "POST",
                data: { deleteId: id },
                success: (data) => {
                    if (data == 1) {
                        displayData();
                    } else {
                        alert("something wrong");
                    }
                }
            })
            Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
            )
        }
    })

})

$(document).ready(function () {
    function loadData(type, category_id) {
        $.ajax({
            url: "load-cs.php",
            type: "POST",
            data: { type: type, id: category_id },
            success: function (data) {
                if (type == "subcatData") {
                    $("#product_subcategory").html(data);
                } else {
                    $("#product_category").append(data);
                }

            }
        });
    }

    loadData();

    $("#product_category").on("change", function () {
        var category = $("#product_category").val();

        if (category != "") {
            loadData("subcatData", category);
        } else {
            $("#product_subcategory").html('');
        }
    })
});


// categories script start
function display_categories_data() {
    var displayData = "true";
    $.ajax({
        url: "model/display-data.php",
        type: "POST",
        data: { display_categories: displayData },
        success: function (data, status) {
            $('#display_categories_data').html(data);
        }
    })
}

$("#add-categories").on("submit", function (e) {
    e.preventDefault();
    var category = $('#product_category').val();

    var data = new FormData();
    data.append('category', category);
    if ($('#product_category').val() != '') {
        $.ajax({
            url: "model/insert.php",
            method: "POST",
            data: { category: category },
            cache: false,
            contentType: false,
            processData: false,
            data: data,
            success: (data) => {
                // console.log(data);
                if (data == 1) {
                    $("#add-categories").trigger("reset");
                    $('#add-category-modal').modal('hide');
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: '<span style="font-size:27px"> Category Inserted Successfully !</span>',
                        showConfirmButton: false,
                        timer: 3500
                    })
                    display_categories_data();
                } else {
                    $("#category-success-response").html("Not Inserted")
                }
            }
        })

    }


});

$(document).on("click", '#edit-category', function () {
    const id = $(this).data("id");
    // alert(id);
    $.ajax({
        url: "model/display-data.php",
        type: "POST",
        data: { categoryId: id },
        success: (data) => {
            display_categories_data();
            $("#edit-category-data").html(data);
        }
    })
});

$("#update-category").on("submit", function (e) {
    e.preventDefault();
    var category_id = $('#update-cat-id').val();
    var update_product_category = $('#update_product_category').val();
    var data = new FormData();
    data.append('category_id', category_id);
    data.append('update_product_category', update_product_category);
    $.ajax({
        url: "model/update.php",
        type: "POST",
        data: {
            category_id: category_id, update_product_category: update_product_category
        },
        cache: false,
        contentType: false,
        processData: false,
        data: data,
        success: function (data) {
            if (data == 1) {
                $("#update-category-modal").modal("hide");
                $('#add-category-modal').modal('hide');
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: '<span style="font-size:27px"> Category Updated Successfully !</span>',
                    showConfirmButton: false,
                    timer: 3500
                })
                display_categories_data();
            } else {
                alert("Something woring");
            }
        }
    })

})

$(document).on("click", "#delete-category", function () {
    const id = $(this).data("id");
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!" + ' "' + id.slice(2) + '"',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "model/delete.php",
                type: "POST",
                data: { category_delete_id: id },
                success: (data) => {
                    if (data == 1) {

                        display_categories_data();
                    } else {
                        alert("something wrong");
                    }
                }
            })
            Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
            )
        }
    })
})

// subcategories start
function display_subcategories_data() {
    var displayData = "true";
    $.ajax({
        url: "model/display-data.php",
        type: "POST",
        data: { display_subcategories: displayData },
        success: function (data, status) {
            $('#display_subcategories_data').html(data);
        }
    })
}

function display_parent_categories() {
    var displayData = "true";
    $.ajax({
        url: "model/display-data.php",
        type: "POST",
        data: { parent_categories: displayData },
        success: function (data, status) {
            $('#display_parent_categories').html(data);
            // $('#update_parent_categories').html(data);
        }
    })
}

$("#add-subategories").on("submit", function (e) {
    e.preventDefault();
    var sub_category = $('#product_sub_category').val();
    var parent_category = $('#display_parent_categories').val();

    var data = new FormData();
    data.append('sub_category', sub_category);
    data.append('parent_category', parent_category);

    $.ajax({
        url: "model/insert.php",
        method: "POST",
        data: { sub_category: sub_category, parent_category: parent_category },
        cache: false,
        contentType: false,
        processData: false,
        data: data,
        success: (data) => {
            // console.log(data);
            if (data == 1) {
                $("#add-subategories").trigger("reset");
                $('#add-subcategory-modal').modal('hide');
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: '<span style="font-size:27px"> Sub Category Inserted Successfully !</span>',
                    showConfirmButton: false,
                    timer: 3500
                })
                display_subcategories_data();
            } else {
                $("#category-success-response").html("Not Inserted")
            }
        }
    })
});

$(document).on("click", '#edit-sub-category', function () {
    const id = $(this).data("id");
    // alert(id);
    $.ajax({
        url: "model/display-data.php",
        type: "POST",
        data: { sub_cat_id: id },
        success: (data) => {
            display_categories_data();
            $("#edit-sub-category-data").html(data);
        }
    })
});


$(document).on("click", '#delete-subcategory', function () {
    const id = $(this).data("id");
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!" + ' "' + id.slice(2) + '"',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "model/delete.php",
                type: "POST",
                data: { subcategory_delete_id: id },
                success: (data) => {
                    if (data == 1) {
                        display_subcategories_data()
                    } else {
                        alert("something wrong");
                    }
                }
            })
            Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
            )
        }
    })


})






