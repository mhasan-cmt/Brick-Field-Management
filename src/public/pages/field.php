<?php
include('page_header.php');
?>
    
    <main class="mt-5 pt-3">
          <!-- Modal -->
            <div class="modal fade" id="editDataModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">জমির মালিক</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <form action="../../server/database/field_handle.php" method="POST">
                    <div class="modal-body">
                              <input type="text" name="owner_id" id="owner_id"> 
                              <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">নাম</span>
                                <input type="text" id="owner_name" name="owner_name" class="form-control">
                              </div>
                              <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">মোবাইল</span>
                                <input type="number" id="owner_mobile" name="owner_mobile" class="form-control">
                              </div>
                              <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">ঠিকানা</span>
                                <input type="text" id="owner_address" name="owner_address" class="form-control">
                              </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                      <button type="submit" class="btn btn-warning" name="edit_owner">Edit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          <!-- Modal  -->

          <!-- Modal -->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">জমির মালিক</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="../../server/database/field_handle.php" method="post">
                  <div class="modal-body">
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon1">নাম</span>
                      <input type="text" name="owner_name" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon1">মোবাইল</span>
                      <input type="number" name="owner_mobile" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon1">ঠিকানা</span>
                      <input type="text" name="owner_address" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                  </div>
              
                <div class="modal-footer">
                  <button type="button" class="btn btn-warning" data-bs-dismiss="modal">বাতিল</button>
                  <button type="submit" name="owner_add" data-bs-dismiss="modal" class="btn btn-success">সাবমিট</button>
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
              <h5 class="card-header" style="background-color: #EB945F;" ><strong>জমি</strong></h5>
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
                    <button class="nav-link my-tab-btn" id="field-owner-tab" data-bs-toggle="tab" data-bs-target="#field-owner" type="button" role="tab">জমির মালিক</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link my-tab-btn active" id="field-tab" data-bs-toggle="tab" data-bs-target="#field" type="button" role="tab" >জমি</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link my-tab-btn" id="field-report-tab" data-bs-toggle="tab" data-bs-target="#field-report" type="button" role="tab">রিপোর্ট</button>
                  </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade p-4" id="field-owner" role="tabpanel">
                    
                  <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <span><i class="fas fa-plus"></i></span> যোগ করুন
                    </button>

                    <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">Sl no.</th>
                                    <th scope="col">মালিক</th>
                                    <th scope="col">মোবাইল</th>
                                    <th scope="col">ঠিকানা</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php
                                    require_once('../../server/connection.php');
                                    $query = "SELECT * from `field_owners`";

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
                                    echo $row['owner_name'];
                                    ?></td>
                                    <td>
                                    <?php
                                    echo $row['owner_mobile'];
                                    ?>
                                    </td>
                                    <td><?php
                                    echo $row['owner_address'];
                                    ?></td>
                                    <td class="d-flex">
                                      <button class="btn btn-warning me-1" data-bs-toggle="modal" onclick="setEditData('<?php echo $row['id'];?>','<?php echo $row['owner_name'];?>', '<?php echo $row['owner_mobile'];?>', '<?php echo $row['owner_address'];?>')" data-bs-target="#editDataModal"><i class="fas fa-edit"></i></button>
                                      <button class="btn btn-danger" onclick="deleteData(<?php echo $row['id'];?>)"><i class="fas fa-trash-alt"></i></button>
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
                  <div class="p-3 tab-pane fade show active" id="field" role="tabpanel">
                    <div class="row align-middle justify-content-between">
                      <div class="col-md-6 text-center">
                        <img class="img-fluid" width="300px" height="auto" src="../../assets/images/undraw_nature_m5ll.svg" alt="">
                      </div>
                      <div class="col-md-6">
                        <form action="../../server/database/field_handle.php" method='post'>
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">নাম</span>
                            <select class="form-select" name="field_owner" aria-label="Default select example">
                              <option selected disabled>মালিকের নাম</option>
                            <?php
                            require_once('../../server/connection.php');
                            $query = "SELECT * from `field_owners`";

                            $result = $conn->query($query);

                            if($result->num_rows>0){
                              while($row = $result->fetch_assoc()){
                            ?><option>
                              <?php
                              echo $row['owner_name'];
                              ?>
                            </option>
                            <?php
                              }
                              }
                            
                            ?>
                            </select>
                          </div>
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">তারিখ</span>
                            <input name="date"  type="date" class="form-control">
                          </div>
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">পরিমাণ (শতকরা)</span>
                            <input type="number"  id="quantity" name="quantity" class="form-control">
                          </div>
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">হার</span>
                            <input type="number"  id="rate" name="rate" oninput="calculateTotalByRate()" class="form-control">
                          </div>
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">টোটাল</span>
                            <input type="number"  id="total" name="total" class="form-control">
                          </div>
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">প্রদান</span>
                            <input type="number"  id="paid" name="paid" oninput="calculateDue()" class="form-control">
                          </div>
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">বাকি</span>
                            <input type="number"  id="due" name="due" class="form-control">
                          </div>
                          <button type="submit" name="field_add" class="btn btn-success">সাবমিট</button>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade p-4" id="field-report" role="tabpanel">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Sl no.</th>
                          <th scope="col">মালিক</th>
                          <th scope="col">টোটাল</th>
                          <th scope="col">প্রদান করা হয়েছে</th>
                          <th scope="col">বাকি</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          require_once('../../server/connection.php');
                          $query = "SELECT * from `field_property`";

                          $result = $conn->query($query);

                          if($result->num_rows>0){
                            while($row = $result->fetch_assoc()){
                              ?>
                        <tr>                        
                          <th scope="row"><?php
                          echo $row['id'];
                          ?></th>
                          <td><?php
                          echo $row['field_owner'];
                          ?></td>
                          <td>
                          <?php
                          echo $row['total'];
                          ?>
                          </td>
                          <td><?php
                          echo $row['paid'];
                          ?></td>
                          <td><?php
                          echo $row['due'];
                          ?></td>
                          <td class="d-flex">
                            <button class="btn btn-info me-1"><i class="text-light fas fa-money-bill"></i> </button>
                            <button class="btn btn-warning me-1" ><i class="fas fa-edit"></i></button>
                            <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                          </td>
                        </tr>
                              <?php
                            }
                          }
                        ?>
                        
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