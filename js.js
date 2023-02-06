function SearchStudent() {

    var search = document.getElementById("nom").value;
    var getHttpRequest = function() {
        var HttpRequest = false;
        if (window.XMLHttpRequest) {
            HttpRequest = new XMLHttpRequest();
            if (HttpRequest.overrideMimeType) {
                HttpRequest.overrideMimeType('Text/XML');
            }
        } else if (window.ActiveXObject) {
            try {
                HttpRequest = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                try {
                    HttpRequest = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (e) {}
            }
        }
        return HttpRequest;
    }
    var HttpRequest = getHttpRequest();
    HttpRequest.onreadystatechange = function() {
        if (HttpRequest.readyState === 4) {
            document.getElementById("search_elev").innerHTML = HttpRequest.responseText;
        }
    }
    var str = "SearchStudent.php?search=" + search + "";
    HttpRequest.open('GET', str, true);
    HttpRequest.send(null);
}

function classe() {

    var classe = document.getElementById("classe").value;
    var getHttpRequest = function() {
        var HttpRequest = false;
        if (window.XMLHttpRequest) {
            HttpRequest = new XMLHttpRequest();
            if (HttpRequest.overrideMimeType) {
                HttpRequest.overrideMimeType('Text/XML');
            }
        } else if (window.ActiveXObject) {
            try {
                HttpRequest = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                try {
                    HttpRequest = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (e) {}
            }
        }
        return HttpRequest;
    }
    var HttpRequest = getHttpRequest();
    HttpRequest.onreadystatechange = function() {
        if (HttpRequest.readyState === 4) {
            document.getElementById("search_elev").innerHTML = HttpRequest.responseText;
        }
    }
    var str = "SearchStudent.php?classe=" + classe + "";
    HttpRequest.open('GET', str, true);
    HttpRequest.send(null);
}

function message() {
    var valide = "1";
    var nom = document.getElementById("nomEtudiant").value;
    var error = document.getElementById("error");

    var prenom = document.getElementById("prenomEtudiant").value;
    var error1 = document.getElementById("error1");

    var date = document.getElementById("dateNaissanceEtudiant").value;
    var error2 = document.getElementById("error2");

    var contact = document.getElementById("contactEtudiant").value;
    var error3 = document.getElementById("error3");

    var adresse = document.getElementById("adresseEtudiant").value;
    var error4 = document.getElementById("error4");

    if (nom === "") {
        error.style.display = "block"
    } else {
        error.style.display = "none";
        if (prenom === "") {
            error1.style.display = "block"
        } else {
            error1.style.display = "none"
            if (date === "") {
                error2.style.display = "block"
            } else {
                error2.style.display = "none"
                if (adresse === "") {
                    error3.style.display = "block"
                } else {
                    error3.style.display = "none"
                    if (contact === "") {
                        error4.style.display = "block"
                    } else {
                        error4.style.display = "none"
                        var lieu = document.getElementById('lieuNaissEtudiant').value;
                        var classe = document.getElementById('classe').value;
                        var sexe = document.querySelector('input[name="sexeEtudiant"]:checked').value;
                        var getHttpRequest = function() {
                            var HttpRequest = false;
                            if (window.XMLHttpRequest) {
                                HttpRequest = new XMLHttpRequest();
                                if (HttpRequest.overrideMimeType) {
                                    HttpRequest.overrideMimeType('Text/XML');
                                }
                            } else if (window.ActiveXObject) {
                                try {
                                    HttpRequest = new ActiveXObject("Msxml2.XMLHTTP");
                                } catch (e) {
                                    try {
                                        HttpRequest = new ActiveXObject("Microsoft.XMLHTTP");
                                    } catch (e) {}
                                }
                            }
                            return HttpRequest;
                        }
                        var HttpRequest = getHttpRequest();
                        HttpRequest.onreadystatechange = function() {
                            if (HttpRequest.readyState === 4) {
                                document.getElementById("students").innerHTML = HttpRequest.responseText;
                            }
                        }
                        var str = "action.php?nomEtudiant=" + nom + "&prenomEtudiant=" + prenom + "&dateNaissanceEtudiant=" + date +
                            "&lieuNaissEtudiant=" + lieu + "&optionsRadiosinline=" + sexe + "&contactEtudiant=" + contact +
                            "&adresseEtudiant=" + adresse + "&contactProf=" + contact + "&classeEtudiant=" + classe + "&ajoutStudent=" + valide +
                            "";
                        HttpRequest.open('GET', str, true);
                        HttpRequest.send(null);
                    }
                }
            }
        }
    }
}