<?php
 include "./theareeadmin/controllers/Central.php";
  ?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php 
    $companyName = "Aree";
    echo $companyName." "." | Our Gallery"?></title>
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">     
    <link rel="stylesheet" href="css/template-style.css">
    <link rel="icon" href="img/logo.jpg" type="image/jpeg" sizes="16x16">
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>      
  </head>
  
  <body class="size-1140">
  	<!-- PREMIUM FEATURES BUTTON -->
  	<a target="_blank" class="hide-s" href="../template/eleganter-premium-responsive-business-template/" style="position:fixed;top:120px;right:-14px;z-index:10;"><img src="img/premium-features.png" alt=""></a>
    <!-- HEADER -->
    <?php include "includes/head.php"; ?>
    
    <!-- MAIN -->
    <main role="main">
      <!-- Content -->
      <article>
        <header class="section background-dark">
          <div class="line">        
            <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">Gallery</h1>
            <p class="margin-bottom-0 text-size-16">Our Inner Beauty.</p>
          </div>  
        </header>
        
        <div class="section background-white"> 
          <div class="line">
            <div class="margin">

            <?php 
                $sql_Query = "select * from gallery_tbl order by id desc";
                $listOfGallery = $gallery->getAllGalleryBySql($sql_Query);

                foreach($listOfGallery as $photo => $value){
            ?>
              <div class="s-12 m-6 l-4">
                <div class="image-with-hover-overlay image-hover-zoom margin-bottom">
                  <div class="image-hover-overlay background-primary"> 
                    <div class="image-hover-overlay-content text-center padding-2x">
                      <p><?php echo $listOfGallery[$photo]["title"]?></p>  
                    </div> 
                  </div> 
                  <img src="<?php echo "./theareeadmin/loadedImage/".$listOfGallery[$photo]["upload"]?>" alt="" title="Portfolio Image 1" />
                </div>	
              </div>
              
              <?php } ?>
            </div>  
          </div>
        </div> 
      </article>
    </main>
    
    <!-- FOOTER -->
    <?php  include "includes/foot.php"; ?>
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script>
  </body>
</html>