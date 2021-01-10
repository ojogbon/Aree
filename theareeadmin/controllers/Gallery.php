<?php

/**
 *  this is the controller method for inserting all gallery
 * into the database (table name = 	gallery).
 * it check key value for auth, then also test for fields emptiness, then
 * send to mainModel for the real insertion. this method
 * then return success or failure after all process.
 * @param $gallery
 * @param $key
 * @param $galleryTitle
 * @param $galleryDescription
 * @param $galleryImage
 * @param $staff_id 
 * @param $category_id
 * @param $price
 ***/

function insertGallery($gallery,$key, $staff_id, $galleryTitle,$galleryImage){

    if ($key == "1234567opiuyt") {

        if (isEmpty([$galleryTitle,$galleryImage])){
            echo "<div class='alert alert-danger'><b>Fields can't be empty!</b>   Please fill and try again</div>";
        }else{
                $uploaded = uploadImage ($galleryImage,"./loadedImage/");
              if ( $uploaded[0] !== "TRUE" ){
                        echo $uploaded;
              }else{
                  $added = addslashes($galleryTitle);
                    if($gallery->saveGallery("  `gallery_tbl`(`id`, `staff_id`, `title`, `upload`, `path`, `date`, `status`, `delete`)",
                        "VALUES (null,'$staff_id','$added','$uploaded[1]','$uploaded[2]'
                        ,now(),'0','0')")){
    
                            echo "<div class='alert alert-success'><b> Congratulations!</b>  Pohto Uploaded successfully! </div>";
                    }else{
    
                           echo "<div class='alert alert-danger'><b> We are very Sorry, Something happened! </b>   Please try again</div>";
                    }
              }
              
         
        }
    }
}
