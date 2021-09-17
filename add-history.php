<?php
include("connect.php");
if(isset($_POST['add-shipment-history'])){
  $history_tracking_id = $_POST['history_tracking_id'];
  $history_date = $_POST['history_date'];
  $history_time = $_POST['history_time'];
  $history_location = $_POST['history_location'];
  $history_statu = $_POST['history_statu'];
  $history_remarks = $_POST['history_remark'];
  $created_at = time();

  $update = "UPDATE shipments SET statu = '$history_statu' WHERE tracking_id = '$history_tracking_id'";

  $insert = "INSERT into shipments_history (tracking_id, history_date, history_time, history_location, remark, statu, created_at) VALUES ('$history_tracking_id', '$history_date', '$history_time', '$history_location', '$history_remarks', '$history_statu', '$created_at')";


if ($myConn->query($insert) && $myConn->query($update)  === TRUE) { ?>
  <script type="text/javascript">
      alert("New Shipment History Added");
      window.location = "view-all.php";
  </script>
<?php } else {
echo "Error: " . $insert . "<br>" . $myConn->error;
}
}
?>