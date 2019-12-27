<?php
$a = 0;
if (isset($_GET["a"])) {
    $a = $_GET["a"];
}
$b = 50;
if( $a == 5 ){
    $b = 100;
}
?>

<?php
 echo '<div id="progress-bar">
    <div class="row" style="width: 550px;">
        <div class="col-4">Mua Hàng</div>
        <div class="col-4 text-center">Thanh Toán</div>
        <div class="col-4 text-right pr-0">Hoàn Tất</div>
    </div>
    <div class="row" id="number">
        <div class="col-4 h4"><span>1</span></div>
        <div class="col-4 h4 text-center"><span>2</span></div>
        <div class="col-4 h4 text-right "><span>3</span></div>
    </div>
    <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: '. $b .'%" aria-valuenow="50" aria-valuemin="0"
             aria-valuemax="100">
        </div>
    </div>
</div>'
?>
