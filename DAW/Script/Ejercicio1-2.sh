#!/bin/bash
clear

while [ $# -gt 0 ] 
 do
 	echo $1
 	sift
 	echo "Quedan $#"
 done

 for variable in $*
  do
  	echo $variable
 done

