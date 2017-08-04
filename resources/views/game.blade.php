<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Fast Typing</title>
</head>
<body>


<div id="register" class="hidden">
    <h3>Fast Typing</h3>
    <input id="first-register" type="text" placeholder="Enter: Name">
    <br>
    <button id="btn-go" class="btn btn-danger" type="button" disabled value="true">GO</button>
</div>

<div id="level-select" class="hidden">
    <h3>Fast Typing</h3>


    <input type="checkbox" name="play" value="9">Easy
    <input type="checkbox" name="play" value="6">Medium
    <input type="checkbox" name="play" value="3">Hard
    <br>

    <button id="btn-level" class="btn btn-danger" type="button">GO Play</button>
</div>


<div id="game" class="hidden">
    <div id="gamer"></div>
    <h3>Fast Typing</h3>
    <h2></h2>

    <div>Score: <span id="score">0</span></div>
    <div>Lives left: <span id="life">3</span></div>
</div>

<div id="game-over" class="hidden" >
    <h3>Fast Typing</h3>
    <div>Score: <span id="final-score"></span></div>
    <button id="btn-over" class="btn btn-danger" type="button">Restart</button>
</div>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/script.js"></script>
<script>new FastTyping()</script>
</html>