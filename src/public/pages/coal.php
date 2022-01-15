<?php
include('page_header.php');
?>

    <main class="mt-5 pt-3">
      <!-- Modal -->
      <div class="modal fade" id="addCoalSupplierModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">কয়লা বিক্রেতা</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <form action="../../server/database/coal_handle.php" method="post">
                    <div class="modal-body">
                              <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">নাম</span>
                                <input type="text" id="coal_seller_name" name="coal_seller_name" class="form-control">
                              </div>
                              <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">মোবাইল</span>
                                <input type="number" id="coal_seller_mobile" name="coal_seller_mobile" class="form-control">
                              </div>
                              <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">কোম্পানীর নাম</span>
                                <input type="text" id="coal_seller_company" name="coal_seller_company" class="form-control">
                              </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">বাতিল</button>
                      <button type="submit" class="btn btn-success" name="add_coal_seller">যোগ করুন</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          <!-- Modal  -->
     <div class="container-fluid">
       <div class="row mt-5">
         <div class="col-md-12">
          <div class="card" style="transform: none;">
            <h5 class="card-header" style="background-color: #EB945F;" ><strong>কয়লা</strong></h5>
            <div class="card-body" style="padding: 0;">
            <?php
            if(isset($_GET['msg'])){
              ?>
              <div class="alert mt-2 alert-warning alert-dismissible fade show" role="alert">
              <strong>
                <?php
                echo $_GET['msg'];
                ?>
              </strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>            
              <?php
            }
            ?>
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link my-tab-btn" id="coal-supplier-tab" data-bs-toggle="tab" data-bs-target="#coal-supplier" type="button" role="tab">বিক্রেতা</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link my-tab-btn active" id="coal-tab" data-bs-toggle="tab" data-bs-target="#coal" type="button" role="tab" >কয়লা</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link my-tab-btn" id="coal-report-tab" data-bs-toggle="tab" data-bs-target="#coal-report" type="button" role="tab">রিপোর্ট</button>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade " id="coal-supplier" role="tabpanel">
                <button type="button" class="btn btn-primary m-3" data-bs-toggle="modal" data-bs-target="#addCoalSupplierModal">
                    <span><i class="fas fa-plus"></i></span> যোগ করুন
                </button>

                <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">Sl no.</th>
                                    <th scope="col">বিক্রেতা</th>
                                    <th scope="col">মোবাইল</th>
                                    <th scope="col">কোম্পানীর নাম</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php
                                    require_once('../../server/connection.php');
                                    $query = "SELECT * from `coal_sellers`";

                                    $result = $conn->query($query);
                                    if($result->num_rows>0){
                                        $i=1;
                                      while($row = $result->fetch_assoc()){
                                        ?>
                                  <tr>                        
                                    <th scope="row"><?php
                                    echo $i;
                                    ?></th>
                                    <td><?php
                                    echo $row['coal_seller_name'];
                                    ?></td>
                                    <td>
                                    <?php
                                    echo $row['coal_seller_mobile'];
                                    ?>
                                    </td>
                                    <td><?php
                                    echo $row['coal_seller_company'];
                                    ?></td>
                                    <td class="d-flex">
                                      <button class="btn btn-warning me-1" data-bs-toggle="modal"><i class="fas fa-edit"></i></button>
                                      <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                    </td>
                                  </tr>
                                        <?php
                                        $i++;
                                      }
                                    }
                                  ?>
                                  
                                </tbody>
                    </table>

                </div>
                <div class="p-3 tab-pane fade show active" id="coal" role="tabpanel">
                  <div class="row align-middle justify-content-between">
                    <div class="col-md-6 text-center d-flex align-items-center justify-content-center">
                      <img class="img-fluid mb-1" width="400px" height="auto" src="../../assets/images/factory.svg" alt="">
                    </div>
                    <div class="col-md-6">
                      <form action="#">
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1">নাম</span>
                          <input type="text" class="form-control">
                        </div>
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1">পরিমাণ (টন)</span>
                          <input type="number" class="form-control">
                        </div>
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1">হার</span>
                          <input type="number" class="form-control">
                        </div>
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1">টোটাল</span>
                          <input type="number" class="form-control">
                        </div>
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1">প্রদান</span>
                          <input type="number" class="form-control">
                        </div>
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1">বাকি</span>
                          <input type="number" class="form-control">
                        </div>
                        <button class="btn btn-success">সাবমিট</button>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade p-4" id="coal-report" role="tabpanel">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Sl no.</th>
                        <th scope="col">বিক্রেতা</th>
                        <th scope="col">টোটাল</th>
                        <th scope="col">প্রদান করা হয়েছে</th>
                        <th scope="col">বাকি</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>2000</td>
                        <td>
                          <button class="btn btn-info"> <i class="text-light fas fa-money-bill"></i> </button>
                          <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                          <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
         </div>
       </div>
     </div>
    </main>

    

    <?php
    include('page_footer.php');
    ?>