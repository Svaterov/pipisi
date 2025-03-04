<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Депозитный расчет</title>
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
    <h1>Результаты расчета депозита</h1>
    <table>
        <thead>
            <tr>
                <th>Год</th>
                <th>Сумма на депозит</th>
                <th>Прибыль</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $initial_amount = 300;
            $interest_rate = 0.20;
            $years = 20;

            for ($year = 1; $year <= $years; $year++) {
                $total_amount = $initial_amount * pow((1 + $interest_rate), $year);
                $profit = $total_amount - $initial_amount; 
                echo "<tr>
                        <td>{$year}</td>
                        <td>" . number_format($total_amount, 2, '.', '') . "</td>
                        <td>" . number_format($profit, 2, '.', '') . "</td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>