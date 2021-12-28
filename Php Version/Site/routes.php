<?php

	if (resolve ('/inf216_pratica_4')){
		render ('Pedacos/inf216_pratica_4','tema1');
	}elseif (resolve ('/inf216_pratica_2')){
		render ('Pedacos/inf216_pratica_2','tema1');
	}elseif (resolve ('/inf216_pratica_1')){
		render ('Pedacos/inf216_pratica_1','tema1');
	}elseif (resolve ('/exercicios_INF216')){
		render ('Pedacos/inf216','tema1');
	}elseif (resolve ('/(.*)')){
		render ('Pedacos/home','tema1');
	}

	/*
	if (resolve ('/contato')){
		if ($_SERVER['REQUEST_METHOD'] === 'POST'){
			$from = filter_input(INPUT_POST, 'from');
			$subject = filter_input(INPUT_POST, 'subject');
			$message = filter_input(INPUT_POST, 'message');
			$headers = 'FROM: ' . $from . '\r\n' .
					'Reply-To: ' . $from . 'r\n' .
					'X_Mailer: PHP/' . phpversion();

			if (mail('destiny@teste.com', $subject, $message))
				flash('Email enviado com suceso', 'sucess');
			else
				flash('Falha no envio do Email', 'error');

			return header('location: /contato');
		}
		$pages = $pages_all();
		render('Site/Contato','SiteT', compact('pages'));
	} 

	else if ($params = resolve ('/(.*)')){
		$pages = $pages_all();

		foreach ($pages as $page) {
			if ($page['url'] == $params[1])
				break;
		}

		render ('Site/Page','SiteT', compact('pages', 'page'));
	}
	*/