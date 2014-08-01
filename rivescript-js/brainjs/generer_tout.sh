
printf "// NE PAS EDITER DIRECTEMENT : fichier genere automatiquement depuis dossier ../brain \n\n" > tout.rive

cat ../../eg/brain/* | sed -e "s/é/e/g" | sed -e "s/à/a/g" | sed -e "s/è/e/g" | sed -e "s/û/u/g" | sed -e "s/â/a/g" | sed -e "s/ù/u/g" | sed -e "s/î/i/g" | sed -e "s/ï/i/g" | sed -e "s/ë/e/g" | sed -e "s/ê/e/g"| sed -e "s/ç/c/g" | sed -e "s/ô/o/g" | sed -e "s/ü/u/g" >> tout.rive


