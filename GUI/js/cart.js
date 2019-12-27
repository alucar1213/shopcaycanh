var cartItems = [];
if(localStorage.getItem("cart") == null)
    localStorage.setItem('cart', '[]');

$("#add-to-cart").click(function () {
    $("#my-cart-empty-message").remove();
    if(cartItems.length == 0 ){
        var row = '<Div id="total-price" style="font-weight:bold; font-size: 20px">Tổng thành tiền: <span>0₫</span></Div>';
        $("#my-cart").append(row);
    }
    
    var idProduct = $("#id_product").html();  
    var quantityProduct = $(".quantity input").val();
    if(quantityProduct > 12){
        alert("Không mua quá 12 sản phẩm");
        $(".quantity input").val(1);
        return;
    }
    if(quantityProduct <= 0){
        alert("Số lượng sản phẩm mua không được nhỏ hơn 0");
        $(".quantity input").val(1);
        return;
    }
    //Kiểm tra xem sản phẩm đã trong giỏ hàng chưa
    var index = cartItems.findIndex(function(item){
        return item.id == idProduct ;
    });

    if( index == -1 ){
        insertItem();
    }  
    if(index != -1)
        updateItem(index,idProduct,quantityProduct);
    
})

function insertItem(){
    var idProduct = $("#id_product").html();
    var price = $(".price_product i").html();
    var image = $(".img_details img").attr("src");
    var idProduct = $("#id_product").html();
    var quantityProduct = $(".quantity input").val();
    var name = $(".name_product").html();
    price = parseInt(price.split(' ')[0]);
    quantityProduct = parseInt(quantityProduct);
    var item = {
        id: idProduct,
        price: price,
        name: name,
        quantity: quantityProduct,
        img: image
    };
    cartItems.push(item);
    var row = '<tr id="itemCart' + idProduct + '" style="line-height: 40px; "><td ><img width="40px" height="40px" src="' + image + '"></td><td class="name" style="width: 120px">' + name + '</td><td class = "price">' + price + '₫</td><td><input type="number" min="1" step="1" class="quantity qty-text" onchange="updateInCart('+idProduct+')" value="' + quantityProduct + '" style="width:50px;height: 30px;"></td><td class = "total_price">' + price * quantityProduct + '₫</td><td style="width: 30px; height: 30px;"><button type="button"  onclick="removeItem(' + idProduct + ')" class="btn btn-xs btn-danger my-product-remove" >X</button></td></tr>';
    $("tbody").append(row);
    updateTotalPrice()
}

function updateItem(index,id,quantityProduct){
    
    cartItems[index].quantity += parseInt(quantityProduct);

    var selectorQuantity = "#itemCart" + id + " .quantity";
    $(selectorQuantity).val(cartItems[index].quantity);
    var selectorTotalprice = "#itemCart" + id + " .total_price"
    $(selectorTotalprice).html(cartItems[index].quantity * cartItems[index].price + "₫");
    updateTotalPrice()
}

function updateInCart(id)
{
    var selectorQuantity = "#itemCart" + id + " .quantity";
    var selectorTotalprice = "#itemCart" + id + " .total_price";
    var quantity =  $(selectorQuantity).val();

    var index = cartItems.findIndex(function(item){
        return item.id == id;
    });

    //kiểm tra số lượng nhập vào có hợp lệ hay ko
    if( quantity < 0)
    {
        alert("Bạn không được nhập số lượng nhỏ hơn 1");
        $(selectorQuantity).val(cartItems[index].quantity);
        return;
    }

    //xóa sản phẩm khi nhập số lượng bằng 0
    if(quantity == 0)
    {
        removeItem(id);
    }

    //cập nhật lại giỏ hàng
    cartItems[index].quantity = $(selectorQuantity).val();
    $(selectorTotalprice).html(cartItems[index].quantity * cartItems[index].price + "₫");   
    updateTotalPrice()
}

function removeItem(id) {
    // item có id ra khỏi list giỏ hàng
    cartItems = cartItems.filter(item => item.id != id);
    var idItemInCart = "#itemCart" + id;
    var idItem = "#item"+id;// id item trong bảng gió hàng ở tranh check out
    $(idItemInCart).remove();
    $(idItem).remove();
    if (cartItems.length == 0) {
        //thêm thông báo ko có sản phẩm vào giỏ hàng
        var row = '<div class="alert alert-danger" role="alert" id="my-cart-empty-message">Không có sản phẩm</div>';
        $("#my-cart-table").append(row);     
        $("#total-price").remove();
    }
    updateTotalPrice()
}


function updateTotalPrice(){
    var totalPrice = 0;
    cartItems.forEach(function(item){
        totalPrice += (item.quantity * item.price);     
    })
    $("#total-price span").html(totalPrice + '₫');
    // cập nhật cartItem trong localStorage
    localStorage.setItem('cart', JSON.stringify(cartItems)); 

    //cập nhật giá của bảng giỏ hàng trong checkout
    $(".sub-total").html(totalPrice+"₫");
    var ship = $("#ship-fee").html();
    if( ship == "20000₫")
    totalPrice += 20000;
    $("th.total").html(totalPrice+"₫");   
}

// load sản phảm vào giỏ hàng 
$(window).ready(function() 
{
    //lấy dữ liệu từ local storege
    cartItems = JSON.parse(localStorage.getItem("cart"));
    if(cartItems.length != 0)
    {
        $("#my-cart-empty-message").remove();
        cartItems.forEach(function(item){
            var row = '<tr id="itemCart' + item.id + '" style="line-height: 40px; "><td ><img width="40px" height="40px" src="' + item.img + '"></td><td class="name" style="width: 120px">' + item.name + '</td><td class = "price">' + item.price + '₫</td><td><input type="number" min="1" step="1" class="quantity qty-text" onchange="updateInCart('+item.id+')" value="' + item.quantity + '" style="width:50px;height: 30px;"></td><td class = "total_price">' + item.price * item.quantity + '₫</td><td style="width: 30px; height: 30px;"><button type="button"  onclick="removeItem(' + item.id + ')" class="btn btn-xs btn-danger my-product-remove" >X</button></td></tr>';
            $("#my-cart-table tbody").append(row);
        });
        var row = '<Div id="total-price" style="font-weight:bold; font-size: 20px">Tổng thành tiền: <span>0₫</span></Div>';
        $("#my-cart").append(row);
        updateTotalPrice();
    }
});