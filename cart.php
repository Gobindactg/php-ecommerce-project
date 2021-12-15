    
    <input type="number" class="form-control" id="inputProductPriced" oninput="myFunction()" >
    <input type="number" class="form-control" id="inputGST" oninput="myFunction()">
    <input type="number" class="form-control" id="inputDelivery" oninput="myFunction()">
    <p id="inputProductPrice"  >50</p>
    <h4>Total Price: <span id="totalPrice">0</span></h4>


<script>
    function myFunction() {
        var price1 = document.getElementById("inputProductPrice").value;
        var price = Number(price1);
        document.write(price);
        var gst = document.getElementById("inputGST").value;
        var delivery = document.getElementById("inputDelivery").value;
        var total = +price + +gst + +delivery;
        document.getElementById("totalPrice").innerHTML = total;
         
    }
</script>