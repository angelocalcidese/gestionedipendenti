function employees() { 
    $.ajax({
        url: 'api/getEmployees.php', 
        dataType: 'json', //restituisce un oggetto JSON
        complete: function (dipendenti, stato) {
            console.log("RISPOSTA", dipendenti.responseJSON);
            var righe = dipendenti.responseJSON;
            for (i = 0; i < righe.length; i++) {
                var riga = righe[i];
                var element = "<td>" + riga.id + "</td>";
                element += "<td>" + riga.nome + "</td>";
                element += "<td>" + riga.cognome + "</td>";
                element += "<td>" + riga.cf + "</td>";
                element += "<td>" + riga.annodinascita + "</td>";
                element += "<td>" + riga.ruolo + "</td>";
                element += "<td>" + riga.assunzione + "</td>";

                $("<tr/>")
                    .append(element)
                    .appendTo("#tabella");
            }

        }
    });
}
employees();
    
           