<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="/baseballsites/images/stadiums/stats.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Shane Bieber Statistics</title>
</head>

<body class="guardians">
<table >
    <th colspan="2"><h1>Shane Bieber</h1></th>
    
<tr>
    <td><img src="/baseballsites/images/guardians/shane.png" alt="Shane Bieber"></td>

</tr>

</table>

<table class="table" border="p">
    <tr>
        <th colspan="30">Players Statistics</th>
    </tr>
    <!-- Table headings-->
    <tr>
    <th>Year</th>
    <th>Age</th>
    <th>Tm</th>
    <th>Lg</th>
    <th>W</th>
    <th>L</th>
    <th>W/L%</th>
    <th>ERA</th>
    <th>G</th>
    <th>GS</th>
    <th>GF</th>
    <th>CG</th>
    <th>SHO</th>
    <th>SV</th>
    <th>IP</th>
    <th>H</th>
    <th>R</th>
    <th>ER</th>
    <th>HR</th>
    <th>BB</th>
    <th>IBB</th>
    <th>SO</th>
    <th>HBP</th>
    <th>BK</th>
    <th>WP</th>
    <th>BF</th>
    <th>ERA+</th>
    <th>FIP</th>
    <th>WHIP</th>
    <th>H9</th>
    <th>HR9</th>
    <th>BB9</th>
    <th>SO9</th>
    <th>SO/W</th>
    <th>Awards</th>
    </tr>
        <!--Where data will be placed-->
       
    <tr>
        
        <?php
        $connection = mysqli_connect("localhost","root","Sports4users1425*","sportssite");

        if ($connection->connect_error) {
            die("connection failed: " . $connection->connect_error);
        }

        $sql = "SELECT * FROM pitchers WHERE playerID = 'Shane Bieber'";
        $result = $connection->query($sql);

        if (!$result) {
            die("Invalid query: " . $connection->error);
        }

        while ($row = $result->fetch_assoc()) {

            echo"
            <td>" . $row["Year"] . "</td>
            <td>" . $row['Age'] . "</td>
            <td>" . $row['Tm'].  "</td>
            <td>" . $row['Lg']. "</td>
            <td>" . $row['W'].  "</td>
            <td>" . $row['L'] .  "</td>
            <td>" . $row['W-L%'] .  "</td>
            <td>" . $row['ERA'] . "</td>
            <td>" . $row['G'] . "</td>
            <td>" . $row['GS'] . "</td>
            <td>" . $row['GF'] . "</td>
            <td>" . $row['CG'] . "</td>
            <td>" . $row['SHO'] . "</td>
            <td>" . $row['SV'] . "</td>
            <td>" . $row['IP'] . "</td>
            <td>" . $row['H'] . "</td>
            <td>" . $row['R'] . "</td>
            <td>" . $row['ER'] . "</td>
            <td>" . $row['HR'] . "</td>
            <td>" . $row['BB'] . "</td>
            <td>" . $row['IBB'] . "</td>
            <td>" . $row['SO'] . "</td>
            <td>" . $row['HBP'] . "</td>
            <td>" . $row['BK'] . "</td>
            <td>" . $row['WP'] . "</td>
            <td>" . $row['BF'] . "</td>
            <td>" . $row['ERA+'] . "</td>
            <td>" . $row['FIP'] . "</td>
            <td>" . $row['WHIP'] . "</td>
            <td>" . $row['H9'] . "</td>
            <td>" . $row['HR9'] . "</td>
            <td>" . $row['BB9'] . "</td>
            <td>" . $row['SO9'] . "</td>
            <td>" . $row['SO/W'] . "</td>
            <td>" . $row['Awards'] . "</td>
    
        </tr>" ;
    } 
    ?>
</table>



</section>

<footer>
    <button class="button"><a href="/baseballsites/guardians.html">Back to Guardians Roster</a></button>
</footer>
</body>
</html>