<div class="modal fade" id="addRow" tabindex="-1" aria-labelledby="addUserLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addUserLabel">Nuovo Dipendente</h1>
            </div>
            <div class="modal-body">
                <div class="alert alert-primary hide" id="alert-success" role="alert"></div>
                <div class="alert alert-danger hide" id="alert-error" role="alert"></div>
                <form id="form-add">
                    <div class="mb-3">
                        <label for="input-nome" class="col-form-label">Nome:</label>
                        <input type="text" class="form-control input-insert" id="input-nome">
                    </div>
                    <div class="mb-3">
                        <label for="input-cognome" class="col-form-label">Cognome:</label>
                        <input type="text" class="form-control input-insert" id="input-cognome">
                    </div>
                    <div class="mb-3">
                        <label for="input-cf" class="col-form-label">CF:</label>
                        <input type="text" class="form-control input-insert" id="input-cf">
                    </div>
                    <div class="mb-3">
                        <label for="input-nascita" class="col-form-label">Anno di nascita:</label>
                        <input type="text" class="form-control input-insert" id="input-nascita">
                    </div>
                    <div class="mb-3">
                        <label for="input-ruolo" class="col-form-label">Ruolo:</label>
                        <input type="text" class="form-control input-insert" id="input-ruolo">
                    </div>
                    <div class="mb-3">
                        <label for="input-assunzione" class="col-form-label">Data di assunzione:</label>
                        <input type="text" class="form-control input-insert" id="input-assunzione">
                    </div>
                    <div class="mb-3">
                        <label for="input-nazione" class="col-form-label">Nazione:</label>
                        <input type="text" class="form-control input-insert" id="input-nazione">
                    </div>
                    <div class="mb-3">
                        <label for="input-email" class="col-form-label">Email:</label>
                        <input type="text" class="form-control input-insert" id="input-email">
                    </div>
                    <div class="mb-3">
                        <label for="input-telefono" class="col-form-label">Telefono:</label>
                        <input type="text" class="form-control input-insert" id="input-telefono">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onClick="closeModal()">Chiudi</button>
                <button type="button" class="btn btn-primary" id="add-button" onClick="controlForm()">Invia</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="viewUser" tabindex="-1" aria-labelledby="viewUserLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addUserLabel">Visualizza dati dipendente</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-center">
                                <img data-src="holder.js/200x200" class="rounded" alt="200x200" style="width: 200px; height: 200px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22200%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20200%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_18e2832c287%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_18e2832c287%22%3E%3Crect%20width%3D%22200%22%20height%3D%22200%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2274.41666603088379%22%20y%3D%22104.40000009536743%22%3E200x200%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                            </div>
                        </div>
                        <div class="col-md-7 ms-auto">
                            <p>Nome: <b><span id="nome-view"></span></b></p>
                            <p>Cognome: <b><span id="cognome-view"></span></b></p>
                            <p>Codice Fiscale: <b><span id="cf-view"></span></b></p>
                            <p>Anno di nascita: <b><span id="nascita-view"></span></b></p>
                            <p>Ruolo: <b><span id="ruolo-view"></span></b></p>
                            <p>Data Assunzione: <b><span id="assunzione-view"></span></b></p>
                            <p>Telefono: <b><span id="telefono-view"></span></b></p>
                            <p>E-mail: <b><span id="email-view"></span></b></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
            </div>
        </div>
    </div>
</div>