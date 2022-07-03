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
    <title><?php echo $reports_data['title'];?>
    </title>
    <style>
      .pageTopHead{
        display:none;
      }
      .mainmenua{
        color: #fff !important;
     }
     .mainmenua:hover{
        color: #fff !important;
     }
     #topNav form input {
    width: 300px !important;
    background: transparent;
    color: #fff;
    border: 1px solid #fff;
}
#topNav form button i{
  color:#fff;
}
#topNav form input::placeholder{
  color: #fff  !important;

}
.footer-wrapper{
margin-top: 0 !important;
}
    </style>
</head>
<body>


    <section class="pb-5 formImage pt-5">
        <div class="container ">
          
            <div class="pb-5 pt-5">
                <!-- <h1 class="f25">Post-pandemic Era-Global 2-Phase Switched Reluctance Motor Market (Sales, Revenue, Price, Gross Profit and Competitors Analysis of Major Market) from 2015-2021</h1>
             -->
            </div>
            <div class="row pt-5">
                <div class="col-md-6">
                    <div class="clrfff">
                        <h1 class="f20"><?php echo $reports_data['title'];?></h1>
                        <!-- <ul class="list-unstyled op05 pt-4">
                          <li>
                            <span>Category : Airospace and defence</span>
                            </li>
                            <li><span>Pages : 151</span></li>
                            <li><span>Published date : 21 Feb 2021</span></li>
                          
                            <span></span>
                      
                        </ul> -->
                        <div class="clrfff formsLeftData">
                        <h2 class="pt-4 pb-2 f45"> <span class="f25">Feel free</span> <br> to connect <span class="f25"> with us !</span> </h2>
                        <h3><i class="fa fa-envelope"></i>info@globalinfiresearch.com</h3>
                        <h3><i class="fa fa-phone"></i> +91 987-6543-210</h3>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 bg-prime bx-shadow2">
                    <div class="pt-3 pb-5">
                        <form role="form" id="withCaptchaForm" action="<?php echo base_url('Cust/Controller_Report/sample_request/'.$reports_data['id'])?>" method="post" enctype="multipart/form-data">
                        <?php // echo form_open( base_url('Cust/Controller_Report/sample_request')); ?>
                        
                            <h4 class="f24 text-center clrfff pt-2">SAMPLE REQUEST</h4> 
                            <!-- <h5 class="pt-3 clrfff text-center f16"><?php echo $reports_data['title'];?></h5> -->
                            <!-- <p class="text-center op05 clrfff">ReportID: <?php echo $reports_data['id'];?></p> -->
                            
                            <!--<div id="messages"></div>-->
                            <?php if($this->session->flashdata('success')): ?>
                              <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <?php echo $this->session->flashdata('success'); ?>
                              </div>
                            <?php elseif($this->session->flashdata('error')): ?>
                              <div class="alert alert-error alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <?php echo $this->session->flashdata('error'); ?>
                              </div>
                            <?php endif; ?>

                            <input type="hidden" class="form-control" id="reports_id" name="reports_id" value="<?php echo $reports_data['id'];?>">
                            <input type="hidden" class="form-control" id="type" name="type" value="sample">
                            
                           <div class="input-group mb-2 mr-sm-2 giFromsinputgroup form-group">
                               <div class="input-group-prepend">
                               <div class="input-group-text">
                                   <i class="fa fa-user clrfff"></i>
                               </div>
                               </div>
                               <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Full Name" required>
                           </div>
                           <div class="input-group mb-2 mr-sm-2 giFromsinputgroup">
                               <div class="input-group-prepend">
                               <div class="input-group-text">
                                   <i class="clrfff fa fa-envelope"></i>
                               </div>
                               </div>
                               <input type="text" class="form-control" id="email" name="email" placeholder="Email Id" required>
                           </div>
                           <div class="input-group mb-2 mr-sm-2 giFromsinputgroup">
                               <div class="input-group-prepend">
                               <div class="input-group-text">
                                   <i class="clrfff fa fa-phone"></i>
                               </div>
                               </div>
                               <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
                           </div>
                           <div class="input-group mb-2 mr-sm-2 giFromsinputgroup">
                               <div class="input-group-prepend">
                               <div class="input-group-text">
                                   <i class="clrfff fa fa-university"></i>
                               </div>
                               </div>
                               <input type="text" class="form-control" id="company" name="company" placeholder="Company Name">
                           </div>
                           <div class="input-group giFromsinputgroup">
                                <!--<label for="exampleFormControlSelect1">Example select</label>--> 
                               <div class="input-group-prepend">
                                   <div class="input-group-text">
                                       <i class="clrfff fa fa-clock-o"></i>
                                   </div>
                                   </div>
                               <select class="form-control" id="purchasetime" name="purchasetime">
                                   <option selected>Purchase Time</option>
                                 <option>01 Week</option>
                                 <option>15 Days</option>
                                 <option>01 Month</option>
                                 <option>03 Months</option>
                                 <option>No Purchase , Just Sample</option>

                               </select>
                             </div>
                             <div class="input-group giFromsinputgroup">
                               <div class="input-group-prepend w-100">
                                   <div class="input-group-text">
                                       <i class="clrfff fa fa-comment"></i>
                                   </div>
                                   <textarea class="form-control" id="message" name="message" rows="1" placeholder="Enter Message"></textarea>
                                   </div>
                         </div>
                          
                                <!-- Captcha -->
                                <div id="captchaBackground" class="">
                                    <!-- <div class="d-flex"> -->
                                    <span id="captcha" name="captcha">captcha text</span> 
                                    <!--<input id="captcha" type="text" name="captcha" >-->
                                    <!-- </div> -->
                                    <input id="textBox" type="text" name="textBox" placeholder="ENTER CAPTCHA" required>
                                    <div id="buttons">
                                        <input id="captchasubmit" class="d-none" type="button" value="submit">
                                        <button class="ml-3" id="refresh" type="submit"><i class="fa fa-refresh prime-color"></i></button>
                                    </div> 
                                    <span id="output"></span>
                                </div>
                                <!-- End -->

                                <!--<input type="button" id="withCaptchaSubmit" class="requestSampleSubmit" value="SUBMIT">-->
                                <input type="button" class="requestSampleSubmit" onclick="sampleform()" value="Submit">
                            
                               <!--<input type="submit" class="requestSampleSubmit" value="SUBMIT">-->
                                <?php // echo anchor('Cust/Controller_Report/sample_request/2','SUBMIT',array('class'=>'btn btn-success')); ?>
                        </form>
                         <?php // echo form_close(); ?>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

<!--    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/bootstrap-slider.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/slim.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/script.js"></script>-->

</body>
</html>