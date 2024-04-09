<?php
$conn = mysqli_connect("localhost","root","","bubt_project");
 
$nid = $_POST['nid'];
 
$sql = "select * from notice where num=".$nid;
$result = mysqli_query($conn,$sql);
while( $row = mysqli_fetch_array($result) ){
?>
<table width='100%'>
<tr>
    <td width="300">
        <img src="../Notice_Image/<?php echo $row['notice_img']; ?>" height="800px" width="750px">
    </td>
</tr>
</table>
 
<?php } ?>