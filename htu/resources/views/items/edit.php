<h1>Edit Post</h1>

<form action="/items/update" method="POST" class="w-50">
    <input type="hidden" name="id" value="<?= $data->item->id ?>">
    <div class="mb-3">
        <label for="item-title" class="form-label"> Item Name</label>
        <input type="text" class="form-control" id="item-title" name="item_name" value="<?= $data->item->item_name?>">
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
    <!-- <div class="my-3">
        <label for="post-tags">Tags</label>
        <select class="form-select" multiple aria-label="multiple select example" name="tags[]">
            <?php //foreach ($data->post->tags as $tag) : ?>
                 <option value="<?=$tag->id// ?>"><?=$tag->name?></option> -->
            <!--endforeach; ?> -->
        </select>
    </div> -->

    <button type="submit" class="btn btn-warning mt-4">Update</button>
</form>