$(window).ready(function() {
    var page = (window.location.href).split('?p=')[1][0];

    //index.php?a=7 không làm gì 
    if(page == 7)
        return;

    //index.php?a = 5 xóa giỏ hàng
    if(page == 5)
    {
        localStorage.removeItem('cart');
        return;
    }

    //index.php?a = 4 không cho xem giỏ hàng
    if( page == '4'){
        $("#my-cart *").remove();
        var row = '<div class="alert alert-danger" role="alert" id="my-cart-empty-message">Bạn không thể xem giỏ hàng khi đang thánh toán</div>';
        $("#my-cart").append(row);
    }

    //load dữ liệu trong giỏ hàng vào bảng sản phẩm trong check out
    if(cartItems.length != 0 )
    {
        $("#check-out-empty-message").remove();
        var total = 0;
        cartItems.forEach(function(item){
            //thêm sản phảm vào bảng sản phẩm ở trang checkout
            var row = '<tr id="item' + item.id + '" ><td class="thumb"><img src="'+item.img+'" alt=""></td><td class="details"><a href="#">'+ item.name +'</a></td><td class="price text-center"><strong>'+ item.price +'₫</strong><br><del class="font-weak"><small></small></del></td><td class="qty text-center"><input class="input" type="number" value="'+ item.quantity +'" disabled></td><td class="total text-center"><strong class="primary-color">'+item.quantity * item.price+'₫</strong></td></tr>'
            $("#product-table tbody").append(row);       
            total += item.quantity * item.price;  

            //input hidden chứa id các sản phẩm trong giỏ hàng    
            var row1 = '<input type="hidden" name="IdProduct" value="'+item.id+'"></input>';
            $("#dat-hang").append(row1);
        });
        $(".sub-total").html(total+"₫");       
        $("th.total").html(total+"₫");       
    }
    // nếu ko có sản phẩm trong giỏ hàng thì xóa bảng
    else{
        $("#product-table").remove();
    }
});

