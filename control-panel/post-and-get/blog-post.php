<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

if (isset($_POST['create'])) {

    $BLOG_POST = new BlogPost(NULL);
    $VALID = new Validator();

    $BLOG_POST->title = $_POST['title'];
    $BLOG_POST->date = $_POST['date'];
    $BLOG_POST->description = $_POST['description'];

    $dir_dest = '../../upload/blog-post/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 740;
        $handle->image_y = 480;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $BLOG_POST->image_name = $imgName;
    $BLOG_POST->create();

    $result = ["id" => $BLOG_POST->id];
    echo json_encode($result);
    exit();
}

if (isset($_POST['update'])) {
    $dir_dest = '../../upload/blog-post/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $_POST ["oldImageName"];
        $handle->image_x = 740;
        $handle->image_y = 480;
        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $BLOG_POST = new BlogPost($_POST['id']);

    $BLOG_POST->image_name = $_POST['oldImageName'];
    $BLOG_POST->title = $_POST['title'];
    $BLOG_POST->date = $_POST['date'];
    $BLOG_POST->description = $_POST['description'];

    $BLOG_POST->update();
    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}

if (isset($_POST['save-data'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $BLOG_POST = BlogPost::arrange($key, $img);

        header('Location:../arrange-blog-post.php?message=9');
    }
}