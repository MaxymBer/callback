<head>
  <meta charset="utf-8">
  <title>try</title>
 </head>
<div>
	<input id = "first" type="text"><br/>
	<input type="text"><br/>
	<input type="text"><br/>
	<input type="text"><br/>
	<input type="text"><br/>
	<input type="text"><br/>
	<input type="text"><br/>
	<input type="text">
</div>

<button id = "press">Кнопка с текстом</button>
<script>
$(document).ready(function(){              // по окончанию загрузки страницы
    $('#press').click(function(){      // вешаем на клик по элементу с id = example-1
        $(this).load('/srv-max.php'); // загрузку HTML кода из файла example.html               
    }) 
}); 
</script>