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
</head>
<body>


  <section class="pt-5 mt-5">
    <div class="container pt-5 mt-5">
        <!-- For Reports -->
        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb pl-0" style="background-color: transparent;">
                              <li class="breadcrumb-item"><a href="#" class="prime-color ls-1">REPORTS . . .</a></li>
                              <!-- <li class="breadcrumb-item active" aria-current="page">Cryptocurrencies typically operate</li> -->
                            </ol>
                          </nav>
        <?php if(isset($reports_data) && count($reports_data) > 0){?>
        <div class="row">
            <div class="col-sm-12">
                <?php foreach ($reports_data as $report) { ?>

                <div class="rListReport">
                    <div class="row">
                        <div class="col-lg-9 col-md-12 col-sm-12">
                            <a href="<?php echo base_url('reports/'.$report['id'].'/'.$report['slug'])?>">
                                <div class="rListrpTitle">
                                    <h2><?php echo $report['title']?></h2>
                                    <!--<p><?php // echo $report['description']?></p>-->    
                                    <p class="pt-3"><?php echo mb_strimwidth($report['description'], 0, 350, "...");?></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 align-self-center">
                            <div class="rListBtns">
                                <p class="p-0 text-center"><i class="fa fa-dollar text-success pr-1" style="font-size:22px !important;"></i> <span class="f24 font-weight-bold ls-1  text-success"><?php echo $report['singleUserAmount']?></span></p>
                                <a href="#">Buy now</a>
                                <!--<a href="#">Sample request</a>-->
                                <a href="<?php echo base_url('reports/sample/'.$report['id'])?>" style="text-align:center;">Sample request <i class="fa fa-external-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php } ?>
                
            </div>
        </div>
        <hr style="background-color: rgba(0,0,0,.1);">
        <?php } ?>
        <!--  -->
        
        
        <!-- For Blogs -->
        <?php if(isset($blogs_data) && count($blogs_data) > 0){?>
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-12">
                <div class="singleBlog"> 
                    
                          <nav aria-label="breadcrumb">
                            <ol class="breadcrumb pl-0" style="background-color: transparent;">
                              <li class="breadcrumb-item"><a href="#" class="prime-color ls-1">BLOGS . . .</a></li>
                              <!-- <li class="breadcrumb-item active" aria-current="page">Cryptocurrencies typically operate</li> -->
                            </ol>
                          </nav>
                      <?php foreach ($blogs_data as $blog) { ?>
                      <h4 class="prime-color"><?php echo $blog['title']?></h4>
                      <p><i class="fa fa-calendar pr-2"></i><?php echo $blog['created_at']?></p>
                      <div class="pt-3">
                          <!--<p><?php // echo $blog['description']?></p>-->
                            <!--<img src="<?php echo base_url('assets/images/cust/img/static-bg.jpg') ?>" alt="" class="w-100" style="height: 300px;">-->
                          <!--<p><?php // echo $blog['description']?></p>-->
                    </div>
                     <?php } ?>
                </div>
            </div>
          
        </div>
        <hr style="background-color: rgba(0,0,0,.1);">
        <?php } ?>
        <!--  -->
        
        
        <!-- For Press Release -->
        <?php if(isset($pressrelease_data) && count($pressrelease_data) > 0){?>
        
        <div class="row mt-4 pb-5">
            
            <nav aria-label="breadcrumb">
                            <ol class="breadcrumb pl-0" style="background-color: transparent;">
                              <li class="breadcrumb-item"><a href="#" class="prime-color ls-1">PRESS RELEASE . . .</a></li>
                              <!-- <li class="breadcrumb-item active" aria-current="page">Cryptocurrencies typically operate</li> -->
                            </ol>
                          </nav>
            
            <?php
            foreach ($pressrelease_data as $pr) { ?>
                
            <div class="col-lg-4 col-md-6 col-sm-12 pt-5">
              <div class="card" style="">
                <!--<img class="card-img-top" src="<?php echo base_url('assets/images/cust/img/blog.jpg') ?>" alt="Card image cap">-->
                <div class="card-body">
                  <h5 class="card-title">
                    <a href="Controller_PressRelease/details/<?php echo $pr['id']?>"><?php echo $pr['title'];?></a>
                      <p class="op05 f11 pt-2"><i class="fa fa-calendar pr-2"></i><span><?php echo $pr['created_at'];?></span> </p>
                  </h5>
                  <!--<p class="card-text"><?php // echo $pr['description'];?></p>-->
                </div>
              </div>
            </div>
            <?php } ?>
    
          </div>
        <?php } ?>
          <!--  -->
    </div>
  </section>

<!--</div>-->
<!--  -->
<hr style="background-color: rgba(0,0,0,.1);">

</body>
</html>