<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Blog
 *
 * @author U s E r™
 */
class BlogPost {

    public $id;
    public $title;
    public $image_name;
    public $date;
    public $description;
    public $queue;

    public function __construct($id) {

        if ($id) {



            $query = "SELECT `id`,`title`,`image_name`,`description`,`date`,`queue` FROM `blog` WHERE `id`=" . $id;



            $db = new Database();



            $result = mysql_fetch_array($db->readQuery($query));



            $this->id = $result['id'];

            $this->title = $result['title'];

            $this->date = $result['date'];

            $this->image_name = $result['image_name'];

            $this->description = $result['description'];

            $this->queue = $result['queue'];



            return $this;
        }
    }

    public function create() {



        $query = "INSERT INTO `blog` (`title`,`image_name`,`date`,`description`,`queue`) VALUES  ('"
                . $this->title . "','"
                . $this->image_name . "', '"
                . $this->date . "', '"
                . $this->description . "', '"
                . $this->queue . "')";



        $db = new Database();



        $result = $db->readQuery($query);



        if ($result) {

            $last_id = mysql_insert_id();



            return $this->__construct($last_id);
        } else {

            return FALSE;
        }
    }

    public function all() {



        $query = "SELECT * FROM `blog` ORDER BY queue ASC";

        $db = new Database();

        $result = $db->readQuery($query);

        $array_res = array();



        while ($row = mysql_fetch_array($result)) {

            array_push($array_res, $row);
        }



        return $array_res;
    }

    public function update() {



        $query = "UPDATE  `blog` SET "
                . "`title` ='" . $this->title . "', "
                . "`image_name` ='" . $this->image_name . "', "
                . "`date` ='" . $this->date . "', "
                . "`description` ='" . $this->description . "', "
                . "`queue` ='" . $this->queue . "' "
                . "WHERE `id` = '" . $this->id . "'";



        $db = new Database();



        $result = $db->readQuery($query);



        if ($result) {

            return $this->__construct($this->id);
        } else {

            return FALSE;
        }
    }

    public function delete() {


        $this->deletePhotos();

        unlink(Helper::getSitePath() . "upload/blog/" . $this->image_name);



        $query = 'DELETE FROM `blog` WHERE id="' . $this->id . '"';



        $db = new Database();



        return $db->readQuery($query);
    }

    public function deletePhotos() {



        $BLOG_PHOTO = new BlogPhoto(NULL);



        $allPhotos = $BLOG_PHOTO->getBlogPhotosById($this->id);



        foreach ($allPhotos as $photo) {



            $IMG = $BLOG_PHOTO->image_name = $photo["image_name"];

            unlink(Helper::getSitePath() . "upload/blog/gallery/" . $IMG);

            unlink(Helper::getSitePath() . "upload/blog/gallery/thumb/" . $IMG);



            $BLOG_PHOTO->id = $photo["id"];

            $BLOG_PHOTO->delete();
        }
    }

    public function arrange($key, $img) {

        $query = "UPDATE `blog` SET `queue` = '" . $key . "'  WHERE id = '" . $img . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        return $result;
    }

}
