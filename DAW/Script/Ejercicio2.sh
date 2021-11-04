#!/bin/bash
clear
read -p "Escribe el nombre del fichero que quieres buscar" fichero

if [ -n $fichero ]
 then
	if [ -f $fichero ]
	 then
	 	ls -l $fichero
 	else
 		echo "No es un fichero"
	fi
else
	echo "La cadena esta vacia"

fi