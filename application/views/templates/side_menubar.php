
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <li id="dashboardMainMenu">
          <a href="<?php echo base_url('dashboard') ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        


          <?php if(in_array('createBrand', $user_permission) || in_array('updateBrand', $user_permission) || in_array('viewBrand', $user_permission) || in_array('deleteBrand', $user_permission)): ?>
            <li id="brandNav">
              <a href="<?php echo base_url('Controller_Items/') ?>">
                <i class="fa fa-cart-arrow-down"></i> <span>Items</span>
              </a>
            </li>
          <?php endif; ?>

          <?php if(in_array('createCategory', $user_permission) || in_array('updateCategory', $user_permission) || in_array('viewCategory', $user_permission) || in_array('deleteCategory', $user_permission)): ?>
            <li id="categoryNav">
              <a href="<?php echo base_url('Controller_Category/') ?>">
                <i class="fa fa-cubes"></i> <span>Category</span>
              </a>
            </li>
          <?php endif; ?>

          <?php if(in_array('createStore', $user_permission) || in_array('updateStore', $user_permission) || in_array('viewStore', $user_permission) || in_array('deleteStore', $user_permission)): ?>
            <li id="storeNav">
              <a href="<?php echo base_url('Controller_Warehouse/') ?>">
                <i class="fa fa-building-o"></i> <span>Warehouse</span>
              </a>
            </li>
          <?php endif; ?>

          <?php if(in_array('createAttribute', $user_permission) || in_array('updateAttribute', $user_permission) || in_array('viewAttribute', $user_permission) || in_array('deleteAttribute', $user_permission)): ?>
          <li id="attributeNav">
            <a href="<?php echo base_url('Controller_Element/') ?>">
              <i class="fa fa-files-o"></i> <span>Elements</span>
            </a>
          </li>
          <?php endif; ?>

          <?php if(in_array('createProduct', $user_permission) || in_array('updateProduct', $user_permission) || in_array('viewProduct', $user_permission) || in_array('deleteProduct', $user_permission)): ?>
            <li class="treeview" id="mainProductNav">
              <a href="#">
                <i class="fa fa-cube"></i>
                <span>Products</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <?php if(in_array('createProduct', $user_permission)): ?>
                  <li id="addProductNav"><a href="<?php echo base_url('Controller_Products/create') ?>"><i class="fa fa-circle-o"></i> Add Product</a></li>
                <?php endif; ?>
                <?php if(in_array('updateProduct', $user_permission) || in_array('viewProduct', $user_permission) || in_array('deleteProduct', $user_permission)): ?>
                <li id="manageProductNav"><a href="<?php echo base_url('Controller_Products') ?>"><i class="fa fa-circle-o"></i> Manage Products</a></li>
                <?php endif; ?>
              </ul>
            </li>
          <?php endif; ?>
            
            
            <!--//for Inventory-->
            <?php // if(in_array('createInventory', $user_permission)): ?>
<!--          <li id="inventoryNav">
            <a href="<?php // echo base_url('Controller_Inventory/create') ?>">
              <i class="fa fa-files-o"></i> <span>Inventory</span>
            </a>
          </li>-->
          <?php // endif; ?>
          
          <?php if(in_array('createInventory', $user_permission) || in_array('updateInventory', $user_permission) || in_array('viewInventory', $user_permission) || in_array('deleteInventory', $user_permission)): ?>
            <li class="treeview" id="mainInventoryNav">
              <a href="#">
                <i class="fa fa-book"></i>
                <span>Inventory</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <?php if(in_array('createInventory', $user_permission)): ?>
                  <li id="addInventoryNav"><a href="<?php echo base_url('Controller_Inventory/create') ?>"><i class="fa fa-circle-o"></i>Add Inventory</a></li>  <!--  Add Order -->
                <?php endif; ?>
                <?php if(in_array('updateInventory', $user_permission) || in_array('viewInventory', $user_permission) || in_array('deleteInventory', $user_permission)): ?>
                <li id="manageInventoryNav"><a href="<?php echo base_url('Controller_Inventory') ?>"><i class="fa fa-circle-o"></i> Manage Inventory</a></li>      <!--  Manage Order -->
                <?php endif; ?>
              </ul>
            </li>
          <?php endif; ?>
            
            
          <?php if(in_array('createCustomer', $user_permission) || in_array('updateCustomer', $user_permission) || in_array('viewCustomer', $user_permission) || in_array('deleteCustomer', $user_permission)): ?>
            <li class="treeview" id="mainCustomerNav">
            <a href="#">
              <i class="fa fa-users"></i>
              <span>Customers</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <?php if(in_array('createCustomer', $user_permission)): ?>
              <li id="createCustomerNav"><a href="<?php echo base_url('Controller_Customers/create') ?>"><i class="fa fa-circle-o"></i> Add Customers</a></li>
              <?php endif; ?>

              <?php if(in_array('updateCustomer', $user_permission) || in_array('viewCustomer', $user_permission) || in_array('deleteCustomer', $user_permission)): ?>
              <li id="manageCustomerNav"><a href="<?php echo base_url('Controller_Customers') ?>"><i class="fa fa-circle-o"></i> Manage Customers</a></li>
            <?php endif; ?>
            </ul>
          </li>
          <?php endif; ?>
            
          <?php if(in_array('createCustomerPayment', $user_permission) || in_array('updateCustomerPayment', $user_permission) || in_array('viewCustomerPayment', $user_permission) || in_array('deleteCustomerPayment', $user_permission)): ?>
            <li class="treeview" id="mainCustomerPaymentNav">
            <a href="#">
              <i class="fa fa-users"></i>
              <span>Customer Payments</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <?php if(in_array('createCustomerPayment', $user_permission)): ?>
              <li id="createCustomerPaymentNav"><a href="<?php echo base_url('Controller_Customers_Payments/create') ?>"><i class="fa fa-circle-o"></i> Add Customer Payments</a></li>
              <?php endif; ?>

              <?php if(in_array('updateCustomerPayment', $user_permission) || in_array('viewCustomerPayment', $user_permission) || in_array('deleteCustomerPayment', $user_permission)): ?>
              <li id="manageCustomerPaymentSNav"><a href="<?php echo base_url('Controller_Customers_Payments') ?>"><i class="fa fa-circle-o"></i> Manage Customer Payments</a></li>
            <?php endif; ?>
            </ul>
          </li>
          <?php endif; ?>
            

          <?php if(in_array('createOrder', $user_permission) || in_array('updateOrder', $user_permission) || in_array('viewOrder', $user_permission) || in_array('deleteOrder', $user_permission)): ?>
            <li class="treeview" id="mainOrdersNav">
              <a href="#">
                <i class="fa fa-shopping-cart"></i>
                <!--<span>Orders</span>-->
                <span>Srinath POS</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <?php if(in_array('createOrder', $user_permission)): ?>
                  <li id="addOrderNav"><a href="<?php echo base_url('Controller_Orders/create') ?>"><i class="fa fa-circle-o"></i>Billing POS</a></li>  <!--  Add Order -->
                <?php endif; ?>
                <?php if(in_array('updateOrder', $user_permission) || in_array('viewOrder', $user_permission) || in_array('deleteOrder', $user_permission)): ?>
                <li id="manageOrdersNav"><a href="<?php echo base_url('Controller_Orders') ?>"><i class="fa fa-circle-o"></i> Manage POS</a></li>      <!--  Manage Order -->
                <?php endif; ?>
              </ul>
            </li>
          <?php endif; ?>
          <?php if($user_permission): ?>
          <?php if(in_array('createUser', $user_permission) || in_array('updateUser', $user_permission) || in_array('viewUser', $user_permission) || in_array('deleteUser', $user_permission)): ?>
            <li class="treeview" id="mainUserNav">
            <a href="#">
              <i class="fa fa-users"></i>
              <span>Members</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <?php if(in_array('createUser', $user_permission)): ?>
              <li id="createUserNav"><a href="<?php echo base_url('Controller_Members/create') ?>"><i class="fa fa-circle-o"></i> Add Members</a></li>
              <?php endif; ?>

              <?php if(in_array('updateUser', $user_permission) || in_array('viewUser', $user_permission) || in_array('deleteUser', $user_permission)): ?>
              <li id="manageUserNav"><a href="<?php echo base_url('Controller_Members') ?>"><i class="fa fa-circle-o"></i> Manage Members</a></li>
            <?php endif; ?>
            </ul>
          </li>
                    <?php endif; ?>
          
          <?php if(in_array('createGroup', $user_permission) || in_array('updateGroup', $user_permission) || in_array('viewGroup', $user_permission) || in_array('deleteGroup', $user_permission)): ?>
            <li class="treeview" id="mainGroupNav">
              <a href="#">
                <i class="fa fa-unlock-alt"></i>
                <span>Permission</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <?php if(in_array('createGroup', $user_permission)): ?>
                  <li id="addGroupNav"><a href="<?php echo base_url('Controller_Permission/create') ?>"><i class="fa fa-circle-o"></i> Add Permission</a></li>
                <?php endif; ?>
                <?php if(in_array('updateGroup', $user_permission) || in_array('viewGroup', $user_permission) || in_array('deleteGroup', $user_permission)): ?>
                <li id="manageGroupNav"><a href="<?php echo base_url('Controller_Permission') ?>"><i class="fa fa-circle-o"></i> Manage Permission</a></li>
                <?php endif; ?>
              </ul>
            </li>
          <?php endif; ?>
          
          
          
          
        <?php if(in_array('createReports', $user_permission) || in_array('updateReports', $user_permission) || in_array('viewReports', $user_permission) || in_array('deleteReports', $user_permission)): ?>
          <li class="treeview" id="mainReportsNav">
            <a href="#">
              <i class="fa fa-users"></i>
              <span>Reports</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <?php if(in_array('createReports', $user_permission)): ?>
              <li id="addReportsNav"><a href="<?php echo base_url('Controller_Reports/create') ?>"><i class="fa fa-circle-o"></i> Add Reports</a></li>
              <?php endif; ?>

              <?php if(in_array('updateReports', $user_permission) || in_array('viewReports', $user_permission) || in_array('deleteReports', $user_permission)): ?>
              <li id="manageReportsNav"><a href="<?php echo base_url('Controller_Reports') ?>"><i class="fa fa-circle-o"></i> Manage Reports</a></li>
            <?php endif; ?>
            </ul>
          </li>
          <?php endif; ?>
          
        <?php if(in_array('createBlogs', $user_permission) || in_array('updateBlogs', $user_permission) || in_array('viewBlogs', $user_permission) || in_array('deleteBlogs', $user_permission)): ?>
          <li class="treeview" id="mainBlogsNav">
            <a href="#">
              <i class="fa fa-users"></i>
              <span>Blogs</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <?php if(in_array('createBlogs', $user_permission)): ?>
              <li id="addBlogsNav"><a href="<?php echo base_url('Controller_Blogs/create') ?>"><i class="fa fa-circle-o"></i> Add Blogs</a></li>
              <?php endif; ?>

              <?php if(in_array('updateBlogs', $user_permission) || in_array('viewBlogs', $user_permission) || in_array('deleteBlogs', $user_permission)): ?>
              <li id="manageBlogsNav"><a href="<?php echo base_url('Controller_Blogs') ?>"><i class="fa fa-circle-o"></i> Manage Blogs</a></li>
            <?php endif; ?>
            </ul>
          </li>
          <?php endif; ?>
          
          <?php if(in_array('createPressRelease', $user_permission) || in_array('updatePressRelease', $user_permission) || in_array('viewPressRelease', $user_permission) || in_array('deletePressRelease', $user_permission)): ?>
          <li class="treeview" id="mainPressReleaseNav">
            <a href="#">
              <i class="fa fa-users"></i>
              <span>Press Release</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <?php if(in_array('createPressRelease', $user_permission)): ?>
              <li id="addPressReleaseNav"><a href="<?php echo base_url('Controller_PressRelease/create') ?>"><i class="fa fa-circle-o"></i> Add Press Release</a></li>
              <?php endif; ?>

              <?php if(in_array('updatePressRelease', $user_permission) || in_array('viewPressRelease', $user_permission) || in_array('deletePressRelease', $user_permission)): ?>
              <li id="managePressReleaseNav"><a href="<?php echo base_url('Controller_PressRelease') ?>"><i class="fa fa-circle-o"></i> Manage Press Release</a></li>
            <?php endif; ?>
            </ul>
          </li>
          <?php endif; ?>
          
        <?php // if(in_array('viewReports', $user_permission)): ?>
<!--            <li id="reportNav">
              <a href="<?php echo base_url('reports/') ?>">
                <i class="glyphicon glyphicon-stats"></i> <span>Reports</span>
              </a>
            </li>-->
          <?php // endif; ?> 

         <?php if(in_array('createDeposite', $user_permission) || in_array('updateDeposite', $user_permission) || in_array('viewDeposite', $user_permission) || in_array('deleteDeposite', $user_permission)): ?>
            <li class="treeview" id="mainDepositeNav">
              <a href="#">
                <i class="fa fa-credit-card-alt"></i>
                <span>Bank Deposites</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <?php if(in_array('createDeposite', $user_permission)): ?>
                  <li id="addDepositeNav"><a href="<?php echo base_url('Controller_Deposites/create') ?>"><i class="fa fa-circle-o"></i> Add Deposite</a></li>
                <?php endif; ?>
                <?php if(in_array('updateDeposite', $user_permission) || in_array('viewDeposite', $user_permission) || in_array('deleteDeposite', $user_permission)): ?>
                <li id="manageDepositeNav"><a href="<?php echo base_url('Controller_Deposites') ?>"><i class="fa fa-circle-o"></i> Manage Deposites</a></li>
                <?php endif; ?>
              </ul>
            </li>
          <?php endif; ?>
            
            
          <?php if(in_array('updateCompany', $user_permission)): ?>
            <li id="companyNav"><a href="<?php echo base_url('Controller_Company/') ?>"><i class="fa fa-bank"></i> <span>Company</span></a></li>
          <?php endif; ?>
            

        <?php endif; ?>
        <!-- user permission info -->
        <!--<li><a href="<?php // echo base_url('auth/logout') ?>"><i class="glyphicon glyphicon-log-out"></i> <span>Logout</span></a></li>-->

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>