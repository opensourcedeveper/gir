<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="2-Phase Switched Reluctance Motor Market to depict the global industry dynamics covering type, size, application, growth analysis, and other factors that are affecting the market">
    <meta name="keywords" content="2-Phase Switched Reluctance Motor Market">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Post-pandemic Era-Global 2-Phase Switched Reluctance Motor Market (Sales, Revenue, Price, Gross Profit and Competitors Analysis of Major Market) from 2015-2026
    </title>
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
<div class="mxwidth4 mt-4">
  <div class="secHead pb-2">
  <h1 class="">REPORTS</h1>
  </div>
</div>

<section class="reportTitle pb-5" >

      <div class="container">
        <!--<p class="f20 op05 text-center pb-3 pt-3 pl-4 bg-fff">Select Industry</p>-->
      <div class="row rpListSelectInd">
      <div class="col-md-12 text-center">
          <div class="rplistsel">
              <a href="<?php echo base_url('reports')?>"> <i class="fa fa-book"></i>  All Reports</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="rplistsel">
              <a href="<?php echo base_url('reports/1')?>"> <i class="fa fa-plane"></i> <span>  Airospace and defence</span></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="rplistsel">
              <a href="<?php echo base_url('reports/2')?>"> <i class="fa fa-automobile"></i> <span>  Automotive and Transportation</span></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="rplistsel">
              <a href="<?php echo base_url('reports/3')?>"> <i class="fa fa-wrench"></i> <span>  Construction and Manufacturing</span></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="rplistsel">
              <a href="<?php echo base_url('reports/4')?>"> <i class="fa fa-cart-arrow-down"></i> <span>  Consumer Goods</span></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="rplistsel">
              <a href="<?php echo base_url('reports/5')?>"> <i class="fa fa-bolt"></i> <span> Energy and Power</span></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="rplistsel">
              <a href="<?php echo base_url('reports/6')?>"> <i class="fa fa-glass"></i> <span> Food and Beverages</span></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="rplistsel">
              <a href="<?php echo base_url('reports/7')?>"> <i class="fa fa-camera"></i> <span> ICT Media</span></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="rplistsel">
              <a href="<?php echo base_url('reports/8')?>"> <i class="fa fa-cog"></i> <span>  Machinery and Equipment</span></a>
          </div>
        </div>
         <div class="col-md-4">
           <div class="rplistsel">

                  <a href="<?php echo base_url('reports/9')?>"> <i class="fa fa-flask"></i> <span>  Materials and Chemicals</span></a>
              </div>
        </div> 
        <div class="col-md-4">
          <div class="rplistsel">
              <a href="<?php echo base_url('reports/10')?>"> <i class="fa fa-ambulance"></i> <span>  Pharmaceuticals and Healthcare</span></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="rplistsel">
              <a href="<?php echo base_url('reports/11')?>"> <i class="fa fa-fax"></i> <span>  Semiconductor and Electronics</span></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="rplistsel">
              <a href="<?php echo base_url('reports/12')?>"> <i class="fa fa-briefcase"></i> <span> Business Opportunities</span></a>
          </div>
        </div>
      </div>
    </div>
</section>



    
<div class="container rpList">
    <?php if(isset($reports_data) && count($reports_data) > 0) { ?>
  <div class="row pt-5 pb-5">
    <div class="col-md-12 col-sm-12">
        <div>
            <div class="row" id="listReports">
                <div class="col-sm-12">
                    
                    <?php foreach ($reports_data as $report) { ?>

                    <div class="rListReport">
                        <div class="row">
                            <div class="col-lg-9 col-md-12 col-sm-12">
                                <!--<a href="<?php // echo base_url('reports/'.$report['id'].'/'.$report['slug'])?>">-->
                                <a href="<?php echo base_url('report/'.$report['slug'])?>">
                                    <div class="rListrpTitle">
                                        <h2><?php echo $report['title']?></h2>
                                        <!--<p><?php // echo $report['description']?></p>-->
                                        <span class="op05">Category: <?php echo $report['category_name']?></span>
                                        <!--<span>Category: <?php // echo date('Y-m-d', strtotime($report['dateOfPublished']));?></span>-->
                                        <!--<span>Category: <?php echo date('d-m-Y', strtotime($report['dateOfPublished']));?></span>-->
                                        <p class="pt-3"><?php echo mb_strimwidth($report['description'], 0, 350, "...");?></p>
                                    </div>
                                </a>
                                <!--echo date('Y-m-d', strtotime($date));-->
                            </div>
                            <div class="col-lg-3 col-md-12 col-sm-12 align-self-center">
                                <div class="rListBtns">
                                    
                                    <p class="p-0 text-center"><i class="fa fa-dollar prime-color pr-1" style="font-size:22px !important;"></i> <span class="f24 font-weight-bold ls-1 prime-color"><?php echo $report['singleUserAmount']?></span></p>
                                    <!--<a href="<?php // echo base_url('reports/sample/'.$report['id'])?>">Buy now</a>-->
                                    <a href="<?php echo base_url('buy-now/'.$report['id'])?>">Buy now</a>
                                    <!--<a href="<?php // echo base_url('reports/sample/'.$report['id'])?>">Sample request</a>-->
                                     <a href="<?php echo base_url('request-sample/'.$report['id'])?>">Sample request</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <?php } ?>
                    
                </div>
                <nav class="w-100 pt-3">
                  <ul class="pagination justify-content-center pagination-sm">
                  </ul>
              </nav>
            </div>
<!--            <div class="row pt-4">
               
                <div class="col pt-4">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination rlistPagination mr-auto justify-content-center">
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                              <span class="sr-only">Previous</span>
                            </a>
                          </li>
                          <li class="page-item"><a class="page-link " href="#">1</a></li>
                          <li class="page-item"><a class="page-link active" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item"><a class="page-link" href="#">...</a></li>
                          <li class="page-item"><a class="page-link" href="#">125</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                              <span class="sr-only">Next</span>
                            </a>
                          </li>
                        </ul>
                      </nav>
                </div>
            </div>-->

        </div>
    
</div>
  </div>
    
    <?php } else{?>
    <div class="row pt-5 pb-4">
      <div class="col-sm-12">
          <div class="text-center rListContact pb-5">
              <!--<h3>Didn't find anything !</h3>-->
              <h4  class="pb-3">No Reports Available for selected Category</h4>
              <!--<a href="contact-us.html">Contact us</a>-->
          </div>
      </div>
  </div>
<?php }?>
    
  <!--  -->
    <div class="container pt-5 pb-5 mt-5">
  <div class="text-center requote">
  
   <!-- <a href="<?php echo base_url('contact-us') ?>" class="clrfff ls-1"> -->
        <div class="container">
          <div class="row">
  
          <div class="col-lg-9 col-md-12 ">
          <div class="d-flex">
          
          
              <i class="fa fa-phone pr-2"></i>
              <div class="text-left" style="margin: auto 0;">
                <h4 class="pl-0"><span>NEED ASSISTANCE ON ANY REPORT</span> </h4> 
                <span>Contact our analyst for free consultation on report</span> 
              </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-12 align-self-center">
                <a href="<?php echo base_url('contact-us') ?>">CONTACT US</a>
          </div>
          </div>
        </div>
   
    <!-- </a> -->
    </div>
</div>

</div>

    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/bootstrap-slider.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/slim.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>