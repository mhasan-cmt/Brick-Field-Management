<?php
include('page_header.php');
?>

    <main class="mt-5 pt-3">
     <div class="container-fluid">
       <div class="row mt-5">
         <div class="col-md-12">
          <div class="card" style="transform: none;">
            <h5 class="card-header" style="background-color: #EB945F;" ><strong>মাটি ক্যারি</strong></h5>
            <div class="card-body" style="padding: 0;">

              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link my-tab-btn" id="drivers-tab" data-bs-toggle="tab" data-bs-target="#drivers" type="button" role="tab">ড্রাইভার</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link my-tab-btn active" id="tip-tab" data-bs-toggle="tab" data-bs-target="#tip" type="button" role="tab" >টিপ</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link my-tab-btn" id="report-tab" data-bs-toggle="tab" data-bs-target="#d-report" type="button" role="tab">রিপোর্ট</button>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade p-4" id="drivers" role="tabpanel">
                  
                </div>
                <div class="p-3 tab-pane fade show active" id="tip" role="tabpanel">
                  <div class="row align-middle justify-content-between">
                    <div class="col-md-6 text-center d-flex align-items-center justify-content-center">
                      <img class="img-fluid mb-1" width="400px" height="auto" src="../../assets/images/soil_truck.jpg" alt="">
                    </div>
                    <div class="col-md-6">
                      <form action="#">
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1">ড্রাইভারের নাম</span>
                          <input type="text" class="form-control">
                        </div>
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1">টিপ সংখ্যা</span>
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
                <div class="tab-pane fade p-4" id="d-report" role="tabpanel">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Sl no.</th>
                        <th scope="col">ড্রাইভার</th>
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