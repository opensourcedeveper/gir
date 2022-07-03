<!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">   rg for Local PC -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>var $j = jQuery.noConflict(true);</script>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Add New Reports
      
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Reports</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-12 col-xs-12">

        <div id="messages"></div>

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


        <div class="box">
         
          <!-- /.box-header -->
          <form role="form" action="<?php base_url('reports/create') ?>" method="post" enctype="multipart/form-data">
             <!--<div class="box-body">-->

                <?php // echo validation_errors(); ?>
                  <?php if(validation_errors()): ?>
                    <div class="alert alert-error alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <?php echo validation_errors(); ?>
                    </div>
                  <?php endif; ?>

     
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
           
            <!-- /.card-header -->
            <div class="card-body pad">

<!--              <div class="mb-3">
                <div class="form-group">
                  <label for="reportId">ID:</label>
                  <input type="text" class="form-control" id="reportId" placeholder="Report ID" disabled>
                </div>
              </div>-->

              <div class="mb-3">
                <div class="form-group">
                  <label for="reportTitle">TITLE:</label>
                  <input type="text" class="form-control" id="reportTitle" name="reportTitle" placeholder="Enter Report Title">
                </div>
              </div>

<!--            <div class="mb-3">
                <div class="form-group">
                  <label for="slug">URL SLUG:</label>
                  <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter url slug">
                </div>
              </div>-->
            
              <div class="mb-3">
                <div class="form-group">
                  <label for="catSelect">CATEGORY:</label>
                  <select class="form-control" id="catSelect" name="catSelect">
                      <?php foreach ($category as $k => $v): ?>
                        <option value="<?php echo $v['id'] ?>"><?php echo $v['name'] ?></option>
                      <?php endforeach ?>
                  </select>
                </div>
              </div>

              <div class="mb-3">
                <label for="reportDescription">DESCRIPTION:</label>
                <textarea class="form-control ckeditor" placeholder="Place some text here" id="reportDescription" name="reportDescription"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </div>

              <div class="mb-3">
                <label for="tableOfContent">TOC:</label>
                <textarea class="form-control ckeditor" placeholder="Place some text here" id="tableOfContent" name="tableOfContent"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </div>

              <div class="mb-3">
              <div class="form-group">
                <label>PUBLISHED DATE:</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                      </span>
                    </div>
                    <input type="date" class="form-control float-right" id="dateOfPublished" name="dateOfPublished">
                    <!--<input type="date" id="myDate" value="2014-02-09">-->
                  </div>
              </div>
            </div>

              <div class="mb-3">
                <div class="form-group">
                  <label for="reportPages">NUMBER OF PAGES:</label>
                  <input type="number" class="form-control" id="reportPages" name="reportPages" placeholder="Enter Number of Pages">
                </div>
              </div>

              <div class="mb-3">
                <label for="reportPages">SINGLE USER(RS):</label>
                <!--<div class="input-group">-->
              
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fas fa-dollar-sign"></i>
                    </span>
                  </div>
               
                <input type="number" class="form-control" id="singleUserAmount" name="singleUserAmount" placeholder="Enter amount in Rupees(rs)">
<!--                  <div class="input-group-append">
                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                  </div>-->
                <!--</div>-->
              </div>

              <div class="mb-3">
                <label for="reportPages">ENTERPRISE EDITION:</label>
                <!--<div class="input-group">-->
              
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fas fa-dollar-sign"></i>
                    </span>
                  </div>
               
                  <input type="number" class="form-control" id="enterpriceEditionAmount" name="enterpriceEditionAmount" placeholder="Enter amount in Rupees(rs)" >
<!--                  <div class="input-group-append">
                    <div class="input-group-text"><i class="fas fa-users"></i></div>
                  </div>-->
                <!--</div>-->
              </div>
            
              <div class="mb-3">
                <div class="form-group">
                  <label for="reportStatus">STATUS:</label>
                  <select class="form-control" id="reportStatus" name="reportStatus">
                    <option selected>Published</option>
                    <!-- <option>Ongoing</option> -->
                   
                  </select>
                </div>
              </div>

              <div class="mb-3">
                <div class="form-group">
                  <label for="reportmetaTitle">META TITLE:</label>
                  <input type="text" class="form-control" id="reportmetaTitle" name="reportmetaTitle" placeholder="Enter Meta Title">
                </div>
              </div>

              <div class="mb-3">
                <div class="form-group">
                  <label for="reportmetaDescription">META DESCRIPTION:</label>
                  <input type="text" class="form-control" id="reportmetaDescription" name="reportmetaDescription" placeholder="Enter Meta Description">
                </div>
              </div>

              <div class="mb-3">
                <div class="form-group">
                  <label for="reportmetaKeyword">META KEYWORD:</label>
                  <input type="text" class="form-control" id="reportmetaKeyword" name="reportmetaKeyword" placeholder="Enter Meta Keyword">
                </div>
              </div>

              <div class="mb-3">
                <div class="form-group">
                  <label for="reporturlKeyword">URL KEYWORD:</label>
                  <input type="text" class="form-control" id="reporturlKeyword" name="reporturlKeyword" placeholder="Enter Url Keyword">
                </div>
              </div>




            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
 
      <!-- ./row -->
<!--      <div class="text-center mt-2 p-4">
        <button type="submit" class="btn btn-success">ADD REPORT</button>
        </div>-->
      
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save Changes</button>
                <a href="<?php echo base_url('Controller_Reports/') ?>" class="btn btn-warning">Back</a>
              </div>
           
      </form>
        
          <hr>
          
          <form enctype="multipart/form-data" action="../reports/bulkupload" method="post" role="form">
            <div class="form-group">
            <label for="exampleInputFile">File Upload</label>
            <input type="file" name="file" id="file" size="150">
            <!--<p class="help-block">Only Excel/CSV File Import.</p>-->
            <p class="help-block">Only .CSV File Import.</p>
            </div>
            <button type="submit" class="btn btn-default" name="submit" value="submit">Upload</button>
          </form>
          
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- col-md-12 -->
    </div>
    <!-- /.row -->
    

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script type="text/javascript">
  $(document).ready(function() {
    $(".select_group").select2();
    $("#description").wysihtml5();

    $("#mainReportsNav").addClass('active');
    $("#addReportsNav").addClass('active');
    
    var btnCust = '<button type="button" class="btn btn-secondary" title="Add picture tags" ' + 
        'onclick="alert(\'Call your custom code here.\')">' +
        '<i class="glyphicon glyphicon-tag"></i>' +
        '</button>'; 
    $("#product_image").fileinput({
        overwriteInitial: true,
        maxFileSize: 1500,
        showClose: false,
        showCaption: false,
        browseLabel: '',
        removeLabel: '',
        browseIcon: '<i class="glyphicon glyphicon-folder-open"></i>',
        removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
        removeTitle: 'Cancel or reset changes',
        elErrorContainer: '#kv-avatar-errors-1',
        msgErrorClass: 'alert alert-block alert-danger',
        // defaultPreviewContent: '<img src="/uploads/default_avatar_male.jpg" alt="Your Avatar">',
        layoutTemplates: {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
        allowedFileExtensions: ["jpg", "png", "gif"]
    });

  });
</script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
