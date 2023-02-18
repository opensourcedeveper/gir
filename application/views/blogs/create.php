<!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">   //rg for Local PC -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>var $j = jQuery.noConflict(true);</script>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Add New Blogs
      
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Blogs</li>
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
          <form role="form" action="<?php base_url('blogs/create') ?>" method="post" enctype="multipart/form-data">
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

              <div class="mb-3">
                <div class="form-group">
                  <label for="blogTitle">TITLE:</label>
                  <input type="text" class="form-control" id="blogTitle" name="blogTitle" placeholder="Enter blog Title">
                </div>
              </div>
                
<!--              <div class="mb-3">
                <div class="form-group">
                  <label for="slug">SLUG:</label>
                  <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter blog Title">
                </div>
              </div>-->
                
            <div class="mb-3">
                <div class="form-group custom-file" id="bi-ImageFile" lang="es">
                  <label class="" for="blogImage">
                    UPLOAD IMAGE
                  </label>
                      <input type="file" class="" id="blogImage" name="blogImage" aria-describedby="fileHelp">                      
                </div>
             </div>

              <div class="mb-3">
                <label for="blogDescription">DESCRIPTION:</label>
                <textarea class="form-control ckeditor" placeholder="Place some text here" id="blogDescription" name="blogDescription"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </div>
                
                <div class="mb-3">
                <div class="form-group">
                  <label for="metaTitle">META TITLE:</label>
                  <input type="text" class="form-control" id="metaTitle" name="metaTitle" placeholder="Enter Meta Title">
                </div>
              </div>

              <div class="mb-3">
                <div class="form-group">
                  <label for="metaDescription">META DESCRIPTION:</label>
                  <input type="text" class="form-control" id="metaDescription" name="metaDescription" placeholder="Enter Meta Description">
                </div>
              </div>

              <div class="mb-3">
                <div class="form-group">
                  <label for="metaKeyword">META KEYWORD:</label>
                  <input type="text" class="form-control" id="metaKeyword" name="metaKeyword" placeholder="Enter Meta Keyword">
                </div>
              </div>

              <div class="mb-3">
                <div class="form-group">
                  <label for="urlKeyword">URL KEYWORD:</label>
                  <input type="text" class="form-control" id="urlKeyword" name="urlKeyword" placeholder="Enter Url Keyword">
                </div>
              </div>

<!--              <div class="mb-3">
              <div class="form-group">
                <label>PUBLISHED DATE:</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control float-right" id="dateOfPublished" name="dateOfPublished">
                  </div>
              </div>
            </div>-->

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
                <a href="<?php echo base_url('Controller_Blogs/') ?>" class="btn btn-warning">Back</a>
              </div>
           
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

    $("#mainBlogsNav").addClass('active');
    $("#addBlogsNav").addClass('active');
    
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
