<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>var $j = jQuery.noConflict(true);</script>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Manage Orders
     
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Orders</li>
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

        
        
        <?php if(in_array('createOrder', $user_permission)): ?>
          <a href="<?php echo base_url('Controller_Orders/create') ?>" class="btn btn-primary">Add Order</a>
          <br /> <br />
        <?php endif; ?>

          <!--Display Total unpaid Amt-->
<!--          <table>
              <tr><td><b><span>Total Paid Amount </b></span></td><td>=</td><td>&nbsp;&nbsp;<b><span id="Total_paid_amt"></span></b></td></tr></b>
              <tr><td><b><span>Total UnPaid Amount &nbsp;&nbsp;</span></b></td><td>=</td><td>&nbsp;&nbsp;<b><span id="Total_unpaid_amt"></span></b></td></tr>
          </table>-->
<!--          <div class="">
            <label for="usr">Client Name:</label>
            <input type="text" class="" id="clientname" name="clientname">
            <button type="button" class="btn btn-primary" onclick="manageTablefun()"> Search </button>
          </div>-->
          
            <form action="" >
              <label for="gsearch">Search Farmer:</label>
              <input type="search" id="gsearch" name="gsearch">
              <input type="submit">
            </form>

        <div class="box">
          
          <!-- /.box-header -->
          <div class="box-body">
            <table id="manageTable" class="table table-bordered table-striped" style="width:100%">
              <thead>
              <tr>
                  <th>Id</th>
                <th>Bill no</th>
                <th>Farmer Name</th>
                <th>Farmer Mob.No</th>
                <th>Bill Date</th>   <!--<th>Date Time</th>-->
                <th>Total Products</th>
                <th>Total Amount</th>
                <!--<th>Status</th>-->
                
                <?php if(in_array('updateOrder', $user_permission) || in_array('viewOrder', $user_permission) || in_array('deleteOrder', $user_permission)): ?>
                  <th>Action</th>
                <?php endif; ?>
              </tr>
              </thead>

            </table>
          </div>
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

<?php if(in_array('deleteOrder', $user_permission)): ?>
<!-- remove brand modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="removeModal">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Remove Order</h4>
      </div>

      <form role="form" action="<?php echo base_url('Controller_Orders/remove') ?>" method="post" id="removeForm">
        <div class="modal-body">
          <p>Do you really want to remove?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger">Delete</button>
        </div>
      </form>


    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php endif; ?>



<script type="text/javascript">
var manageTable;
var base_url = "<?php echo base_url(); ?>";

$j(document).ready(function() {

  $j("#mainOrdersNav").addClass('active');
  $j("#manageOrdersNav").addClass('active');

    manageTablefun();
    
});

function manageTablefun(){
  // initialize the datatable 
//  var url_string = "http://www.example.com/t.html?a=1&b=3&c=m2-m3-m4-m5"; //window.location.href
//var url = new URL(url_string);
//var c = url.searchParams.get("c");
//console.log(c);

const queryString = window.location.search;
//console.log(queryString);
const urlParams = new URLSearchParams(queryString);
//console.log(urlParams);
const search_name = urlParams.get('gsearch')
//console.log(search_name);
  
//  var name = '';
//  manageTable = $('#manageTable').DataTable({
////    'ajax': base_url + 'Controller_Orders/fetchOrdersData',
////    'order': [],
//
////        "processing": true,
////        "serverSide": true,       
//        "ajax": {
//            "url" : base_url + 'Controller_Orders/fetchOrdersData',
//            "type": "POST",
//         "data" : {
//            "cmd" : "refresh",
//            "customer_name": search_name
//        }},
//    
//    "drawCallback": function(res) {
////        alert(res);
////        console.log(res);
//        var tot_notpaid_amt = 0;
//        var tot_paid_amt = 0;
//        jQuery.each(res.json, function(index, item) {
////            console.log(item);
//            jQuery.each(item, function(index, item) {
////            console.log(item[6]);
//            if(item[7] == '<span class="label label-warning">Not Paid</span>'){
//                tot_notpaid_amt = parseInt(tot_notpaid_amt) + parseInt(item[6]);}
//            else{
//                tot_paid_amt = parseInt(tot_paid_amt) + parseInt(item[6]);
//            }
//        });
//        });
//            document.getElementById("Total_unpaid_amt").innerHTML = " ₹ "+tot_notpaid_amt;
//            document.getElementById("Total_paid_amt").innerHTML = " ₹ "+tot_paid_amt;
//        //do whatever  
//    },
//    "scrollX": true,
//  });


  // initialize the datatable 
  manageTable = $('#manageTable').DataTable({
    dom: 'Bfrtip',
        buttons: [
            'excel', 'print'
        ], 
//        lengthMenu: [
//            [ 10, 25, 50, -1 ],
//            [ '10 rows', '25 rows', '50 rows', 'Show all' ]
//        ],
//    'ajax': base_url + 'Controller_Orders/fetchOrdersData',
    'order': [],
    "scrollX": true,
    
    "ajax": {
            "url" : base_url + 'Controller_Orders/fetchOrdersData',
            "type": "POST",
         "data" : {
            "cmd" : "refresh",
            "customer_name": search_name
        }},
    
//    "drawCallback": function(res) {
//        alert(res);
//        console.log(res);
//        var tot_notpaid_amt = 0;
//        var tot_paid_amt = 0;
//        jQuery.each(res.json, function(index, item) {
////            console.log(item);
//            jQuery.each(item, function(index, item) {
////            console.log(item[6]);
//            if(item[7] == '<span class="label label-warning">Not Paid</span>'){
//                tot_notpaid_amt = parseInt(tot_notpaid_amt) + parseInt(item[6]);}
//            else if(item[7] == '<span class="label label-success">Paid</span>'){
//                tot_paid_amt = parseInt(tot_paid_amt) + parseInt(item[6]);
//            }
//        });
//        });
//            document.getElementById("Total_unpaid_amt").innerHTML = " ₹ "+tot_notpaid_amt;
//            document.getElementById("Total_paid_amt").innerHTML = " ₹ "+tot_paid_amt;
        //do whatever  
//    }
  });
}

// remove functions 
function removeFunc(id)
{
  if(id) {
    $j("#removeForm").on('submit', function() {

      var form = $j(this);

      // remove the text-danger
      $j(".text-danger").remove();

      $j.ajax({
        url: form.attr('action'),
        type: form.attr('method'),
        data: { order_id:id }, 
        dataType: 'json',
        success:function(response) {

          manageTable.ajax.reload(null, false); 

          if(response.success === true) {
            $j("#messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
              '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
              '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
            '</div>');

            // hide the modal
            $j("#removeModal").modal('hide');

          } else {

            $j("#messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
              '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
              '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
            '</div>'); 
          }
        }
      }); 

      return false;
    });
  }
}


</script>

<script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
