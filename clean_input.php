<?php

// pratique cette merde qd mm
// attention, si y'a deux pseudo-variables de même type, ici $_POST > $_GET > $_REQUEST etc...
// pcq j'ai grave la flemme de faire autrement, et de toute façon y'a qu'à pas coder comme un porc (...) et ça passera !

function clean_input($var){
	if (filter_input(INPUT_POST, $var) != NULL){
		return filter_input(INPUT_POST, $var, FILTER_SANITIZE_STRING);
	}
	else 	if (filter_input(INPUT_GET, $var) != NULL){
		return filter_input(INPUT_GET, $var, FILTER_SANITIZE_STRING);
	}
	else 	if (filter_input(INPUT_REQUEST, $var) != NULL){
		return filter_input(INPUT_REQUEST, $var, FILTER_SANITIZE_STRING);
	}
  else 	if (filter_input(INPUT_SESSION, $var) != NULL){
		return filter_input(INPUT_SESSION, $var, FILTER_SANITIZE_STRING);
	}
  else 	if (filter_input(INPUT_SERVER, $var) != NULL){
		return filter_input(INPUT_SERVER, $var, FILTER_SANITIZE_STRING);
	}
  else 	if (filter_input(INPUT_ENV, $var) != NULL){
		return filter_input(INPUT_ENV, $var, FILTER_SANITIZE_STRING);
	}
  else 	if (filter_input(INPUT_COOKIE, $var) != NULL){
		return filter_input(INPUT_COOKIE, $var, FILTER_SANITIZE_STRING);
	}
  else 	if (filter_input(INPUT_FILES, $var) != NULL){
		return filter_input(INPUT_FILES, $var, FILTER_SANITIZE_STRING);
	}
  	lse 	if (filter_input(INPUT_ENV, $var) != NULL){
		return filter_input(INPUT_ENV, $var, FILTER_SANITIZE_STRING);
	}
	else{
		return NULL;
	}
}
