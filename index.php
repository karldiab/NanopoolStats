<html>
 <head>
    <title>Nanopool Mining Stats</title>
    <meta name="description" content="An external Ethereum mining statistics page for nanopool.org miners. The page displays various
    useful metrics on the miner's speed, past profits, and workers.">
    <meta name="keywords" content="Ethereum,Mining,Profitability,nanopool,finance,currency,cryptocurrency,money,bitcoin">
    <meta name="author" content="Karl Diab">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0/angular.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/Chart.min.js"></script>
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-73629036-1', 'auto');
      ga('send', 'pageview');
    </script>
    </head>
    <body ng-app ng-controller="data">
        <div class="container">
            <div id="header">
                <a href="http://www.karldiab.com"><img align="right" src="images/logo75.png" alt="KarlDiab Logo" id="KDLogo"/></a>
                <div id="response">{{response}}</div>
            </div>
            <?php
            if( $_GET["address"] || $_GET["age"] ) {
                echo "Nanopool  ". $_GET['name']. "<br />";
                exit();
            }
            ?>
            </div>
    </body>
</html>