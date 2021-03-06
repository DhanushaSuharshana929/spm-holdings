<?php

include_once(dirname(__FILE__) . '/../../class/include.php');
 
if (isset($_POST['create'])) {

    $PRODUCT = new Product(NULL);
    $VALID = new Validator();
 
    $PRODUCT->name = $_POST['name'];
    $PRODUCT->type = $_POST['type'];
    $PRODUCT->short_description = $_POST['short_description'];
    $PRODUCT->description = $_POST['description'];

    $dir_dest = '../../upload/product/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 372;
        $handle->image_y = 277;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $PRODUCT->image_name = $imgName;
    $PRODUCT->create();

    $result = ["id" => $PRODUCT->id];
    echo json_encode($result);
    exit();
}

if (isset($_POST['update'])) {
    $dir_dest = '../../upload/product/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $_POST ["oldImageName"];
        $handle->image_x = 372;
        $handle->image_y = 277;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $PRODUCT = new Product($_POST['id']);

    $PRODUCT->image_name = $_POST['oldImageName'];
    $PRODUCT->name = $_POST['name'];
    $PRODUCT->short_description = $_POST['short_description'];
    $PRODUCT->description = $_POST['description'];
     $PRODUCT->type = $_POST['type'];
    $PRODUCT->update();
    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}

if (isset($_POST['save-data'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $PRODUCT = Product::arrange($key, $img);

        header('Location:../arrange-products.php?message=9');
    }
}