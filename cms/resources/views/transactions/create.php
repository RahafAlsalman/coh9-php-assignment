<!-- 
<div class="d-flex justify-content-between">
        <h1>HTU POS System</h1>
        <div>
            <strong>Total Sales</strong>
            <span id="total-sales">0</span>
        </div>
    </div>
    <hr>

    <form action="/api/transactions/create" method="POST" id="userInputContainer" class="my-4 d-flex justify-content-between">

        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">Items</span>
            <select id="items" class="form-select" aria-label="Default select example">
                <option selected>Select One Of The Items</option>
                <option value="Coffee">Coffee</option>
                <option value="Tea">Tea</option>
                <option value="Chips">Chips</option>
                <option value="Snickers">Snickers</option>
                <option value="Milk">Milk</option>
            </select>
        </div>

        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">Quantity</span>
            <input id="quantity" type="number" class="form-control" aria-describedby="addon-wrapping" min="0">
        </div>

        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">Price (JOD)</span>
            <input id="price" type="number" class="form-control" aria-describedby="addon-wrapping" min="0">
        </div>

        <button id="get-item" class="btn btn-success">Add</button>

    </form>



    <div id="dataTableContainer">


        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Item</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price Per Unit</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>


    </div>
    <script src="https://code.jquery.com/jquery-3.6.2.js" integrity="sha256-pkn2CUZmheSeyssYw3vMp1+xyub4m+e+QK4sQskvuo4=" crossorigin="anonymous"></script>
<script>
  $('#get-item').click(function() {
        $.ajax({
            type: "get",
            url: "http://cms1.local/api/items",
            success:function(response) {
                console.log(response);
                response.body.forEach(element => {
                    let x=$('tbody').append(
            `<tr>
            <td>${counter}</td>
            <td>${n}</td>
            <td>${q}</td>
            <td>${p}</td>
            <td>${p*q}</td>
                    `);
                    totalSales += q * p;
        totalSalesElement.text(totalSales);
        counter++;
        $('#userInputContainer').trigger('reset');

             });
          }
        });
     });
    </script> -->