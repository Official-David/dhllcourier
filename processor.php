<?php
include("connect.php");

if(isset($_POST['make_shipment'])){
$shi_name = $_POST['shi_name'];
$shi_email = $_POST['shi_email'];
$shi_phone = $_POST['shi_phone'];
$shi_address = $_POST['shi_address'];
$rec_name = $_POST['rec_name'];
$rec_email = $_POST['rec_email'];
$rec_phone = $_POST['rec_phone'];
$rec_address = $_POST['rec_address'];
$origin = $_POST['origin'];
$package = $_POST['package'];
$statu = $_POST['statu'];
$destination = $_POST['destination'];
$carrier = $_POST['carrier'];
$type_of_shipment = $_POST['type_of_shipment'];
$total_weight = $_POST['total_weight'];
$shipment_mode = $_POST['shipment_mode'];
$product = $_POST['product'];
$qty = $_POST['qty'];
$payment_mode = $_POST['payment_mode'];
$payment_mode = $_POST['payment_mode'];
$ex_delivery_date = $_POST['ex_delivery_date'];
$depature_time = $_POST['depature_time'];
$pick_up_date = $_POST['pick_up_date'];
$pick_up_time = $_POST['pick_up_time'];
$comments = $_POST['comments'];

$tracking_id = chr(rand(65,90)).rand(1000000000,9999999999);
$time = time();

$insert = "INSERT into shipments (shi_info_name, shi_info_email, shi_info_phone, shi_info_address, rec_info_name, rec_info_email, rec_info_phone, rec_info_address, origin, package, statu, destination, carrier, type_of_shipment, total_weight, shipment_mode, product, Qty, payment_mode,expected_delivery_date, departure_time, pick_up_date, pick_up_time, comments, tracking_id, created_at) VALUES ('$shi_name', '$shi_email', '$shi_phone', '$shi_address', '$rec_name', '$rec_email', '$rec_phone', '$rec_address', '$origin', '$package', '$statu', '$destination', '$carrier', '$type_of_shipment', '$total_weight', '$shipment_mode', '$product', '$qty', '$payment_mode', '$ex_delivery_date', '$depature_time', '$pick_up_date', '$pick_up_time', '$comments', '$tracking_id', $time)";
if ($myConn->query($insert) === TRUE) { ?>
  <script type="text/javascript">
      alert("New Shipment Added");
      window.location = "view-all.php";
  </script>
<?php } else {
?>
<script type="text/javascript">
    alert("Something Went Wrong!");
    window.location = "make-shipment.php";
</script>
<?php
}
}

?>