<html>
<head>
<title> Wai Tsuen TKD Poomsae Referee System</title>
</head>
<body>
<p align=center>
<img src=logo.png height=200 width=200>
<h1 align=center>Wai Tsuen TKD Poomsae Referee System (Referee)</h1>
</p>
<form method=POST action=refereeControl.php onsubmit="window.open ('', 'child', 'fullscreen')" target="child" align=center>
<p>
<p>
Court: 
<input type=text name=court></input>
</p>
Referee: 
<input type=text name=referee></input>
</p>
<p>
Password:
<input type=password name=refereePW></input></p>
<p>
<input type="submit" value="Normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Free Style" formaction="refereeControlFreeStyle.php"></p>
</form>
</p>
</body>
</html>