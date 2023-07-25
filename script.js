//script qui permet de changer les fenêtres des maisons en rouge!
document.getElementById("redbutton").addEventListener("click", () => {

    //Pets rajouts pour donner une ambiance plus "dark" quand on appuie sur le bouton + changement des couleurs de texte en plus clair pour la visibilité
    let houses = document.getElementsByClassName("window")
    document.getElementById("body").style.backgroundColor = "#5e5958";
    document.getElementById('nbrMaison1').style.color = "white";
    document.getElementById('nbrMaison2').style.color = "white";
    document.getElementById('titre').style.color = "88cccf"
    document.getElementById('adjb').style.color = "#7395fa"
    document.getElementById('adjv').style.color = "#3ef770";
    document.getElementById("redbutton").textContent = "Waouh, une ambiance film d'horreur 😱!";
    //Boucle pour pouvoir changer les fenêtres de toutes les maisons en rouge
    for (var i = 0; i < houses.length; i++) {
        houses[i].style.backgroundColor = "#d6483e";

    }
});


/*
J'ai essayé de faire un système qui permettrait, à l'image d'un interupteur de changer entre la version rouge et la version normale de la page
quand on clique sur le bouton, j'ai écris le code ci-dessous, je pense que c'est tout bête mais je n'arrive pas à comprendre pourquoi il ne fonctionne pas
    
    let clickTrack = 1;
    switch (clickTrack) {
        case 1:

            for (var i = 0; i < houses.length; i++) {
                houses[i].style.color = "#88cccf";
                houses[i].style.backgroundColor = "#d6483e";
            }

            bouton.textContent = "Waouh, une ambiance film d'horreur 😱!"
            body.style.backgroundColor = "#5e5958";
            form1.style.color = "white";
            form2.style.color = "white";
            titre.style.color = "#7395fa"
            adjb.style.color = "#3ef770"
            adjv.style.color = "#88cccf";
            clickTrack += 1
            break;

        case 2:

            for (var i = 0; i < houses.length; i++) {
                houses[i].style.backgroundColor = "yellow";
                houses[i].style.color = "";
            }
            bouton.textContent = "Mettre des LEDs rouge?"
            body.style.backgroundColor = "";
            form1.style.color = "";
            form2.style.color = "";
            titre.style.color = ""
            adjb.style.color = ""
            adjv.style.color = "";
            clickTrack -= 1
            break;
            }
});

*/