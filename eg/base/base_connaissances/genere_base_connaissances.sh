#!/usr/bin/env bash

# ${p,,} = variable in lowercase

for i in *.txt
do 
    echo "" > ../../brain/${i%%.*}.rive
    article=`printf "$i\n" | cut  --delimiter='-' -f2 | cut -d'.' -f1`
    obj=`printf "$i\n" | cut -d'-' -f1 | cut -d'.' -f1`
    while read p; do
        if [[ -z "$p" || $p == %* ]]; then
            printf ""
        else        
            printf "+ ckoi [*] (${p,,}) [*]\n- <sentence>, c'est $article $obj.\n\n" >> ../../brain/${i%%.*}.rive
        fi
    done <$i
    printf "$i processed\n"
done
