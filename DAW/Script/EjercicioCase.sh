#!/bin/bash
clear

read -p "Escriba un numero del 1 al 3 para saber la nota que ha sacado" nota
function inicio{
	case $nota in
		1) echo "Suspenso";;
		2) echo "Aprobado";;
		3) echo "Notable";;
		*) echo "Vuelva a escrbir la nota"
			inicio;;
	esac
}
inicio