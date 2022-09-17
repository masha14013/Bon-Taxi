$('document').ready(function(){
	$('#main').append('<a href="https://ru.wikipedia.org/wiki/%D0%A2%D0%B0%D0%BA%D1%81%D0%B8">Посмотреть источник!</a>');
	$('#button2').click(function(){
		$('#downlist2').toggle();
	});
	$('#button1').click(function(){
		$('#downlist1').toggle();
	});
	//$('#button2').click(function(){
		//if($('#button2').css('display')=='none'{
			//$(this).html('---Cкрыть---');
		//}
		//else{
			//$(this).html('+++Показать+++');
		//}
		//$('#button2').toggle();
	//});
	$('input[id=checkbox]').change(function(){
		if($(this).attr('checked') == true){
			$('.checkbox'+$(this).attr('class')).show(1000);
		}
		else{
			$('.checkbox'+$(this).attr('class')).hide(1000);
		}
	});
	});