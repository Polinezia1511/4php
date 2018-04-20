<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet"  href="style.css" media="all">
	<link rel="shortcut icon" type="image/x-icon" href="image/logo.png	">
	<title>Изи медицина</title>

</head>
<body>
	<div class="header">
		<div class="mid">
		<header>
			<div class="menushka">
				<aside>
					<a href="main.html">Главная</a>
					<a href="about.html">О сайте</a>					
				</aside>
			</div>
			<a href="main.html">
			<img src="image/back.png" alt="Медицина">
		</a>
		</header>
	</div>
	</div>
		
<div class="mid">
	<div class="content">
	<div class="im">
	<form method = "GET">
		<textarea type="text" cols="65" rows="10" name="value"></textarea>
		<input type="submit" value="Ввести">
	</form>

	<?php
	/*в произвольном тексте все даты (в формате дд.мм.гггг или мм/дд/гггг, причем день и месяц могут быть однозначные, а год двухзначный) вывести красным цветом, увеличив год на 1*/
	$regEx = "/(^|\s)\d{1,2}?(\.|\/)\d{1,2}?(\.|\/)(\d{4}|\d{2})($|\s)/";
		if (!empty($_GET['value'])){
				$str=($_GET['value']);
				$arr=preg_split("/\s/", $str);
				for ($i=0;$i<count($arr);$i++){
				if (preg_replace($regEx, "1" , $arr[$i])=="1")	
					{
						$arr1=preg_split("/\./", $arr[$i]);
						if (count($arr1)==3)
						{
							if (((int)$arr1[0]>31)||((int)$arr1[1]>12)||((int)$arr1[0]==0)||((int)$arr1[1]==0))
							{
								echo " ".$arr[$i];
								continue;
							}
							(int)$arr1[2]++;
							if (strlen($arr1[2])==3)
								$arr1[2]="00";
							$arr[$i]=(string)$arr1[0].".".(string)$arr1[1].".".(string)$arr1[2];
						}
						else if (count($arr1)==1){
						$arr1=preg_split("/\//", $arr[$i]);
						if (((int)$arr1[0]>12)||((int)$arr1[1]>31)||((int)$arr1[0]==0)||((int)$arr1[1]==0))
						{
							echo " ".$arr[$i];
							continue;
						}
						(int)$arr1[2]++;
						if (strlen($arr1[2])==3)
							$arr1[2]="00";
						$arr[$i]=(string)$arr1[0]."/".(string)$arr1[1]."/".(string)$arr1[2];
					}
					else {
						echo " ".$arr[$i];
							continue;
					}
						echo '<span style="color: red"> '.$arr[$i].'</span>';	
					}
					
						else echo " ".$arr[$i];					
				}
			}
	?>
</div>
		</div>
</div>

</body>
</html>