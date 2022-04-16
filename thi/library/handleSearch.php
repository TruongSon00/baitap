<?php
require_once('connect.php');
$sql = 'SELECT title from library';

$sname = strtolower($_REQUEST['sname']);
$len = strlen($sname);
$result = [];
foreach ($conn->query($sql) as $row) {
    $name = strtolower($row['title']);
    if (stristr($sname, substr($name, 0, $len)) || $sname === '') {
        $sqlsub = 'SELECT * from library where title = ?';
        $stm = $conn->prepare($sqlsub);
        $stm->bindParam(1, $row['title']);
        $stm->execute();
        $result[] = $stm->fetch();
    }
}
?>

<tr>
    <th>Book Id</th>
    <th>Auth Id</th>
    <th>Title</th>
    <th>ISBN</th>
    <th>Public year</th>
    <th>Avaiable</th>

</tr>
<?php
if ($result != [])
    foreach ($result as $row) {
        echo
        "<tr>
                    <td>" . $row['bookid'] . "</td>
                    <td>" . $row['authorid'] . "</td>
                    <td>" . $row['title'] . "</td>
                    <td>" . $row['ISBN'] . "</td>
                    <td>" . $row['pub_year'] . "</td>
                    <td>" . $row['avaiable'] . "</td>                    
                </tr>";
    }
else
    echo    ' <h3>Không có sách phu hợp</h3>';
?>