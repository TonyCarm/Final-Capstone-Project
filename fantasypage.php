<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/baseballsites/baseball.css">
    <title>Fantasy Baseball Rankings</title>
    <h1 class="ranking">Carm's Sports</h1>
    <nav class="HomeNavigation"> <!--Home Navigation Bar-->
      <ul>
        <li><a href="/Carm's Sports.html">Home</a></li>
        <li><a href="/baseballsites/baseball.html">Baseball</a></li>
      </ul>
      </head>

      <body class="rankings">
<section class="list">
      <table>
    <tr>
      <th colspan="5">Fantasy Baseball Rankings</th>
    </tr>

    <tr>
      <th>Rank</th>
      <th>Player</th>
      <th>Team</th>
      <th>Elig Pos</th>
      <th>Pos Rank</th>
    </tr>


<tr>
        <?php
        $connection = mysqli_connect("localhost","root","Sports4users1425*","sportssite");

        if ($connection->connect_error) {
            die("connection failed: " . $connection->connect_error);
        }

        $sql = "SELECT * FROM rankings";
        $result = $connection->query($sql);

        if (!$result) {
            die("Invalid query: " . $connection->error);
        }

        while ($row = $result->fetch_assoc()) {

            echo"
            <td>" . $row["Rank"] . "</td>
            <td>" . $row['Player'] . "</td>
            <td>" . $row['Team'].  "</td>
            <td>" . $row['Elig Pos']. "</td>
            <td>" . $row['Pos Rank']. "</td>
            </tr>" ;
    } 
    ?>

      </table>
</section>
      </body>
</html>