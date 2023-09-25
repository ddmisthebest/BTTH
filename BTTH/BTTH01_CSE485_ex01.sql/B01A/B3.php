<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng Khóa học</title>
    <style>
        table{
            border-collapse: collapse;
            border: 1px solid black;
        }

        th {
            font-weight: bold;
        }

        td {
            border: 1px solid black;
        }

        
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Tên khóa học</th>
        </tr>
        <?php
        $arrs = ['PHP', 'HTML', 'CSS', 'JS'];

        // Duyệt qua mảng $arrs và hiển thị dữ liệu trong bảng
        for ($i = 0; $i < count($arrs); $i++) {
            echo "<tr>";
            echo "<td>" . $arrs[$i] . "</td>"; // Tên khóa học
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
