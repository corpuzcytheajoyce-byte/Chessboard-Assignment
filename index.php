
<!DOCTYPE html>
<html>
<head>
    <title>Chess Board</title>
</head>
<body>
    <h2>CORPUZ</h2>

    <table width="270px" cellspacing="0" cellpadding="0" border="1">
        <?php
        for ($row = 1; $row <= 8; $row++) {
            echo "<tr>";
            for ($col = 1; $col <= 8; $col++) {
                // If sum of row and col is even, color is white, else black
                $total = $row + $col;
                if ($total % 2 == 0) {
                    echo "<td bgcolor='#FFFFFF' height='30px' width='30px'></td>";
                } else {
                    echo "<td bgcolor='#000000' height='30px' width='30px'></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
