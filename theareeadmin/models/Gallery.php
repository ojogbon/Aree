<?php error_reporting( E_ALL ); ?>
<?php

/**
 *
 */
class  Gallery extends MainModel
{

public function getInfo () {
  $infos = $this->selectALl("gallery_tbl");

  foreach ($infos as $info) {
    // code...
    //echo $info["id"];
  }
}

public function saveGallery($table,$values)
{
    $insert = $this->insertToTables($table,$values);
    if ($insert) {
      // code...
      return $insert;
    }
    return false;
}



public function getAllGallery()
    {
        $sql = "select * from   gallery_tbl";

        $result = $this->db->getAll($sql);
            return $result;
    }

    public function getAllGalleryBySql($sql)
    {
        $result = $this->db->getAll($sql);
            return $result;
    }

    public function getGalleryById($id)
    {
        $sql = "select * from  gallery_tbl where id = '".$id."'";
        $result = $this->db->getOne($sql);
            return $result;
    }

    public function UpdateGallery ($sql){
      $update = $this->UpdateAll($sql);
       $update;
 }

}


 ?>
