<?php
include('./components/header.php')
?>

    <main class="mt-5 pt-3">
     <div class="container-fluid dashboard">
       <div class="row mt-5" uk-scrollspy="target: > div; cls: uk-animation-fade; delay: 200">
         <div class="col-md-3 mb-3" onclick="redirectTo('./pages/coal.php')">
          <div class="card shadow text-dark mb-3 h-100 ">
            <div class="card-body">
              <h5 class="card-title dashboard-card text-center">
                <img src="../assets/icons/coal-svgrepo-com.svg" alt="">
              </h5>
              <p class="card-text dashboard-card text-center">কয়লা</p>
            </div>
          </div>
         </div>
         <div class="col-md-3 mb-3" onclick="redirectTo('./pages/soil_carry.php')">
          <div class="card shadow text-dark mb-3 h-100">
            <div class="card-body">
              <h5 class="card-title dashboard-card text-center">
                <img src="../assets/icons/cart-svgrepo-com.svg" alt="">
              </h5>
              <p class="card-text dashboard-card text-center">মাটি ক্যারিং</p>
            </div>
          </div>
         </div>
         <div class="col-md-3 mb-3">
          <div class="card shadow text-dark  mb-3 h-100">
            <div class="card-body">
              <h5 class="card-title dashboard-card text-center">
                <img src="../assets/icons/brick-svgrepo-com.svg" alt="">
              </h5>
              <p class="card-text dashboard-card text-center">পাকা ইট</p>
            </div>
          </div>
         </div>
         <div class="col-md-3 mb-3">
          <div class="card shadow text-dark mb-3 h-100">
            <div class="card-body">
              <h5 class="card-title dashboard-card text-center">
                <img src="../assets/icons/brick-raw-svgrepo-com .svg" alt="">
              </h5>
              <p class="card-text dashboard-card text-center">কাঁচা ইট</p>
            </div>
          </div>
         </div>
       </div>
       <div class="row mt-2" uk-scrollspy="target: > div; cls: uk-animation-fade; delay: 300">
         <div class="col-md-3 mb-3">
          <div class="card shadow text-dark mb-3 h-100">
            <div class="card-body">
              <h5 class="card-title dashboard-card text-center">
                <img src="../assets/icons/coal-svgrepo-com.svg" alt="">
              </h5>
              <p class="card-text dashboard-card text-center">আন-লোডিং</p>
            </div>
          </div>
         </div>
         <div class="col-md-3 mb-3">
          <div class="card shadow text-dark mb-3 h-100">
            <div class="card-body">
              <h5 class="card-title dashboard-card text-center">
                <img src="../assets/icons/coal-svgrepo-com.svg" alt="">
              </h5>
              <p class="card-text dashboard-card text-center">দৈনিক আয়</p>
            </div>
          </div>
         </div>
         <div class="col-md-3 mb-3">
          <div class="card shadow text-dark mb-3 h-100">
            <div class="card-body">
              <h5 class="card-title dashboard-card text-center">
                <img src="../assets/icons/coal-svgrepo-com.svg" alt="">
              </h5>
              <p class="card-text dashboard-card text-center">দৈনিক ব্যয়</p>
            </div>
          </div>
         </div>
         <div class="col-md-3 mb-3">
          <div class="card shadow text-dark mb-3 h-100">
            <div class="card-body">
              <h5 class="card-title dashboard-card text-center">
                <img src="../assets/icons/coal-svgrepo-com.svg" alt="">
              </h5>
              <p class="card-text dashboard-card text-center">বিক্রয়</p>
            </div>
          </div>
         </div>
       </div>
       <div class="row mt-2" uk-scrollspy="target: > div; cls: uk-animation-fade; delay: 400">
         <div class="col-md-3 mb-3">
          <div class="card shadow text-dark mb-3 h-100">
            <div class="card-body">
              <h5 class="card-title dashboard-card text-center">
                <img src="../assets/icons/truck copy.svg" alt="">
              </h5>
              <p class="card-text dashboard-card text-center">ডেলিভারি</p>
            </div>
          </div>
         </div>
         <div class="col-md-3 mb-3" onclick="redirectTo('./pages/mill_party.php')">
          <div class="card shadow text-dark mb-3 h-100">
            <div class="card-body">
              <h5 class="card-title dashboard-card text-center">
                <img src="../assets/icons/coal-svgrepo-com.svg" alt="">
              </h5>
              <p class="card-text dashboard-card text-center">মিল-পার্টি</p>
            </div>
          </div>
         </div>
         <div class="col-md-3 mb-3" onclick="redirectTo('./pages/field.php')">
          <div class="card shadow text-dark mb-3 h-100">
            <div class="card-body">
              <h5 class="card-title dashboard-card text-center">
                <img src="../assets/images/undraw_nature_m5ll.svg" alt="">
              </h5>
              <p class="card-text dashboard-card text-center">জমি</p>
            </div>
          </div>
         </div>
       </div>
     </div>
    </main>

    
<?php
include('./components/footer.php');
?>