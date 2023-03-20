<?php
include 'conn.php';
	
$output = array();

$sql = "SELECT * FROM `tblbanker`";

$totalQuery = mysqli_query($conn, $sql);
$total_all_rows = mysqli_num_rows($totalQuery);

$columns = array(
    0 => 'Firstname',
    1 => 'Lastname',
    2 => 'Email',
    4 => 'Date_created',
    5 => 'Status',
  
);

$search_value = isset($_POST['search']['value']) ? $_POST['search']['value'] : '';

$sql_params = array();
if (!empty($search_value)) {
    $sql .= " WHERE Firstname LIKE ? OR Lastname LIKE ?";
    $sql_params[] = "%" . $search_value . "%";
    $sql_params[] = "%" . $search_value . "%";
}

if (isset($_POST['order'])) {
    $column_name = $_POST['order'][0]['column'];
    $order = $_POST['order'][0]['dir'];
    $sql .= " ORDER BY " . $columns[$column_name] . " " . $order;
} else {
    $sql .= " ORDER BY Id DESC";
}

$start = isset($_POST['start']) ? $_POST['start'] : 0;
$length = isset($_POST['length']) ? $_POST['length'] : -1;
if ($length != -1) {
    $sql .= " LIMIT ?, ?";
    $sql_params[] = (int)$start;
    $sql_params[] = (int)$length;
}

$stmt = mysqli_prepare($conn, $sql);
if (!empty($sql_params)) {
    $types = str_repeat('s', count($sql_params));
    mysqli_stmt_bind_param($stmt, $types, ...$sql_params);
}
mysqli_stmt_execute($stmt);
$query = mysqli_stmt_get_result($stmt);
$count_rows = mysqli_num_rows($query);
$data = array();
while ($row = mysqli_fetch_assoc($query)) {
    $sub_array = array();

    $sub_array[] = $row['Firstname'];
    $sub_array[] = $row['Lastname'];
    $sub_array[] = $row['Email'];
    $sub_array[] = $row['Date_created'];
    $sub_array[] = $row['Status'];
    $sub_array[] = '<a href="javascript:void();"  data-id="' . $row['Id'] . '"   class="btn btn-info btn-sm edit" > <i class="fa fa-edit"></i>  Edit</a>';
    $data[] = $sub_array;
}

$output = array(
    'draw' => intval($_POST['draw']),
    'recordsTotal' => $count_rows,
    'recordsFiltered' => $total_all_rows,
    'data' => $data,
);
echo json_encode($output);


?>