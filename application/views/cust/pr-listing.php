<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="./css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="./css/style.css">
    <title>GI Research</title>
    <style>
        
        .pthTitle{
            display: none;
        }
        .secHead h1{
          margin-top: 151px;
        }
    </style>
</head>
<body>
  <!-- <nav class="navbar navbar-expand-lg gi-nav" id="navbar">
    <a class="navbar-brand" href="index.html">
      <img src="./img/logo.jpeg" alt="" class="navlogo">
    </a>
    <button class="navbar-toggler" type="button" data-trigger="#main_nav">
      <span class="navbar-toggler-icon"><i class="fa fa-bars"></i> </span>
    </button>
    <div class="navbar-collapse" id="main_nav">
      <div class="offcanvas-header mt-3">  
        <button class="btn btn-close float-right" style="font-size: 32px;"> &times </button>
        <h5 class="py-2 text-white">Main navbar</h5>
      </div>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"> <a class="nav-link" href="index.html">HOME </a> </li>
        <li class="nav-item"><a class="nav-link" href="all-report.html"> REPORTS </a></li>
        <li class="nav-item"><a class="nav-link" href="categories.html"> CATEGORY </a></li>
        <li class="nav-item"><a class="nav-link" href="blog-listing.html"> MEDIA </a></li>
        <li class="nav-item"><a class="nav-link" href="about.html"> ABOUT </a></li> 
        <li class="nav-item"><a class="nav-link" href="contact.html"> CONTACT </a></li>
      </ul>
    </div>
  </nav> -->
<!--  -->
<div class="mxwidth4 mt-4">
  <div class="secHead pb-2">
  <h1 class="">Press Release</h1>
  </div>
</div>
<?php
$pr_cnt = count($pressrelease_data);

if($pr_cnt > 0) {?>

  <section class="prList pt-5">
    <div class="container">
      <!-- <a href="index.html">Home</a>
    <h2 class="sec-head prime-color ls_1 mt-2 pb-5">Press Release</h2> -->
    <div class="row mb-4 pRListSinglebg">
        <div class="col-md-4">
            <img src="<?php echo base_url($pressrelease_data[0]['image']) ?>" alt="" class="w-100">
        </div>
        <div class="col-md-8 align-self-center">
            <div>
               <!--<h4> <a href="<?php // echo base_url('press-release/'.$pressrelease_data[0]['id'].'/'.$pressrelease_data[0]['slug'])?>" class="pb-4"><?php // echo $pressrelease_data[0]['title']?></a></h4>-->
               <h4> <a href="<?php echo base_url('press-release/'.$pressrelease_data[0]['slug'])?>" class="pb-4"><?php echo $pressrelease_data[0]['title']?></a></h4>
                <p class="op05 f11 pt-2"><i class="fa fa-calendar pr-2"></i><span><?php echo $pressrelease_data[0]['created_at']?></span> </p>
                <p><?php echo mb_strimwidth($pressrelease_data[0]['description'], 0, 350, "...");?></p>
            </div>
        </div>
    </div>
      <?php if($pr_cnt > 1) {?>
    <hr style="background-color: rgba(0,0,0,.1);">
    <div class="row mt-4 pb-5">
      <div class="col-lg-6 col-md-6 col-sm-12 pt-5">
        <div class="card pRListSinglebg" style="">
          <img class="card-img-top" src="<?php echo base_url($pressrelease_data[1]['image']) ?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">
              <!--<a href="<?php // echo base_url('press-release/'.$pressrelease_data[1]['id'].'/'.$pressrelease_data[1]['slug'])?>"><?php // echo $pressrelease_data[1]['title']?></a>-->
              <a href="<?php echo base_url('press-release/'.$pressrelease_data[1]['slug'])?>"><?php echo $pressrelease_data[1]['title']?></a>
              <p class="op05 f11 pt-2"><i class="fa fa-calendar pr-2"></i><span><?php echo $pressrelease_data[1]['created_at']?></span> </p>
            </h5>
            <p class="card-text"><?php echo mb_strimwidth($pressrelease_data[1]['description'], 0, 350, "...");?></p>
          
          </div>
        </div>
      </div>
        <?php if($pr_cnt > 2) {?>
      <div class="col-lg-6 col-md-6 col-sm-12 pt-5">
          <div class="card pRListSinglebg" style="">
            <img class="card-img-top" src="<?php echo base_url($pressrelease_data[2]['image']) ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">
                <!--<a href="<?php // echo base_url('press-release/'.$pressrelease_data[2]['id'].'/'.$pressrelease_data[2]['slug'])?>"><?php // echo $pressrelease_data[2]['title']?></a>-->
                <a href="<?php echo base_url('press-release/'.$pressrelease_data[2]['slug'])?>"><?php echo $pressrelease_data[2]['title']?></a>
                <p class="op05 f11 pt-2"><i class="fa fa-calendar pr-2"></i><span><?php echo $pressrelease_data[2]['created_at']?></span> </p>
              </h5>
              <p class="card-text"><?php echo mb_strimwidth($pressrelease_data[2]['description'], 0, 350, "...");?></p>
            
            </div>
          </div>
        </div>
        <?php } ?>
    </div>
    <?php } ?>
    <?php if($pr_cnt > 3) {?>
    
    <div class="row mt-4 pb-5">
        <?php
        $i = 0;
        foreach ($pressrelease_data as $pr) { 
            $i++;
            if($i <= 3){  continue; }
            ?>
        <div class="col-lg-4 col-md-6 col-sm-12 pt-5">
          <div class="card pRListSinglebg" style="">
            <img class="card-img-top" src="<?php echo base_url($pr['image']) ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">
                <!--<a href="<?php // echo base_url('press-release/'.$pr['id'].'/'.$pr['slug'])?>"><?php // echo $pr['title'];?></a>-->
                <a href="<?php echo base_url('press-release/'.$pr['slug'])?>"><?php echo $pr['title'];?></a>
                  <p class="op05 f11 pt-2"><i class="fa fa-calendar pr-2"></i><span><?php echo $pr['created_at'];?></span> </p>
              </h5>
              <p class="card-text"><?php echo mb_strimwidth($pr['description'], 0, 350, "...");?></p>            
            </div>
          </div>
        </div>
        <?php } ?>
     <?php } ?>
      </div>
    </div>
  </section>
<!--  <nav aria-label="...">
    <ul class="pagination" style="width: max-content;margin: 0 auto;">
      <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1">Previous</a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item active">
        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
      </li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#">Next</a>
      </li>
    </ul>
  </nav>-->
<?php } ?>
</body>
</html>