<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>index20</title>

<style type="text/css">
body {margin:30px 100px;
      background-color:#E0FFFF;
      color:#00868B;
      text-align:center;}
h1 {font-size:32px;
     color:deeppink;
     font-family:"Arial Black";
     background-color:#ffffff;
     width:400px;
     letter-spacing:2px;
     padding:2px;
     border-style:dotted;
     border-color:deeppink;
     border-width:5px;}
h3 {font-style:italic;
     letter-spacing:2px;}
p.text1 {background-color:#ffffff;
         width:600;
         padding:5px;}
p.text2 {font-size:14px;
         color:blue;
         text-align:left;
         background-color:#ffffff;
         width:400px;
         padding:10px;
         line-height:150%;}		
div {background-color:#008080;
     color:#000000;
     font-size:14px;
     padding:10px;
	 position:fixed;
	 bottom:0;
	 width:100%;}	 
</style>
</head>

<body>
<center>

<h3>Nha Hang 5SAO!!!</h3>

<p class="text1">
		<img src="200.jpg" width="250" height="400" alt="100%" >
		<img src="201.jpg" width="250" height="400" alt="100%" >
		<img src="202.jpg" width="250" height="400" alt="100%" >
		<img src="203.jpg" width="250" height="400" alt="100%" >
		<img src="204.jpg" width="250" height="400" alt="100%" >
		<img src="205.jpg" width="250" height="400" alt="100%" >
</p>
<p class="text2">

String input = "GOOGLE";
int max = 0;
LinkedHashMap<Character, Integer> map = new LinkedHashMap<>();
for (char c: input.toCharArray()){
    if (map.containsKey(c)){
        map.put(c, map.get(c) + 1);
    }else{
        map.put(c, 1);
    }
    max = Math.max(max, map.get(c));
}
System.out.println(map);
</p>

<hr color="red" size="2">
		
			<center>			
				<div><a href="index.php">Top pageへ戻る</a></div>
			</center>


</center>
</body>
</html>