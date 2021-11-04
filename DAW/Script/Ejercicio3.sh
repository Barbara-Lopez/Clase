#!/bin/bash
clear

for variable in $*
 do
 	echo $variable
 	if [ -f $variable ]
	 then 
	 	echo "$variable es un fichero"
 	else
 		if [ -d $variable ]
		 then 
		 	echo "$variable es un directorio"
	 	else
	 		echo "$variable no es ni un directorio ni un fichero"
		fi	
	fi	
done