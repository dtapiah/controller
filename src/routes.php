<?php

Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'Dev\Prueba\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Devd\Prueba\CalculatorController@subtract');