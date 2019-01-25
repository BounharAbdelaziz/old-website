var afficheDonneesForm = function (event){
    nom = $("#name").val();
    annee = $("#annee").val();
    span = document.getElementById("spanResultat");

    if (nom != null && annee != null){
        $("#spanResultat").html("NOM = "+nom +"et l'année est : "+annee);
    }

    else {
        $("#spanResultat").html("PROBLEME !!");
    }
    event.preventDefault();
}

$("#formStudentData").on("submit", afficheDonneesForm);