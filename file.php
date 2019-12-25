<?php session_start();?>
<!DOCTYPE HTML>
<html lang="ru">

	<head>
		<meta charset="utf-8"/>
		
		<title>Web №1</title>

		<link rel="shortcut icon" href="img/favicon.ico">
		<style type="text/css">

			#header{
			height: 50px;
			font-family: sans-serif !important;
			color: black !important;
			font-size: 20px;
			text-align: center;
			}

			.header-content{
				width: 250px;
				line-height: 50px;
				text-align: center;
			}
					
			/*=====================================================*/

			#workspace-container{		
				font-size: 0px;
				vertical-align: top;
			}
					
			.workspace-item-container{
				display: inline-block;
				width: calc(50% - 50px);
				vertical-align: top;
				margin: 30px 10px 80px 10px ;
			}

			/*=====================================================*/
				
			.horisontal-centering-container{
				text-align: center;
			}

			/*=====================================================*/

			#task-chart{
				width: 330px;
				height: 330px;
			}

			/*=====================================================*/

			.parameter-form-container{
				padding: 10px 10px 0px 10px;
				border: 5px outset #333;
				border-radius: 8px;

				-webkit-border: 5px outset #333;
				-moz-border: 5px outset #333;
				-ms-border: 5px outset #333;
				-o-border: 5px outset #333;
				border: 5px outset #333;
			}

			.parameter-container{
				margin-bottom: 10px;
				padding: 2px 2px 2px 2px;
				text-align: center;
			}

			.parameter-label{
				display: block;
				font-size: 18px;
				font-weight: bold;
				margin: 0 auto 1% auto;
				padding: 0px 8px 8px 8px;

			}

			.parameter-label-R{
				display: block;
				font-size: 15px;
				font-weight: bold;
				margin: 0 auto 1% auto;
				padding: 0px 10px 10px 10px;

			}

			/*=====================================================*/

			.warning-container{
				display: block;
				font-size: 16px;
				color: red;
				padding-top: 10px;
			}

			/*=====================================================*/

			.submit-button{
				font-family: sans-serif;
				font-weight: bold;
				font-size: 18px;
				color: black;
				background-color: grey;
				border: 3px outset black;
				border-radius: 8px;
				margin: 0px 6px 20px 6px;
			}
				
			.submit-button:hover{
				background-color: black;
				color: white;
				border: 3px outset white;
				transition: 0.3s;
			}

			/*=====================================================*/
			
			#Xbutton{
			    background: #00BBD6;
			    -moz-border-radius: 5px;
			    -webkit-border-radius: 5px;
			    border: 3px solid black;	    
			    width: 40px;
				margin: 0px 3px 0px 3px;

			}

			#hiddenbutton{display: none;}
			
			/*=====================================================*/

			[type="radio"]:checked,
			[type="radio"]:not(:checked) {
			    position: absolute;
			    left: -9999px;
			}
			
			[type="radio"]:checked + label,
			[type="radio"]:not(:checked) + label{
			    position: relative;
			    padding-left: 28px;
			    cursor: pointer;
			    line-height: 20px;
			    display: inline-block;
			    color: black;
			}
			
			[type="radio"]:checked + label:before,
			[type="radio"]:not(:checked) + label:before {
			    content: '';
			    position: absolute;
			    left: 0;
			    top: 0;
			    width: 18px;
			    height: 18px;
			    border: 1px solid #ddd;
			    border-radius: 100%;
			    background: #fff;
			}
			
			[type="radio"]:checked + label:after,
			[type="radio"]:not(:checked) + label:after {
			    content: '';
			    width: 12px;
			    height: 12px;
			    background: #00BBD6;
			    position: absolute;
			    top: 4px;
			    left: 4px;
			    border-radius: 100%;
			    -webkit-transition: all 0.2s ease;
			    transition: all 0.2s ease;
			}
			
			[type="radio"]:not(:checked) + label:after {
			    opacity: 0;
			    -webkit-transform: scale(0);
			    transform: scale(0);
			}
			
			[type="radio"]:checked + label:after {
			    opacity: 1;
			    -webkit-transform: scale(1);
			    transform: scale(1);
			}

			input[type="text"] {
			    background: -moz-linear-gradient(#00BBD6, #EBFFFF);
			    background: -webkit-linear-gradient(#00BBD6, #EBFFFF);
			    -moz-border-radius: 5px;
			    -webkit-border-radius: 5px;
			    border: 3px solid black;	    
			    width: 80px;
			    height: 25px;
			}

			/*=====================================================*/
			
			table {
				width: 75%; 
				border: 3px solid black; 
				margin-bottom: 10px;
			}
            .centered {
            	text-align: center; 
            	margin-left: auto; 
            	margin-right: auto;
				font: 16pt sans-serif;
            }
			/*=====================================================*/

			body{

				background: #242529;
				background: radial-gradient(#777E84, #242529);
				background: -webkit-radial-gradient(#777E84, #242529);
				background: -moz-radial-gradient(#777E84, #242529);
				background: -ms-radial-gradient(#777E84, #242529);
				background: -o-radial-gradient(#777E84, #242529);
				background-attachment: fixed;
				margin: 0;

			}

			body > div{
				width: 1030px;
				max-width: 1200px;
				min-width: 300px;
				
				margin-left: auto;
				margin-right: auto;
				margin-top: 50px;
				margin-bottom: 50px;
				
				background: #96c8fa
				background: -webkit-radial-gradient(circle at center, #96c8fa, #64c8fa);
				background: -moz-radial-gradient(circle at center, #96c8fa, #64c8fa);
				background: -ms-radial-gradient(circle at center, #96c8fa, #64c8fa);
				background: -o-radial-gradient(circle at center, #96c8fa, #64c8fa);
				background: radial-gradient(circle at center, #96c8fa, #64c8fa);
				
				border: 15px outset #333;
				border-radius: 8px;

				-webkit-border: 15px outset #333;
				-moz-border: 15px outset #333;
				-ms-border: 15px outset #333;
				-o-border: 15px outset #333;
				border: 15px outset #333;
			}

			div span{
				margin-top: auto;
				margin-bottom: auto;
				font-family: sans-serif;
				color: black;
			}

			div h1{
				text-align: center;
				margin: 10px 0px 10px 0px;
				font-size: 30px;
				font-style: italic;
			}

			h1, label{
				font-family: sans-serif;
				color: black;
			}

		</style>
	</head>

	<body>

		<div id="header">
			
			<span class="header-content">Студент: Жолдошов Хансултан || Группа: P3211 || Вариант: 211009</span>
				
		</div>
		
		<div id="workspace-container">
			
			<!-- AREA -->
			<div class="workspace-item-container">
				
				<h1>Область</h1>

				<div class="horisontal-centering-container">
					<canvas id="task-chart"></canvas>
				</div>

			</div>
				
			<!-- PARAMETERS -->	
			<div class="workspace-item-container">

				
				<h1>Параметры</h1>
				
				<form id="computation-form" name="form" onsubmit="return validate(this);">
				
					<div class="parameter-form-container">
						
						<!-- BUTTON -->
						<div class="parameter-container">
							<label class="parameter-label">X:</label>
							<input type="text" name="X" id="hiddenbutton">
							<input type="button" id="Xbutton" name="x" value="-2.0">
							<input type="button" id="Xbutton" name="x" value="-1.5">
							<input type="button" id="Xbutton" name="x" value="-1.0">
							<input type="button" id="Xbutton" name="x" value="-0.5">
							<input type="button" id="Xbutton" name="x" value="0">
							<input type="button" id="Xbutton" name="x" value="0.5">
							<input type="button" id="Xbutton" name="x" value="1.0">
							<input type="button" id="Xbutton" name="x" value="1.5">
							<input type="button" id="Xbutton" name="x" value="2.0">
							<span id="warning-container-X" class="warning-container"></span>
						</div>
						
						<!-- TEXT -->
						<div class="parameter-container">
							<label class="parameter-label">Y:</label>
							<input id="Y-param" type="text" name="Y" placeholder="(-5 ... 3)" maxlength="10">
							<span id="warning-container-Y" class="warning-container"></span>
						</div>

						<!-- RADIO -->					
						<div class="parameter-container">
							<label class="parameter-label">R:</label>
						    <input type="radio" id="R-param1" name="R" value="1.0">
						    <label class="parameter-label-R" for="R-param1">1.0</label>
						    <input type="radio" id="R-param2" name="R" value="1.5">
						    <label class="parameter-label-R" for="R-param2">1.5</label>
						    <input type="radio" id="R-param3" name="R" value="2.0">
						    <label class="parameter-label-R" for="R-param3">2.0</label>
						    <input type="radio" id="R-param4" name="R" value="2.5">
						    <label class="parameter-label-R" for="R-param4">2.5</label>
						    <input type="radio" id="R-param5" name="R" value="3.0">
						    <label class="parameter-label-R" for="R-param5">3.0</label>
							<span id="warning-container-R" class="warning-container"></span>
						
						<div>
							<input type="hidden" name="uniqid" value="">
						</div>				 				
						
						</div>
						<!-- SUBMIT -->
						<div class="horisontal-centering-container">
						
							<button class="submit-button" type="submit">Отправить</button>
						
						</div>
					
					</div>

				</form>

			</div>
		
		</div>
		
		<div id="result-container" class="horisontal-centering-container">
			
			<h1>
				Результат
				<?php include 'check.php'; ?>
			</h1>
			
		</div>

	<script src="js/init.js"></script>
	<script src="js/validate.js"></script>
	<script src="js/create-chart.js"></script>
</body>

</html>
