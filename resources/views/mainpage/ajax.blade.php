<script>

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

@if(session()->has('message'))
    toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.success("{{ session()->get('message') }}");
@endif

@if(session()->has('warning'))
    toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.warning("{{ session()->get('warning') }}");
@endif

$('#resend').click(function(e){

    var user_id = $('#user_id').val();

    $.ajax({
        url: '/resendcode',
        type: 'POST',
        data: {
            user_id:user_id,
        },
        dataType: 'HTML',
        success: function(response){

        }
    });

    var timer2 = "2:00";
    $('#codenotreceived').hide();
    var interval = setInterval(function() {

        var timer = timer2.split(':');
        $('#codecountdown').show();

        var minutes = parseInt(timer[0], 10);
        var seconds = parseInt(timer[1], 10);
        --seconds;
        minutes = (seconds < 0) ? --minutes : minutes;
        if (minutes < 0) clearInterval(interval);
        seconds = (seconds < 0) ? 59 : seconds;
        seconds = (seconds < 10) ? '0' + seconds : seconds;
        //minutes = (minutes < 10) ?  minutes : minutes;
        $('#codecountdown').html("<strong id='codecountdown'>You can request a code again in " + minutes + ":" + seconds);
        timer2 = minutes + ':' + seconds;
        if(timer2 == "-1:59"){
            $('#codecountdown').hide();
            $('#codenotreceived').show()
        }
    }, 1000);

});

$('#addtocart').click(function(e){

    e.preventDefault();

    let quantity = parseInt($('#quantity').val());
    let productStock = parseInt($('#currentproductstock').val());
    let productID = $('#productID').val();
    let productName = $('#productname').val();
    let productCategory = $('#productcategory').val();
    let productColor = $('#currentproductcolor').val();
    let productSize = $('#currentproductsize').val();

    if(quantity <= 0){
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "You cannot put zero or a negative number",
        });
    }
    else{
        if(quantity > productStock){
            Swal.fire({
                icon: "error",
                title: "Error",
                text: "The quantity entered is greater than the product stock (" + productStock + ")"
            });
        }
        else{
            Swal.fire(
                'Success!',
                'Successfully added this item on your cart.',
                'success'
            ).then((confirmCart) => {
                if(confirmCart){
                    $.ajax({
                        url: '/addtocart',
                        type: 'POST',
                        data: {
                            productID:productID,
                            quantity:quantity,
                            productName:productName,
                            productCategory:productCategory,
                            productColor:productColor,
                            productSize:productSize
                        },
                        dataType: 'HTML',
                        success: function(response){
                            window.location.href = window.location.href;
                        }
                    });
                }
            });
        }
    }
});

$('.editproductcart').click(function(e){

    let cartID = $(this).attr("id")
    let cartProductQuantity = $("." + cartID + "-quantity").val();
    let cartProductStock = $("#" + cartID + "-stock").val();
    let actualQuantity = $("#" + cartID + "-actualquantity").val();

    cartProductStock = parseInt(cartProductStock);
    cartProductQuantity = parseInt(cartProductQuantity);
    actualQuantity = parseInt(actualQuantity);


    if(cartProductQuantity <= 0){
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "You cannot put zero or a negative number",
        });
    }
    else{
        if(cartProductQuantity > cartProductStock){
            Swal.fire({
                icon: "error",
                title: "Error",
                text: "The quantity entered is greater than the product stock (" + cartProductStock + ")"
            });
        }
        else{
            if(actualQuantity != cartProductQuantity){
                Swal.fire(
                    'Success!',
                    'Successfully edit this item on your cart.',
                    'success'
                ).then((confirmCart) => {
                    if(confirmCart){
                        $.ajax({
                            url: '/editproductcart',
                            type: 'POST',
                            data: {
                                cartID : cartID,
                                cartProductQuantity : cartProductQuantity
                            },
                            dataType: 'HTML',
                            success: function(response){
                                window.location.href = window.location.href;
                            }
                        });
                    }
                });
            }
        }
    }

});

$('.deleteproductcart').click(function(e){

    let cartID = $(this).attr("id");

    Swal.fire({
        title: 'Are you sure?',
        text: "you want to delete this item on your cart?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes!'
    }).then((willDelete) => {
        if (willDelete.isConfirmed) {
            Swal.fire(
                'Success!',
                'This item is now removed from your cart!.',
                'success'
            ).then((confirmdelete) => {
                if(confirmdelete){
                    $.ajax({
                        url: '/deletecartproduct',
                        type: 'POST',
                        data: {
                            cartID : cartID,
                        },
                        dataType: 'HTML',
                        success: function(response){
                            window.location.reload();
                        }
                    });
                }
            });
        
        }
    }); 
});

$('#province').on('change', function(){

    let province_code = this.value;

    $.ajax({
        url: '/getmunicipality',
        type: 'POST',
        data: {
            province_code : province_code
        },
        dataType: 'HTML',
        success: function(response){
            
            let data = $.parseJSON(response);

            $('#municipality').empty();
            $('#barangay').empty();
            $('#municipality').append("<option disabled selected>Municipality</option>");
            $('#barangay').append("<option disabled selected>Barangay</option>");
            $('#municipality').removeAttr('disabled');
            $.each(data, function(index, municipality) {
            // Access each municipality's properties
                $('#municipality').append("<option value='" + municipality.municipality_code + "'>" + municipality.municipality_name +"</option>");
            });
        }
    });
    
});

$('#municipality').on('change',function(){

    let province_code = $('#province').val();
    let municipality_code = $('#municipality').val();

    $.ajax({
        url: '/getbarangay',
        type: 'POST',
        data: {
            province_code : province_code,
            municipality_code : municipality_code
        },
        dataType: 'HTML',
        success: function(response){
            
            let data = $.parseJSON(response);

            $('#barangay').empty();
            $('#barangay').append("<option disabled selected>Barangay</option>");
            $('#barangay').removeAttr('disabled');
            $.each(data, function(index, barangay) {
            // Access each municipality's properties
                $('#barangay').append("<option value='" + barangay.barangay_id + "'>" + barangay.barangay_name +"</option>");
            });
        }
    });
})

$('.cancelitem').click(function(e){

    modal.classList.add("show");

    let orderID = $(this).attr("id");

    $('#product-order').val(orderID);

});

$('.ordercancel').click(function(e){

    e.preventDefault();

    let productOrder = $('#product-order').val();
    let cancelReason = $('#cancelreason').val();

    Swal.fire({
        title: 'Are you sure?',
        text: "you want to cancel this item on your order?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes!'
    }).then((willCancel) => {
        if (willCancel.isConfirmed) {
            Swal.fire(
                'Success!',
                'This item is now cancelled from your order!.',
                'success'
            ).then((confirmCancel) => {
                if(confirmCancel){
                    $.ajax({
                        url: '/cancelitemorder',
                        type: 'POST',
                        data: {
                            productOrder : productOrder,
                            cancelReason : cancelReason
                        },
                        dataType: 'HTML',
                        success: function(response){
                            window.location.reload();
                        }
                    });
                }
            });
        
        }
    }); 
})

    const modal = document.querySelector(".modal");
    const closeModalBtn = document.querySelector(".close-btn");
    const closeBtnModal = document.querySelector(".closemodal");

    closeModalBtn.addEventListener("click", () => {
        modal.classList.remove("show");
    });

    closeBtnModal.addEventListener("click", () => {
        modal.classList.remove("show");
    });
</script>