<!-- <h1 class="text-center">Silling item</h1>
 <div class>
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

        <button id="get-item" class="btn btn-success">Add</button>

    </form>
 </div>

<hr>
<table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Item Name</th>
      <th scope="col">quantity</th>
      <th scope="col">Total</th>
     
    </tr>
  </thead>
  <tbody>
    
  <?php foreach ($data->transactions as $transaction) : ?>            
    <tr>
      <th scope="row">1</th>
      <td><?=$transaction->item_id?></td>
      <td><?=$transaction->quantity?></td>
      <td><?=$transaction->total?></td>
      <td><?=$transaction->	created_at?></td>
   
    <?php endforeach?>
  </tbody>
</table> -->
