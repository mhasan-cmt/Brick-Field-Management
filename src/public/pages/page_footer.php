<!-- Bootstrap js  -->
<script src="../../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- External Js Linkup -->
    <script src="../../assets/js/app.js"></script>
    <script>

      let total=document.getElementById('total');
      

      let calculateTotalByRate = ()=>{
        let rate =parseFloat(document.getElementById('rate').value);
        let quantity =parseFloat(document.getElementById('quantity').value);
        total.value = rate*quantity;
      }
      let calculateDue = ()=>{
        let mtotal=parseFloat(total.value);
        let paid =parseFloat(document.getElementById('paid').value);
        let due = document.getElementById('due');
        due.value = mtotal-paid;
      }

      let deleteData =(id)=>{
        if(confirm("Are you sure")){
          window.location.href="../../server/database/field_handle.php?delete="+id;
        }else{
          console.log("NO");
        }
      }
      let setEditData =(id, name, mobile, address)=>{
        let ownerName=document.getElementById('owner_name');
        let ownerMobile = document.getElementById('owner_mobile');
        let ownerAddress = document.getElementById('owner_address');
        let ownerId = document.getElementById('owner_id');
        ownerId.style.display="none";

        ownerName.value = name;
        ownerMobile.value = mobile;
        ownerAddress.value = address;
        ownerId.value = id;
      }
    </script>
</body>
</html>