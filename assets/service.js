var rowel = [];
var idRow = null;

function tablePagination() {
    $('table.display').DataTable({
        responsive: true,
        searchable: false,
        orderable: false,
        targets: 0
    });
}

function controlForm() {
    var nome = $("#input-nome").val();
    var cognome = $("#input-cognome").val();
    var cf = $("#input-cf").val();
    var annodinascita = $("#input-nascita").val();
    var ruolo = $("#input-ruolo").val();
    var assunzione = $("#input-assunzione").val();
    var nazione = $("#input-nazione").val();
    var email = $("#input-email").val();
    var telefono = $("#input-telefono").val();

    var count = 0;
    var html = "<ul>";
    if (nome == "") { html += "<li>Inserire Nome</li>"; count++; }
    if (cognome == "") { html += "<li>Inserire Cognome</li>"; count++; }
    if (email == "") { html += "<li>Inserire Email</li>"; count++; }
    if (telefono == "") { html += "<li>Inserire Telefono</li>"; count++; }

    html += "</ul>";
    if (count > 0) {
        $("#alert-error").removeClass("hide");
        $("#alert-error").html(html);
    } else {
        $("#alert-error").addClass("hide");
        if (idRow) {
            var data = searchData(idRow);
            data.nome = nome;
            data.cognome = cognome;
            data.cf = cf;
            data.annodinascita = annodinascita;
            data.ruolo = ruolo;
            data.assunzione = assunzione;
            data.nazione = nazione;
            data.email = email;
            data.telefono = telefono;
            modRow(data);
        } else {
            addRow();
        }
    }
}

function modRow(data) {
    //console.log("DATA", data);
    $.ajax({
        method: "POST",
        url: "api/modEmployee.php",
        data: JSON.stringify({ id: data.id, nome: data.nome, cognome: data.cognome, cf: data.cf, annodinascita: data.annodinascita, ruolo: data.ruolo, assunzione: data.assunzione, nazione: data.nazione, email: data.email, telefono: data.telefono, active: data.active }),
        contentType: "application/json",
        success: function (data) {
            console.log("funzione chiamata quando la chiamata ha successo (response 200)", data);
            $("#alert-success").removeClass("hide");
            $("#alert-success").text("Dipendente modificato correttamente");
            $("#form-add").addClass("hide");
            $("#add-button").addClass("hide");
            cleanInput();
        },
        error: function (error) {
            console.log("funzione chiamata quando la chiamata fallisce", error);
            $("#alert-error").removeClass("hide");
            $("#alert-error").text(error);
        }
    });
}

function addRow() {
    var nome = $("#input-nome").val();
    var cognome = $("#input-cognome").val();
    var cf = $("#input-cf").val();
    var annodinascita = $("#input-nascita").val();
    var ruolo = $("#input-ruolo").val();
    var assunzione = $("#input-assunzione").val();
    var nazione = $("#input-nazione").val();
    var email = $("#input-email").val();
    var telefono = $("#input-telefono").val();

    $.ajax({
        method: "POST",
        url: "api/createEmployee.php",
        data: JSON.stringify({ nome: nome, cognome: cognome, cf:cf, annodinascita: annodinascita, ruolo:ruolo, assunzione:assunzione, nazione:nazione, email: email, telefono: telefono }),
        contentType: "application/json",
        success: function (data) {
            console.log("funzione chiamata quando la chiamata ha successo (response 200)", data);
            $("#alert-success").removeClass("hide");
            $("#alert-success").text("Dipendente inserita correttamente");
            $("#form-add").addClass("hide");
            $("#add-button").addClass("hide");
            cleanInput();
        },
        error: function (error) {
            console.log("funzione chiamata quando la chiamata fallisce", error);
            $("#alert-error").removeClass("hide");
            $("#alert-error").text(error);
        }
    });

}

function employees() { 
    $.ajax({
        url: 'api/getEmployees.php', 
        dataType: 'json', //restituisce un oggetto JSON
        complete: function (dipendenti, stato) {
            console.log("RISPOSTA", dipendenti.responseJSON);
           
            var righe = dipendenti.responseJSON;
            rowel = righe;
            for (i = 0; i < righe.length; i++) {
                var riga = righe[i];
                var element = "<td>" + riga.id + "</td>";
                element += "<td>" + riga.nome + "</td>";
                element += "<td>" + riga.cognome + "</td>";
                element += "<td>" + riga.email + "</td>";
                element += "<td>" + riga.telefono + "</td>";
                element += "<td>" + riga.ruolo + "</td>";
                element += '<td><button type="button" class="btn btn-sm btn-outline-secondary" onClick="viewUser(' + riga.id +')"><i class="fa-solid fa-eye"></i></button></td>';
                element += '<td><button type="button" class="btn btn-sm btn-outline-secondary" onClick="openModRow(' + riga.id + ')"><i class="fa-solid fa-square-pen"></i></button></td>';
                $("<tr/>")
                    .append(element)
                    .appendTo("#tabella");
            }
            tablePagination();
        }
    });
}

function openNewRow() {
    cleanInput();
    $('#addRow').modal('show');
}

function openModRow(id) {
    var data = searchData(id);
    cleanInput();
    idRow = data.id;
    $("#input-nome").val(data.nome);
    $("#input-cognome").val(data.cognome);
    $("#input-cf").val(data.cf);
    $("#input-nascita").val(data.annodinascita);
    $("#input-ruolo").val(data.ruolo);
    $("#input-assunzione").val(data.assunzione);
    $("#input-nazione").val(data.nazione);
    $("#input-email").val(data.email);
    $("#input-telefono").val(data.telefono);
    $('#addRow').modal('show');
}

function viewUser(user) { 
    console.log(rowel[user]);
    var utente = rowel[user - 1];
    $("#nome-view").text(utente.nome);
    $("#cognome-view").text(utente.cognome);
    $("#cf-view").text(utente.cf);
    $("#nascita-view").text(utente.annodinascita);
    $("#ruolo-view").text(utente.ruolo);
    $("#assunzione-view").text(utente.assunzione);
    $("#telefono-view").text(utente.telefono);
    $("#email-view").text(utente.email);
    $('#viewUser').modal('show');
}

$(document).ready(function () {
    employees();
    new DateTime(document.getElementById('input-assunzione'), {
        format: 'DD/MM/YYYY'
    });
    new DateTime(document.getElementById('input-nascita'), {
        format: 'DD/MM/YYYY'
    });
});
    
           