<!DOCTYPE html>
<html>
<head>
    <title>Tic-Tac-Toe Game</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            width: 50px;
            height: 50px;
            text-align: center;
            font-size: 24px;
            border: 1px solid #000;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Tic-Tac-Toe Game</h1>
    <table>
    <?php
        $board = array(
            array(' ', ' ', ' '),
            array(' ', ' ', ' '),
            array(' ', ' ', ' ')
        );
        $currentPlayer = 'X';

        if (isset($_POST['move'])) {
            $row = $_POST['row'];
            $col = $_POST['col'];

            if ($board[$row][$col] == ' ') {
                $board[$row][$col] = $currentPlayer;
                $currentPlayer = ($currentPlayer == 'X') ? 'O' : 'X';
            }
        }

        for ($i = 0; $i < 3; $i++) {
            echo '<tr>';
            for ($j = 0; $j < 3; $j++) {
                echo '<td>';
                if ($board[$i][$j] == ' ') {
                    echo '<form method="post">';
                    echo '<input type="hidden" name="row" value="' . $i . '">';
                    echo '<input type="hidden" name="col" value="' . $j . '">';
                    echo '<input type="hidden" name="move" value="1">';
                    echo '<input type="submit" value="&nbsp;">';
                    echo '</form>';
                } else {
                    echo $board[$i][$j];
                }
                echo '</td>';
            }
            echo '</tr>';
        }
    ?>
    </table>
</body>
</html>
