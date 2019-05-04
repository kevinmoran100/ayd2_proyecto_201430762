{{-- Modal de cambio de estudiantecarrera --}}
<div class="modal fade" id="anadir" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title">
                    Añadir nuevo Cuentahabiente
                </h2>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                        {!! Form::open(['id' => 'formdebitar', 'url' => 'anadir']) !!}
                        {!! Form::label('nombre', 'Nombre: ') !!}
                        <input type="text" class="form-control" required="required" name="nombre" id="nombre">
                        {!! Form::label('cuenta', 'Cuenta: ') !!}
                        <input type="text" class="form-control" required="required" name="cuenta" id="cuenta">
                        {!! Form::label('saldo', 'Saldo: ') !!}
                        <input type="number" class="form-control" required="required" name="saldo" id="saldo">
                        <br>
                        {!! Form::submit('Añadir nuevo', ['id' => 'btnFormNuevoEstado','class' => 'btn btn-warning']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>

            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
