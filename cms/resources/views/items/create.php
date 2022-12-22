<h1>Create Post</h1>

<form action="/items/store" method="POST" class="w-50">
 
    <div class="mb-4">
        <label for="post-title" class="form-label">Iteam Name</label>
        <input type="text" class="form-control" id="post-title" name="item_name">
    </div>

    <div class="mt-4" >
    <label class="form-label" for="currency-field"><strong>Cost</strong></label>
    <input type="text"  class="form-control" name="cost" id="currency-field" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$"
    value="" data-type="currency" placeholder="$1,000,000.00">
    </div>

    <div class="mt-4">
    <label class="form-label" for="currency-field"><strong>Silling Price</strong></label>
    <input type="text" name="selling_price"class="form-control" id="currency-field" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$"
    value="" data-type="currency" placeholder="$1,000,000.00">
    </div>

    <div class="mt-4">
        <label for="post-title" class="form-label"><strong>Quntity</strong></label>
        <input type="number" class="form-control" id="post-title" name="stock_availabel_quntity">
    </div>
    <button type="submit" class="btn btn-success mt-4">Create</button>
</form>