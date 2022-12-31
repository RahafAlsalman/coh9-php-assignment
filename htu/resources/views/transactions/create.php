<?php
use Core\Model\Item;
?>
<div class="d-flex justify-content-between">
        <h1>HTU POS System</h1>
        <div>
            <strong>Total Sales</strong>
            <span id="total-sales">0</span>
        </div>
    </div>
    <hr>

    <form id="userInputContainer" class="my-4 d-flex justify-content-between">

        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">Items</span>
            <select class="form-select" id="validationDefault04"  required>
      <option selected disabled value="<?=$item_id?>">Select One Of The Items</option>
      <option> <?php foreach($data->items as $item):?>
                <option value="<?=$item->id?>"><?=$item->item_name?></option>
                <?php endforeach; ?> 
    </select>
 
        </div>

        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">Quantity</span>
            <input id="quantity"id="quantity" type="number" class="form-control" aria-describedby="addon-wrapping" min="0">
        </div>

        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">Price (JOD)</span>
            <input id="selling_price" name="selling_price" type="number" class="form-control" aria-describedby="addon-wrapping" min="0">
        </div>
        <input id="total" type="hidden" name="total">
        <button id="add" class="btn btn-success">Add</button>

    </form>





<table class="table table-hover">
    <thead>
        <tr>
            
            <th scope="col">Item</th>
            <th scope="col">Quantity</th>
            <th scope="col">Price Per Unit</th>
            <th scope="col">Total</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <td>updeate</td>

    </tbody>
</table>



</div>
<script src="https://code.jquery.com/jquery-3.6.2.js" integrity="sha256-pkn2CUZmheSeyssYw3vMp1+xyub4m+e+QK4sQskvuo4=" crossorigin="anonymous"></script>
<script>
    // let itemId=null;
    // let itemPrice=null;
    // let itemQuantity=null;
    let currentId=<?=$_SESSION['user']['user_id']?>;
    // let counter=1;
    $('#add').click(function(e) {
        e.preventDefault();
        let data = {
            item_id:$('#item_id').val(),
            quantity:$('#quantity').val(),
            selling_price:$('#selling_price').val(),
            total:$('#quantity').val()*$('#selling_price').val(),
        };
        $.ajax({
            type: "post",
            url: "http://htu.local/api/transactions/create",
            data: JSON.stringify(data),
            success: function(response) {
                alert('done')
            },
            error: function(e) {
                alert('not done');
            }
        });
        $.ajax({
            type: "get",
            url: "http://htu.local/api/transactions",
            success: function(response) {
                response.body.forEach(element => {
                    $('tbody').append(`
                    <tr>
        <td>${element.item_id}</td>
        <td>${element.quantity}</td>
        <td>${element.selling_price}</td>
        <td>${element.total}</td>
        <td>${element.updeate}</td>
    </tr>
                    
                    `);
                });
            }
        });
    });
    function get_price(){
        let selling_price= new Item;

    }

    // $('#add').click(function(e) {
    //     e.preventDefault();
    //     let data = {
    //         item_id: $('#item_id').val(),
    //         quantity: $('#quantity').val(),
    //         total:$('#total').val(),
    //     };
    //     $.ajax({
    //         type: "post",
    //         url: "http://pos.local/api/transactions/create",
    //         data: JSON.stringify(data),
    //         success: function(response) {
    //             alert('done')
    //         },
    //         error: function(e) {
    //             alert('not done');
    //         }
    //     });
    // });
</script>



<!-- ===============================================================================================================================
================ -->
<!-- 
    <div class="d-flex justify-content-between">
        <h1>HTU POS System</h1>
        <div>
            <strong>Total Sales</strong>
            <span id="total-sales">0</span>
        </div>
    </div>
    <hr>
<form id="userInputContainer" action="/osb" method="POST">
    <Table>
        <tr>
            <th>enter item_id</th>
            <td><input type="text" name="item_id" id="id"></td>
        </tr>
        <tr>
            <th>enter quantity</th>
            <td><input type="text" name="quantity" id="quantity"></td>
        </tr>
        <tr>
            <th>enter total</th>
            <td><input type="text" name="total" id="total"></td>
        </tr>
    </Table>
    <input type='hidden' name='action' value='create' />
        <input type='button' value='Submit' id="submit" />
        <input type="reset" value="Reset" class="reset-org">

        <a href='index.php'>Back to index</a> 
</form>
    < <form action="/api/transactions/create" id="userInputContainer" class=" d-flex justify-content-between" method="POST">

        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">Items</span>
        
            
            <select id="items" name="item_id" class="form-select" onchange="showUser(this.value)">
        <option selected>Select One Of The Items</option>
            <?php foreach($data->items as $item):?>
                <option value="<?=$item->item_id?>"><?=$item->item_name?></option>
                <?php endforeach; ?> 
               </select>  
          