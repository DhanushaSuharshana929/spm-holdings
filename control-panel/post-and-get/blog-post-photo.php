<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

if (isset($_POST['create'])) {

    $BLOG_PHOTOS = new BlogPhoto(NULL);
    $VALID = new Validator();

    $BLOG_PHOTOS->blog = $_POST['id'];
    $BLOG_PHOTOS->caption = $_POST['caption'];


    $dir_dest = '../../upload/blog-post/gallery/';
    $dir_dest_thumb = '../../upload/blog-post/gallery/thumb/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;
    $img = Helper::randamId();

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $img;
        $handle->image_x = 900;
        $handle->image_y = 500;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }


        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $img;
        $handle->image_x = 90;
        $handle->image_y = 90;

        $handle->Process($dir_dest_thumb);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $BLOG_PHOTOS->image_name = $imgName;

    $VALID->check($BLOG_PHOTOS, [
        'caption' => ['required' => TRUE],
        'image_name' => ['required' => TRUE]
    ]);

    if ($VALID->passed()) {
        $BLOG_PHOTOS->create();

        if (!isset($_SESSION)) {
            session_start();
        }
        $VALID->addError("Your data was saved successfully", 'success');
        $_SESSION['ERRORS'] = $VALID->errors();

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {

        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['ERRORS'] = $VALID->errors();

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}

if (isset($_POST['update'])) {

    $dir_dest = '../../upload/blog-post/gallery/';
    $dir_dest_thumb = '../../upload/blog-post/gallery/thumb/';
    
   $handle = new Upload($_FILES['image']);



    $img = $_POST ["oldImageName"];



    if ($handle->uploaded) {

        $handle->image_resize = true;

        $handle->file_new_name_body = TRUE;

        $handle->file_overwrite = TRUE;

        $handle->file_new_name_ext = FALSE;

        $handle->image_ratio_crop = 'C';

        $handle->file_new_name_body = $img;

        $handle->image_x = 900;
        
        $handle->image_y = 500;



        $handle->Process($dir_dest);



        if ($handle->processed) {

            $info = getimagesize($handle->file_dst_pathname);

            $img = $handle->file_dst_name;

        }





        $handle->image_resize = true;

        $handle->file_new_name_body = TRUE;

        $handle->file_overwrite = TRUE;

        $handle->file_new_name_ext = FALSE;

        $handle->image_ratio_crop = 'C';

        $handle->file_new_name_body = $img;

        $handle->image_x = 90;

        $handle->image_y = 90;



        $handle->Process($dir_dest_thumb);



        if ($handle->processed) {

            $info = getimagesize($handle->file_dst_pathname);

            $img = $handle->file_dst_name;

        }

    }

    $BLOG_PHOTOS = new BlogPhoto($_POST['id']);

    $BLOG_PHOTOS->image_name = $_POST['oldImageName'];
   
    $BLOG_PHOTOS->caption = $_POST['caption'];

    $VALID = new Validator();
    $VALID->check($BLOG_PHOTOS, [
        'caption' => ['required' => TRUE],
        'image_name' => ['required' => TRUE]
    ]);

    if ($VALID->passed()) {
        $BLOG_PHOTOS->update();

        if (!isset($_SESSION)) {
            session_start();
        }
        $VALID->addError("Your changes saved successfully", 'success');
        $_SESSION['ERRORS'] = $VALID->errors();

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {

        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['ERRORS'] = $VALID->errors();

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}

if (isset($_POST['save-data'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $BLOG_PHOTOS = BlogPhoto::arrange($key, $img);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}