<?php
/*
Inside the controller, Phaste will lookup the
method named as HTTP_METHOD + classname specified
at URLs.
*/
class Index
{
	public function getIndex()
	{
		print 'Hello world!!' . '<br/>' . PHP_EOL;
	}

	public function getDoTest()
	{
		print 'Testing, man!' . '<br/>' . PHP_EOL;
	}

	public function getView($p_itens)
	{
		print 'You ask, you have:' . '<br/>' . PHP_EOL;
		print '<pre>' . print_r($p_itens, true) . '</pre>' . PHP_EOL;
		print ';-)<br/>' . PHP_EOL;
	}
}
