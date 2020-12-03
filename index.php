<?php // сжимаем и склеиваем файлы CSS
header('Content-type: text/css');
ob_start("compress");

function compress($buffer) {
	$buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
	$buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);
	return $buffer;
}

include('reset.css');
include('base.css');
include('grid.css');
include('print.css');

ob_end_flush();
?>