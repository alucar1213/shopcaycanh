function registered() {
    var register = document.getElementById("register-form");
    var login = document.getElementById("login-form");
    register.style.display = "block";
    login.style.display = "none";
}

function login() {
    var register = document.getElementById("register-form");
    var login = document.getElementById("login-form");
    register.style.display = "none";
    login.style.display = "block";
}

$('.message a').click(function () {
    $('form').animate({
        height: "toggle",
        opacity: "toggle"
    }, "slow");
});


$('.scroll-bottom').click(
    function (e) {
        $('html, body').animate({
            scrollTop: $(document).height()
        }, 800);
    }
);
/*----------------------poppup datails-------------------*/ 
$(".btnDetails").click(function () {
    var image = $(this).data('image');
    var price = $(this).data('price');
    var name = $(this).data('name');
    var price_discount = $(this).data('price_discount');
    var detail = $(this).data('detail');
    var id = $(this).data('id');
    $(".name_product").html(name);
    $(".price_product i").html(price + " VNĐ");
    $(".price_product span").html(price_discount + " VNĐ");
    $(".product p").html(detail);
    $(".img_details img").attr("src", image);
    $("#id_product").html(id);
    $(".quantity input").val(1);
});
/* --------------------đổi phí ship ---------------*/
$(document).ready(function () {
    $('input[name="shipping"]').change(function () {
        if ($('#shipping-1').prop('checked')) {
            $("#ship-fee").html("Miễn phí");
        } else {
            $("#ship-fee").html("20000₫");          
        }
        updateTotalPrice();
    });
});

$("#logout-destop,#logout").click(function(){
    localStorage.removeItem('cart');
    console.log(1);
});