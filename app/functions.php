<?php
	funtion render_view($view, $data=[]){
		if(!is_file(VIEWS.$view.'php')){
			echo 'No existe la vista '. $view;
			die;
		}

		require_once(VIEWS.$view.'php');
	}
