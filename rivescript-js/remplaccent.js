// fichier contenant  la fonction de remplacement des accents et caracteres speciaux
// Auteur : Claret Bruno Mars 2013 licence GNU GPL

function desaccentuation() {
        newinput = newinput.replace(/[éèêë]/gi, "e");
	newinput = newinput.replace(/[àâä]/gi, "a");
	newinput = newinput.replace(/[ïî]/gi, "i");
	newinput = newinput.replace(/[üûù]/gi, "u");
	newinput = newinput.replace(/[öô]/gi, "o");
        newinput = newinput.replace(/[ç]/gi, "c");
        newinput = newinput.replace(/[']/gi, " ");
        newinput = newinput.replace(/[-]/gi, " ");
        //newinput = newinput.replace(/[?]/gi, " ");
        //newinput = newinput.replace(/[!]/gi, " ");
        newinput = newinput.replace(/[\s]{2,}/g," "); // Enlève les espaces doubles, triples, etc.
        newinput = newinput.trim();
        text = newinput;
         // on remplace les accents avec repalce
        // on suprime les espaces blanc en debut de ligne et en fin de ligne avec trim()
        // on remplit la variable text avec newinput pour la suite du programe.

}



