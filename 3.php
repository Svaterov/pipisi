<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Таблица умножения</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Таблица умножения от 2 до 10</h1>
    <table>
        <thead>
            <tr>
                <th>×</th>
                <?php for ($i = 2; $i <= 10; $i++): ?>
                    <th><?php echo $i; ?></th>
                <?php endfor; ?>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 2; $i <= 10; $i++): ?>
                <tr>
                    <th><?php echo $i; ?></th>
                    <?php for ($j = 2; $j <= 10; $j++): ?>
                        <td><?php echo $i * $j; ?></td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
</body>
</html>