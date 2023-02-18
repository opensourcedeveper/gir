<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="2-Phase Switched Reluctance Motor Market to depict the global industry dynamics covering type, size, application, growth analysis, and other factors that are affecting the market">
    <meta name="keywords" content="2-Phase Switched Reluctance Motor Market">
<!--    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">-->
    <title>Cotact us
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
        <div class="container pt-3">
            <!-- <nav aria-label="breadcrumb">
                <ol class="breadcrumb bgtrans pl-0">
               
                </ol>
            </nav> -->
            <div class="pb-5 mt-5"></div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="clrfff formsLeftData">
                        <h3>Hemoconcentrators Market Information With Prominent players, Production, Consumption, Revenue, Price and Forecasts to 2027</h3>
                        <span>Industry - Helthcare & Medical</span>
                        <hr class='d-none d-md-block mt-5'>
                        <h1 class="pb-0 pb-md-5 f45"> <span class="f25">Feel free</span> <br> to connect <span class="f25"> with us !</span> </h1>
                        <h2><i class="fa fa-envelope"></i><span>info@globalinfiresearch.com</span></h2>
                        <h2 class='pb-5 pb-md-0'><i class="fa fa-phone"></i><span> +91 987-6543-210</span></h2>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="p-5 bg-prime bx-shadow2">
                        <form role="form" id="withCaptchaForm" action="<?php echo base_url('contact-us')?>" method="post" enctype="multipart/form-data">
                        <?php // echo form_open( base_url('Cust/Controller_Report/contactus_request')); ?>
                        <?php // echo form_open( base_url('contact-us')); ?>
                        
                            <h4 class="f24 text-center clrfff">CONTACT US</h4> 
                            
               
                            
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

                            <!--<input type="hidden" class="form-control" id="reports_id" name="reports_id" value="<?php // echo $reports_data['id'];?>">-->
                            <input type="hidden" class="form-control" id="type" name="type" value="contact">
                            
                           <div class="input-group mb-2 mr-sm-2 giFromsinputgroup form-group">
                               
                               <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Full Name" required>
                           </div>
                           <div class="input-group mb-2 mr-sm-2 giFromsinputgroup">
                               
                               <input type="text" class="form-control" id="email" name="email" placeholder="Email Id" required>
                           </div>
                           <div class="input-group mb-2 mr-sm-2 giFromsinputgroup">
                               
                               <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
                           </div>
                           <div class="input-group mb-2 mr-sm-2 giFromsinputgroup">
                               
                               <input type="text" class="form-control" id="company" name="company" placeholder="Company Name">
                           </div>
<!--                           <div class="input-group giFromsinputgroup">
                               <div class="input-group-prepend">
                                   <div class="input-group-text">
                                       <i class="clrfff fa fa-clock-o"></i>
                                   </div>
                                   </div>
                               <select class="form-control" id="purchasetime" name="purchasetime">
                                   <option selected>Purchase Time</option>
                                 <option>0-1 Week</option>
                                 <option>1-3 Week</option>
                                 <option>3-5 Week</option>
                                 <option>No Purchase , Just Sample</option>

                               </select>
                             </div>-->
                             <div class="input-group giFromsinputgroup">
                                <textarea class="form-control" id="message" name="message" rows="1" placeholder="Enter Message"></textarea>
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
                                <input type="button" class="requestSampleSubmit" onclick="form1()" value="Submit">
                                <!--<button id="withCaptchaSubmit" class="requestSampleSubmit" value="SUBMIT">Submit</button>-->
                                <?php // echo anchor('Cust/Controller_Report/contactus_request','SUBMIT',array('class'=>'btn btn-success')); ?>
                                <?php // echo anchor('contact-us','SUBMIT',array('class'=>'btn btn-success')); ?>
                        </form>
                         <?php // echo form_close(); ?>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <script>
 

    </script>

<!--    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/bootstrap-slider.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/slim.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/script.js"></script>-->

</body>
</html>