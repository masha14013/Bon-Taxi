<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	
<head>
	<meta charset="utf-8">
	<title>"Bon Taxi". Заказ такси. Москва. Недорого</title>
	<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bontaxi.js"></script>
	<link rel="stylesheet" href="css/bontaxi.css">
</head>

<body>
	<div id="title"><h1>Bon Taxi</h1></div>
	<div id="content">
		
		<div id="main">
			<p><img class="picture" src="img/taxi-picture.jpg" alt="" width="250px, heigft=230px"></p>
			<p>Отдельной категорией выделяются такси, которые не имеют инфраструктуры по приёму заказов и по вывозу пассажиров, а осуществляют вывоз пассажиров путём прямой интеграции с инфраструктурой множества реальных такси. Звонок пассажира или заполненная заявка на сайте попадает в распределительный центр, откуда с учётом приоритета обслуживания клиента (например, цена), попадает в информационные системы десятков таксопарков. Как результат — возможность подбора машины по тарифу или другим критериям и значительно большая вероятность подачи машины.</p>
			
			<input type="checkbox" id="checkbox" class="1" value="1" /> Поеду <br/>
			<div class="checkbox1" style="display:none">
				<p>Вы можете заказать такси прямо сейчас, набрав номер +7(495)888-88-88</p>
			</div>
			<input type="checkbox" id="checkbox" class="2" value="2" /> Не сейчас<br/>
			<div class="checkbox2" style="display:none">
				<p>Закажите такси позже, набрав номер +7(495)888-88-88</p>
			</div>
		</div>
		
		<div id="for_clients">
			<h2>Акции для пассажиров</h2>
			<input type="button" id="button1" value="Показать/Скрыть"" />
			<div id="downlist1" style="display:none">
				<p>Закажи такси - получи пиццу!!!</p>
			</div>
		</div>
		
		<div id="for_drivers">
			<h2>Акции для водителей</h2>
			<input type="button" id="button2" value="Показать/Скрыть">
			<div id="downlist2" style="display:none">
				<p>Здесь будут разные акции для водителей...</p>
			</div>
		</div>
	
	</div>
	
	<footer id="meta">
		<p>Сайт изготовлен здесь, &copy; 2018
		<p>По всем вопросам обращайтесь по телефону: (495) 888-88-88
	</footer>

</body>

</html>