<?php

	//Função responsável por controlar os templates
	function render($content, $template, array $data = []){
		$content = __DIR__ . '/../Templates/' . $content . '.tpl.php';
		return include __DIR__ . '/../Templates/' . $template . '.tpl.php';
	}