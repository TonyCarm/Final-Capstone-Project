<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="/baseballsites/images/stadiums/stats.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Jeff McNeil Statistics</title>
</head>

<body class="mets">
<table >
    <th colspan="2"><h1>Jeff McNeil</h1></th>
    
<tr>
    <td><img src="/baseballsites/images/mets/jeff.png" alt="Jeff McNeil"></td>

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
    <th>G</th>
    <th>PA</th>
    <th>AB</th>
    <th>R</th>
    <th>H</th>
    <th>2B</th>
    <th>3B</th>
    <th>HR</th>
    <th>RBI</th>
    <th>SB</th>
    <th>CS</th>
    <th>BB</th>
    <th>SO</th>
    <th>BA</th>
    <th>OBP</th>
    <th>SLG</th>
    <th>OPS</th>
    <th>OPS+</th>
    <th>TB</th>
    <th>GDP</th>
    <th>HBP</th>
    <th>SH</th>
    <th>SF</th>
    <th>IBB</th>
    <th>Pos</th>
    <th>Awards</th>
    </tr>
        <!--Where data will be placed-->
       
    <tr>
        
        <?php
        $connection = mysqli_connect("localhost","root","Sports4users1425*","sportssite");

        if ($connection->connect_error) {
            die("connection failed: " . $connection->connect_error);
        }

        $sql = "SELECT * FROM mets WHERE playerID = 'Jeff McNeil'";
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
            <td>" . $row['G'].  "</td>
            <td>" . $row['PA'] .  "</td>
            <td>" . $row['AB'] .  "</td>
            <td>" . $row['R'] . "</td>
            <td>" . $row['H'] . "</td>
            <td>" . $row['2B'] . "</td>
            <td>" . $row['3B'] . "</td>
            <td>" . $row['HR'] . "</td>
            <td>" . $row['RBI'] . "</td>
            <td>" . $row['SB'] . "</td>
            <td>" . $row['CS'] . "</td>
            <td>" . $row['BB'] . "</td>
            <td>" . $row['SO'] . "</td>
            <td>" . $row['BA'] . "</td>
            <td>" . $row['OBP'] . "</td>
            <td>" . $row['SLG'] . "</td>
            <td>" . $row['OPS'] . "</td>
            <td>" . $row['OPS+'] . "</td>
            <td>" . $row['TB'] . "</td>
            <td>" . $row['GDP'] . "</td>
            <td>" . $row['HBP'] . "</td>
            <td>" . $row['SH'] . "</td>
            <td>" . $row['SF'] . "</td>
            <td>" . $row['IBB'] . "</td>
            <td>" . $row['Pos'] . "</td>
            <td>" . $row['Awards'] . "</td>
    
    
        </tr>" ;
    } 
    ?>
</table>



</section>

<footer>
    <button class="button"><a href="/baseballsites/mets.html">Back to Mets Roster</a></button>
</footer>
</body>
</html>