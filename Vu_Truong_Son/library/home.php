<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body>
    <div class="header">
        <h1>A Fancy Table</h1>

        <form action="">
            <input type="text" name="search" placeholder="Search..." oninput="handleSearch(this.value)">
            <button type="submit"><i class="fa fa-search"></i></button>

        </form>
    </div>
    <table id="books">
        <tr>
            <th>Book Id</th>
            <th>Auth Id</th>
            <th>Title</th>
            <th>ISBN</th>
            <th>Public year</th>
            <th>Avaiable</th>

        </tr>

        <?php
        require_once('connect.php');
        $sql = 'SELECT * from library';
        $result = $conn->query($sql);

        if ($result->rowCount() === 0)
            echo '<h3>chua co sach de hien thi</h3>';
        else
            while ($row = $result->fetch()) {
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

        ?>

    </table>

    <script>
    function handleSearch(val) {

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            document.getElementById("books").innerHTML = this.responseText;
        };
        xmlhttp.open("GET", "handleSearch.php?sname=" + val, true);
        xmlhttp.send();

    }
    </script>
</body>

</html>