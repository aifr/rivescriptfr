#!/usr/bin/env bash

# ${p,,} = variable in lowercase

for i in *.txt
do 
    printf "// fichier automatiquement généré depuis $i\n\n" > ../../brain/${i%%.*}.rive
    cible=`printf "$i" | cut  --delimiter='-' -f2 | cut -d'.' -f1`
    source=`printf "$i" | cut -d'-' -f1`
    while read p; do
		    motcible=`printf "$p" | cut  --delimiter=';' -f2` 
			motsource=`printf "$p" | cut -d';' -f1`
        if [[ -z "$p" || $p == %* ]]; then
            printf ""
        else        
            printf "+ traduire ${motsource,,}[*]en $cible[*]\n-  ${motsource,,} en $source c'est $motcible en $cible.\n\n" >> ../../brain/${i%%.*}.rive
        fi
    done <$i
    printf "$i processed\n"
done
