<?php
$conn = mysqli_connect("localhost", "root", "", "bubt_project");

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM routine WHERE rno = $id";
    $result = mysqli_query($conn, $sql);

    if ($row = mysqli_fetch_assoc($result)) {
        $pdfFile = "../routines/{$row['routine']}";

        header('Content-type: application/pdf');
        header('Content-Disposition: inline; filename="' . $row['routine'] . '"');
        header('Content-Transfer-Encoding: binary');
        header('Accept-Ranges: bytes');
        @readfile($pdfFile);
        exit;
    }
}

mysqli_close($conn);
?>

