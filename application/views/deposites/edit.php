
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
     Edit Deposite
      
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Deposite</li>
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
          <form role="form" action="<?php base_url('users/create') ?>" method="post" enctype="multipart/form-data">
              <div class="box-body">

                <?php // echo validation_errors(); ?>
                  <?php if(validation_errors()): ?>
                    <div class="alert alert-error alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <?php echo validation_errors(); ?>
                    </div>
                  <?php endif; ?>

                <div class="form-group">
                    
<!--                <div class="form-group">
                  <label for="product_name">Product name</label>
                  <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter product name" autocomplete="off"/>
                </div>-->

<!--                <div class="form-group">
                  <input type="hidden" class="form-control" id="store_id" name="store_id" value="1" placeholder="Enter store_id" autocomplete="off" />
                </div>-->

                <div class="form-group">
                  <label for="store">Warehouse</label>
                  <?php // $store_id = json_decode($deposite_data['store_id']); ?>
                  <select class="form-control select_group" id="store" name="store">
                    <?php foreach ($stores as $k => $v): ?>
                      <!--<option value="<?php // echo $v['id'] ?>"><?php // echo $v['name'] ?></option>-->
                      <option value="<?php echo $v['id'] ?>" <?php if($v['id'] == $deposite_data['store_id']) { echo 'selected="selected"'; } ?>><?php echo $v['name'] ?></option>
                     <?php endforeach ?>
                  </select>
                </div>
                    
<!--                <div class="form-group">
                  <label for="products">Product name</label>
                  <select class="form-control select_group" id="product_id" name="product_id" >
                      <option value="">Select product name</option>
                    <?php // foreach ($products as $k => $v): ?>
                      <option value="<?php // echo $v['id'] ?>"><?php // echo $v['name'] ?></option>
                    <?php // endforeach ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="qty">Qty</label>
                  <input type="text" class="form-control" id="qty" name="qty" placeholder="Enter Qty" autocomplete="off" />
                </div>-->
                    
                <div class="form-group">
                  <label for="amount">Deposite Amount(RS)</label>
                  <input type="text" class="form-control" id="amount" name="amount" placeholder="Enter Amount" value="<?php echo $deposite_data['deposite_amount']; ?>" autocomplete="off" />
                </div>

                <div class="form-group">
                  <label>Image Preview: </label>
                  <img src="<?php echo base_url() . $deposite_data['image'] ?>" width="150" height="150" class="img-circle">
                </div>

                <div class="form-group">
                  <label for="bankReceipt_image">Image</label>
                  <div class="kv-avatar">
                      <div class="file-loading">
                          <input id="bankReceipt_image" name="bankReceipt_image" type="file">
                      </div>
                  </div>
                </div>
                

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save Changes</button>
                <a href="<?php echo base_url('Controller_Deposites/') ?>" class="btn btn-warning">Back</a>
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
//    $("#description").wysihtml5();
//
    $("#mainDepositeNav").addClass('active');
    $("#addDepositeNav").addClass('active');
    
    var btnCust = '<button type="button" class="btn btn-secondary" title="Add picture tags" ' + 
        'onclick="alert(\'Call your custom code here.\')">' +
        '<i class="glyphicon glyphicon-tag"></i>' +
        '</button>';
    $("#bankReceipt_image").fileinput({
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
