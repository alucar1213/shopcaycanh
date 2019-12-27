new Chart(document.getElementById("pie-chart"), {
    type: 'pie',
    data: {
        labels: ["Sen đá", "Tiểu cảnh", "Xương rồng"],
        datasets: [{
            label: "cây",
            backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f"],
            data: [$('#senda').text(),$('#tieucanh').text(),$('#xuongrong').text()]
        }]
    },
    options: {
        title: {
            display: true,
            text: 'Số lượng sản phẩm bán ra của caycanhstore(số lượng sản phẩm)'
        }
    }
});

new Chart(document.getElementById("thongkechung"),{
    type:'bar',
    data:{
        labels:["Tổng lượt xem", "Tổng số lượng bán ra","Tổng số lượng tồn"],
        datasets:[
            {
                label:"người(hoặc cây)",
                backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f"],
                data: [$('#soluotxem').text(),$('#tongbanra').text(),$('#soluongton').text()]
            }
        ]
    },
    options:{
        legend:{display:false},
        title:{
            display:true,
            text:'Bảng so sánh số lượt xem, số lượng bán ra và số lượng tồn'
        }
    }
});