function addToCart() {

    var color = $('input[name=color]:checked').val();
    var size= $('input[name=size]:checked').val();
    var pid= $('#product_id').text();
    var pname= $('#pro_name').html();
    var pprice = $('#product_price').html();
    var qty=$("#qtyToBeAddedInCart").val();

    $.ajax({
        type: "POST",
        url: "http://127.0.0.1:8000/product/addToCart",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            color : color,
            size : size,
            pid : pid,
            qty: qty,
            pname: pname,
            pprice: pprice
        },
        success: function (result) {
          console.log(result);
        }
    });

}