<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách Sách</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Danh sách Sách</h1>
    <table>
        <tr>
            <th>STT</th>
            <th>Tên sách</th>
            <th>Nội dung sách</th>
        </tr>
        <?php

         $books = array(
            array("Tensach1", "Noidung1"),
            array("Tensach2", "Noidung2"),
            // ...
            array("Tensach100", "Noidung100")
        );
        // Hiển thị dữ liệu từ mảng
        foreach ($books as $index => $book) {
            echo "<tr>";
            echo "<td>" . ($index + 1) . "</td>";
            echo "<td>" . htmlspecialchars($book[0]) . "</td>";
            echo "<td>" . htmlspecialchars($book[1]) . "</td>";
            echo "</tr>";
        }

       
        ?>


    </table>



</body>
</html>
