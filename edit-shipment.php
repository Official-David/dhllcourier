<?php
include("connect.php");

if(isset($_POST['save'])){
  $track_id = $_POST['track_id'];

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
 $ex_delivery_date = $_POST['ex_delivery_date'];
 $depature_time = $_POST['depature_time'];
 $pick_up_date = $_POST['pick_up_date'];
 $pick_up_time = $_POST['pick_up_time'];
 $comments = $_POST['comments'];

$update = "UPDATE shipments SET shi_info_name = '$shi_name', shi_info_email = '$shi_email', shi_info_phone = '$shi_phone', shi_info_address = '$shi_address', rec_info_name = '$rec_name', rec_info_email = '$rec_email', rec_info_phone = '$rec_phone', rec_info_address = '$rec_address', origin = '$origin', package = '$package', statu = '$statu', destination = '$destination', carrier = '$carrier', type_of_shipment =  '$type_of_shipment', total_weight = '$total_weight', shipment_mode = '$shipment_mode', product = '$product', Qty = '$qty', payment_mode = '$payment_mode',expected_delivery_date = '$ex_delivery_date', departure_time = '$depature_time', pick_up_date = '$pick_up_date', pick_up_time = '$pick_up_time', comments = '$comments' WHERE tracking_id = '$track_id'";
$ans = mysqli_query($myConn, $update);
                                ?>
                                <script type="text/javascript">
      alert("Updated Successfully");
      window.location = "view-all.php";
  </script>
<?php
}


if(isset($_POST['delete'])){
$tracking_id = $_POST['tracking_id'];
$delete = "DELETE FROM shipments WHERE tracking_id = '$tracking_id'";
if ($myConn->query($delete) === TRUE) {
  // echo $tracking_id;
  // echo "helllllo";
  ?>

  <script type="text/javascript">
      alert("Deleted Successfully");
      window.location = "view-all.php";
  </script>

<?php } else {

echo "Error: " . $delete . "<br>" . $myConn->error;
echo $tracking_id;
}
}














?>