<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>var $j = jQuery.noConflict(true);</script>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Edit Inventory
      
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Inventory</li>
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
                  <select class="form-control select_group" id="store" name="store" disabled>
                    <?php foreach ($stores as $k => $v): ?>
                      <!--<option value="<?php // echo $v['id'] ?>"><?php // echo $v['name'] ?></option>-->
                      <option value="<?php echo $v['id'] ?>" <?php if($v['id'] == $inventory_data['store_id']) { echo 'selected="selected"'; } ?>><?php echo $v['name'] ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
                    
                <div class="form-group">
                  <label for="products">Product name</label>
                  <select class="form-control select_group" id="product_id" name="product_id" disabled>
                      <option value="">Select product name</option>
                    <?php foreach ($products as $k => $v): ?>
                      <!--<option value="<?php // echo $v['id'] ?>"><?php // echo $v['name'] ?></option>-->
                      <option value="<?php echo $v['id'] ?>" <?php if($v['id'] == $inventory_data['products_id']) { echo 'selected="selected"'; } ?>><?php echo $v['name'] ?></option>
                    <?php endforeach ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="qty">Qty</label>
                  <input type="text" class="form-control" id="qty" name="qty" placeholder="Enter Qty" disabled value="<?php echo $inventory_data['qty']; ?>" autocomplete="off" />
                </div>
                    
                <div class="form-group">
                  <label for="price">Purchase Price</label>
                  <input type="text" class="form-control" id="price" name="price" placeholder="Enter price"  value="<?php echo $inventory_data['purchase_price']; ?>" autocomplete="off" />
                </div>

                

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save Changes</button>
                <a href="<?php echo base_url('Controller_Inventory/') ?>" class="btn btn-warning">Back</a>
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
    $("#mainInventoryNav").addClass('active');
    $("#addInventoryNav").addClass('active');
//    
//    var btnCust = '<button type="button" class="btn btn-secondary" title="Add picture tags" ' + 
//        'onclick="alert(\'Call your custom code here.\')">' +
//        '<i class="glyphicon glyphicon-tag"></i>' +
//        '</button>'; 
//    $("#product_image").fileinput({
//        overwriteInitial: true,
//        maxFileSize: 1500,
//        showClose: false,
//        showCaption: false,
//        browseLabel: '',
//        removeLabel: '',
//        browseIcon: '<i class="glyphicon glyphicon-folder-open"></i>',
//        removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
//        removeTitle: 'Cancel or reset changes',
//        elErrorContainer: '#kv-avatar-errors-1',
//        msgErrorClass: 'alert alert-block alert-danger',
//        // defaultPreviewContent: '<img src="/uploads/default_avatar_male.jpg" alt="Your Avatar">',
//        layoutTemplates: {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
//        allowedFileExtensions: ["jpg", "png", "gif"]
//    });

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