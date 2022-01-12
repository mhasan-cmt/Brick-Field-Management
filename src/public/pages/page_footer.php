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
    </script>
</body>
</html>