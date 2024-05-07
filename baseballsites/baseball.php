<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="baseball.css">
    <title>Baseball News and Teams</title>
    <h1>Carm's Sports</h1>
    <nav class="HomeNavigation"> <!--Home Navigation Bar-->
      <ul>
        <li><a href="/Carm's Sports.php">Home</a></li>
        <li style="float:right"><a href="logout.php">logout</a></li>
        <li style="float:right"><img class="profile" src="/images/Default.png"></li>

        <li class="dropdown">
          <a href="#" class="dropbtn">NL East</a>
          <div class="dropdown-content">
            <a href="braves.html"><img class="teamLogos" src="images/teams/braves.png"  alt="Atlanta Braves"> Atlanta Braves (0-0)</a>
            <a href="phillies.html"><img class="teamLogos" src="images/teams/phils.png"  alt="Philadelphia Phillies"> Philadelphia Phillies (0-0)</a>
            <a href="mets.html"><img class="teamLogos" src="images/teams/mets.png"  alt="New York Mets"> New York Mets (0-0)</a>
            <a href="marlins.html"><img class="teamLogos" src="images/teams/marlins.png"  alt="Miami Marlins"> Miami Marlins (0-0)</a>
            <a href="nationals.html"><img class="teamLogos" src="images/teams/nationals.png"  alt="Washington Nationals"> Washington Nationals (0-0)</a>
          </div>
        </li>

        <li class="dropdown">
          <a href="#" class="dropbtn">NL West</a>
          <div class="dropdown-content">
            <a href="diamondbacks.html"><img class="teamLogos" src="images/teams/diamondbacks.png"  alt="Arizona Diamondbacks"> Arizona Diamondbacks (0-0)</a>
            <a href="rockies.html"><img class="teamLogos" src="images/teams/rockies.png"  alt="Colorado Rockies"> Colorado Rockies (0-0)</a>
            <a href="dodgers.html"><img class="teamLogos" src="images/teams/dodgers.png"  alt="Los Angeles Dodgers"> Los Angeles Dodgers (0-0)</a>
            <a href="padres.html"><img class="teamLogos" src="images/teams/padres.png"  alt="San Diego Padres"> San Diego Padres (0-0)</a>
            <a href="giants.html"><img class="teamLogos" src="images/teams/giants.png"  alt="San Francisco Giants"> San Francisco Giants (0-0)</a>
          </div>
        </li>

        <li class="dropdown">
          <a href="#" class="dropbtn">NL Central</a>
          <div class="dropdown-content">
            <a href="cubs.html"><img class="teamLogos" src="images/teams/cubs.png"  alt="Chicago Cubs"> Chicago Cubs (0-0)</a>
            <a href="reds.html"><img class="teamLogos" src="images/teams/reds.png"  alt="Cincinnati Reds"> Cincinnati Reds (0-0)</a>
            <a href="brewers.html"><img class="teamLogos" src="images/teams/brewers.png"  alt="Milwaukee Brewers"> Milwaukee Brewers (0-0)</a>
            <a href="pirates.html"><img class="teamLogos" src="images/teams/pirates.png"  alt="Pittsburgh Pirates"> Pittsburgh Pirates (0-0)</a>
            <a href="cardinals.html"><img class="teamLogos" src="images/teams/cardinals.png"  alt="St. Louis Cardinals"> St. Louis Cardinals (0-0)</a>
          </div>
        </li>

        <li class="dropdown">
          <a href="#" class="dropbtn">AL West</a>
          <div class="dropdown-content">
            <a href="astros.html"><img class="teamLogos" src="images/teams/astros.png" alt="Houston Astros"> Houston Astros (0-0)</a>
            <a href="angels.html"><img class="teamLogos" src="images/teams/angles.png" alt="Los Angeles Angels"> Los Angeles Angels(0-0)</a>
            <a href="athletics.html"><img class="teamLogos" src="images/teams/As.png" alt="Oakland Athletics"> Oakland Athletics(0-0)</a>
            <a href="mariners.html"><img class="teamLogos" src="images/teams/seattle.png" alt="Seattle Mariners"> Seattle Mariners(0-0)</a>
            <a href="rangers.html"><img class="teamLogos" src="images/teams/rangers.png" alt="Texas Rangers"> Texas Rangers(0-0)</a>
          </div>
        </li>

        <li class="dropdown">
          <a href="#" class="dropbtn">AL East</a>
          <div class="dropdown-content">
            <a href="yankees.php"><img class="teamLogos" src="images/teams/yankees.png"  alt="New York Yankees"> New York Yankees (0-0)</a>
            <a href="Redsox.html"><img class="teamLogos" src="images/teams/boston.png" alt="Boston Red Sox"> Boston Red Sox (0-0)</a>
            <a href="bluejays.html"><img class="teamLogos" src="images/teams/jays.png"   alt="Toronto Blue Jays"> Toronto Blue Jays (0-0)</a>
            <a href="orioles.html"><img class="teamLogos" src="images/teams/baltimore.png"  alt="Baltimore Orioles"> Baltimore Orioles (0-0)</a>
            <a href="rays.html"><img class="teamLogos" src="images/teams/rays.png"  alt="Tampa Bay Rays"> Tampa Bay Rays (0-0)</a>
          </div>
        </li>

        <li class="dropdown">
          <a href="#" class="dropbtn">AL Central</a>
          <div class="dropdown-content">
            <a href="whitesox.html"><img class="teamLogos" src="images/teams/whitesox.png"  alt="Chicago White Sox"> Chicago White Sox (0-0)</a>
            <a href="guardians.html"><img class="teamLogos" src="images/teams/guardians.png"  alt="Cleveland Guardians"> Cleveland Guardians (0-0)</a>
            <a href="tigers.html"><img class="teamLogos" src="images/teams/tigers.png"  alt="Detroit Tigers"> Detroit Tigers (0-0)</a>
            <a href="royals.html"><img class="teamLogos" src="images/teams/royals.png"  alt="Kanas City Royals"> Kanas City Royals (0-0)</a>
            <a href="twins.html"><img class="teamLogos" src="images/teams/twins.png"  alt="Minnesota Twins"> Minnesota Twins (0-0)</a>
          </div>
        </li>


      </ul>
      
    </nav>
  </head>
  <body>
    <section id="video-section"> <!--video section-->
      <video id="video-container" autoplay loop muted poster="" width="100%">
        <source src="images/baseball.mov" type="video/mp4">
      </video>
  
      <div class="overlay"> <!--Text on video-->
        <div class="inner">
          <h1>Welcome to our Baseball Page!</h1>
          <p>Our Baseball page consists of 30 teams with 9 players per team!</p>
        </div>
      </div>
      </section>
    
  </body>
</html>