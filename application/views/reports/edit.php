<!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">   //rg for Local PC -->


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
     Edit Reports

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
          <form role="form" action="<?php base_url('reports/update') ?>" method="post" enctype="multipart/form-data">
              
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
                  <input type="text" class="form-control" id="reportTitle" name="reportTitle" value="<?php echo $reports_data['title']; ?>" placeholder="Enter Report Title">
                </div>
              </div>

<!--             <div class="mb-3">
                <div class="form-group">
                  <label for="slug">SLUG:</label>
                  <input type="text" class="form-control" id="slug" name="slug" value="<?php // echo $reports_data['slug']; ?>" placeholder="Enter Report slug">
                </div>
              </div>-->

            
             <div class="mb-3">
                <div class="form-group">
                  <label for="catSelect">CATEGORY:</label>
                  <select class="form-control" id="catSelect" name="catSelect"  value="<?php echo $reports_data['category']; ?>">
                    <?php if(!empty($reports_data['category'])){ foreach ($category as $k => $v): ?>
                      <option value="<?php echo $v['id'] ?>" <?php if($v['id'] == $reports_data['category']) { echo 'selected="selected"'; } ?>><?php echo $v['name'] ?></option>
                    <?php endforeach ?>
                      <?php }else{  ?>
                      <?php foreach ($category as $k => $v): ?>
                      <option value="<?php echo $v['id'] ?>"><?php echo $v['name'] ?></option>
                    <?php endforeach ?><?php }  ?>
                  </select>
                </div>
              </div>

              <div class="mb-3">
                <label for="reportDescription">DESCRIPTION:</label>
                <!--<textarea type="text" class="form-control textarea" name="reportDescription" id="reportDescription" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>-->
                <textarea type="text" class="form-control ckeditor" name="reportDescription" id="reportDescription" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $reports_data['description']; ?></textarea>
              </div>



              <div class="mb-3">
                <label for="tableOfContent">TOC:</label>
                <textarea type="text" class="form-control ckeditor" name="tableOfContent" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $reports_data['tableOfContent']; ?></textarea>
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
                    <input type="date" class="form-control float-right" id="dateOfPublished" name="dateOfPublished" value="<?php echo $reports_data['dateOfPublished']; ?>">
                  </div>
              </div>
            </div>

              <div class="mb-3">
                <div class="form-group">
                  <label for="reportPages">NUMBER OF PAGES:</label>
                  <input type="text" class="form-control" id="reportPages" name="reportPages" placeholder="Enter Number of Pages" value="<?php echo $reports_data['pages']; ?>">
                </div>
              </div>

              <div class="mb-3">
                <label for="reportPages">SINGLE USER:</label>
                <!--<div class="input-group">-->
              
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fas fa-dollar-sign"></i>
                    </span>
                  </div>
               
                  <input type="text" class="form-control" id="singleUserAmount" name="singleUserAmount"  value="<?php echo $reports_data['singleUserAmount']; ?>">
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
               
                  <input type="text" class="form-control" id="enterpriceEditionAmount" name="enterpriceEditionAmount" value="<?php echo $reports_data['enterpriceEditionAmount']; ?>" >
<!--                  <div class="input-group-append">
                    <div class="input-group-text"><i class="fas fa-users"></i></div>
                  </div>-->
                <!--</div>-->
              </div>
            
              <div class="mb-3">
                <div class="form-group">
                  <label for="reportStatus">STATUS:</label>
                  <select class="form-control" id="reportStatus" name="reportStatus" value="<?php echo $reports_data['status']; ?>">
                    <option selected>Published</option>
                    <!-- <option>Ongoing</option> -->
                   
                  </select>
                </div>
              </div>

              <div class="mb-3">
                <div class="form-group">
                  <label for="reportmetaTitle">META TITLE:</label>
                  <input type="text" class="form-control" id="reportmetaTitle" name="reportmetaTitle" placeholder="Enter Meta Title" value="<?php echo $reports_data['metaTitle']; ?>">
                </div>
              </div>

              <div class="mb-3">
                <div class="form-group">
                  <label for="reportmetaDescription">META DESCRIPTION:</label>
                  <input type="text" class="form-control" id="reportmetaDescription" name="reportmetaDescription" placeholder="Enter Meta Description" value="<?php echo $reports_data['metaDescription']; ?>">
                </div>
              </div>

              <div class="mb-3">
                <div class="form-group">
                  <label for="reportmetaKeyword">META KEYWORD:</label>
                  <input type="text" class="form-control" id="reportmetaKeyword" name="reportmetaKeyword" placeholder="Enter Meta Keyword" value="<?php echo $reports_data['metaKeyword']; ?>">
                </div>
              </div>

              <div class="mb-3">
                <div class="form-group">
                  <label for="reporturlKeyword">URL KEYWORD:</label>
                  <input type="text" class="form-control" id="reporturlKeyword" name="reporturlKeyword" placeholder="Enter Url Keyword" value="<?php echo $reports_data['urlKeyword']; ?>">
                </div>
              </div>

        <table style="width: 100%">
            <tr>
                <td> Questions </td>
                <td> Answers </td>
            </tr>
        <?php if(!empty($faqs_data)){ foreach ($faqs_data as $k => $v): ?>
            
            <tr>
                <td>  <input name="que" class="form-control  mb-2 mt-5" type="text" value="<?php echo $v['question'];?>" placeholder="Question" style="margin: 15px 0 7px 0;"></td>
                <td>  <input name="ans" class="form-control" type="text" value="<?php echo $v['answer'];?>" placeholder="Answer"></td>
                <td>  <input type="button" onclick="myFunction(<?php echo $v['id'];?>)" value="Delete"></td>
            </tr>     
        <?php endforeach ?><?php }  ?>
        </table>
 <!--  -->
               <div class="mb-3">
                <div class="report_faqs pt-4 mt-4">
                <a class="addNewFaq ml-0" href="#!"><i class="fa fa-plus pr-2 f20"></i> Add FAQ</a>
                  <input name="que" class="form-control  mb-2 mt-5" type="text" value="" placeholder="Question" style="margin: 15px 0 7px 0;">
                  <input name="ans" class="form-control" type="text" value="" placeholder="Answer">
                  <hr>
                </div>

                <div class="report_faqs_dynamic"></div>
                <input name="cnt" id="cnt" class="form-control" type="hidden" value="0" placeholder="cnt">
                </div>
                        <!--  -->

            </div>
              
              
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save Changes</button>
                <a href="<?php echo base_url('Controller_Reports/') ?>" class="btn btn-warning">Back</a>
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

    $("#mainReportsNav").addClass('active');
    $("#manageReportsNav").addClass('active');
    
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
  
  
  ////////////
  $(document).on('click', '.remove-field', function(e) {
  $(this).parent('.remove').remove();
  e.preventDefault();
});  

  function myFunction(id) {
//      alert(id);
      if(confirm("Are you Sure to delete?")){
//          var id = $('#prod').val();

//        window.location.href = "<?php // echo site_url('report/removefaqs/');?>"+id;

          $.ajax({
               type:'POST',
//               url:'report/removefaqs/'+id,
               url:'<?php echo base_url("report/removefaqs"); ?>',
               data:{'id':id},
               success:function(data){
//                   alert(data);
                   alert('Data Deleted Successfully.');
//                   $('#resultdiv').html(data);
               }
           });
      }
} 


  $('.addNewFaq').click(function() {
  $('.report_faqs').clone().appendTo('.report_faqs_dynamic');
  $('.report_faqs_dynamic .report_faqs').addClass('single remove');
  $('.single .addNewFaq').remove();
  $('.single').append('<a href="#" class="remove-field btn-remove-faq text-danger">Remove FAQ</a>');
  $('.report_faqs_dynamic > .single').attr("class", "remove");
var count = 0;
  $('.report_faqs_dynamic input').each(function() {
    count++;
    var fieldname = $(this).attr("name");
    $(this).attr('name', fieldname.substring(0, 3) + count);
    $('#cnt').val(count);
  });

});





  ///////////  refresh kar p
</script>