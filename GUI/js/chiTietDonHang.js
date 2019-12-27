function loadModalChiTiet(MaDonHang){
    $.ajax({
        url : "GUI/modules/ajaxChiTietDonHang.php",
        type : "post",
        dataType:"text",
        data : {
             id : MaDonHang
        },
        success : function (result){
            $('#my-details-tbody').html(result);
        }
    });
}
