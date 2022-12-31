<h1>Hi from AJAX Revision</h1>

<div>
    <button id="add">ADD</button>
    
</div>

<div>
    <form id="posts_form">
     <!-- <input id="form-item-id" type="hidden" name="item_id" value="1"> -->
        <label>item_id</label>
        <input id="item_id" type="text" name="item_id">
        <label>quantity</label>
        <input id="quantity" type="text" name="quantity">
        <label>total</label>
        <input id="total" type="text" name="total">
    </form>
</div>
<div id="posts-container">
</div>
<script src="https://code.jquery.com/jquery-3.6.2.js" integrity="sha256-pkn2CUZmheSeyssYw3vMp1+xyub4m+e+QK4sQskvuo4=" crossorigin="anonymous"></script>
<script>
    $('#add').click(function(e) {
        e.preventDefault();
        let data = {
            item_id: $('#item_id').val(),
            quantity: $('#quantity').val(),
            total:$('#total').val(),
        };
        $.ajax({
            type: "post",
            url: "http://pos.local/api/transactions/create",
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
            url: "http://pos.local/api/transactions",
            success: function(response) {
                response.body.forEach(element => {
                    $('#posts-container').append(`
                    <div>
                        <h2>${element.item_id}</h2>
                        <p>${element.quantity}</p>
                        <p>${element.total}</p>
                    </div>
                    `);
                });
            }
        });
    });
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