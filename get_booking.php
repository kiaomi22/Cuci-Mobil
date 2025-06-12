// get_booking.php
include 'koneksi.php';

$query = mysqli_query($conn, "SELECT * FROM booking");
$data = mysqli_fetch_all($query, MYSQLI_ASSOC);
echo json_encode($data);
