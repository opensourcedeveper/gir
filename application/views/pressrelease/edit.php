

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
     Edit PressRelease;

    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">PressRelease</li>
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
          <form role="form" action="<?php base_url('press-release/update') ?>" method="post" enctype="multipart/form-data">
              
              <div class="card-body pad">

              <div class="mb-3">
                <div class="form-group">
                  <label for="pressreleaseTitle">TITLE:</label>
                  <input type="text" class="form-control" id="pressreleaseTitle" name="pressreleaseTitle" value="<?php echo $pressrelease_data['title']; ?>" placeholder="Enter Title">
                </div>
              </div>
                  
<!--              <div class="mb-3">
                <div class="form-group">
                  <label for="slug">SLUG:</label>
                  <input type="text" class="form-control" id="slug" name="slug" value="<?php echo $pressrelease_data['slug']; ?>" placeholder="Enter slug">
                </div>
              </div>-->
                  
                <div class="form-group">
                  <label>Image Preview: </label>
                  <img src="<?php echo base_url() . $pressrelease_data['image'] ?>" width="150" height="150" class="img-circle">
                </div>
                  
             <div class="mb-3">
                <div class="form-group custom-file" id="bi-ImageFile" lang="es">
                  <label class="" for="pressreleaseImage">
                    UPLOAD IMAGE
                  </label>
                      <input type="file" class="" id="pressreleaseImage" name="pressreleaseImage" aria-describedby="fileHelp">                      
                </div>
             </div>
            
              <div class="mb-3">
                <label for="pressreleaseDescription">DESCRIPTION:</label>
                <!--<textarea type="text" class="form-control textarea" name="reportDescription" id="reportDescription" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>-->
                <textarea type="text" class="form-control ckeditor" name="pressreleaseDescription" id="pressreleaseDescription" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $pressrelease_data['description']; ?></textarea>
              </div>
                  
              <div class="mb-3">
                <div class="form-group">
                  <label for="metaTitle">META TITLE:</label>
                  <input type="text" class="form-control" id="metaTitle" name="metaTitle" placeholder="Enter Meta Title" value="<?php echo $pressrelease_data['metaTitle']; ?>">
                </div>
              </div>

              <div class="mb-3">
                <div class="form-group">
                  <label for="metaDescription">META DESCRIPTION:</label>
                  <input type="text" class="form-control" id="metaDescription" name="metaDescription" placeholder="Enter Meta Description" value="<?php echo $pressrelease_data['metaDescription']; ?>">
                </div>
              </div>

              <div class="mb-3">
                <div class="form-group">
                  <label for="metaKeyword">META KEYWORD:</label>
                  <input type="text" class="form-control" id="metaKeyword" name="metaKeyword" placeholder="Enter Meta Keyword" value="<?php echo $pressrelease_data['metaKeyword']; ?>">
                </div>
              </div>

              <div class="mb-3">
                <div class="form-group">
                  <label for="urlKeyword">URL KEYWORD:</label>
                  <input type="text" class="form-control" id="urlKeyword" name="urlKeyword" placeholder="Enter Url Keyword" value="<?php echo $pressrelease_data['urlKeyword']; ?>">
                </div>
              </div>
              
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save Changes</button>
                <a href="<?php echo base_url('Controller_PressRelease/') ?>" class="btn btn-warning">Back</a>
              </div>
              
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

    $("#mainPressReleaseNav").addClass('active');
    $("#managePressReleaseNav").addClass('active');
    
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