<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 1;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#anadir">Nuevo Cuentahabiente</button>
        @include('anadir')

        <div class="flex-center position-ref full-height"

            <div class="content">
              <table class="table tabla-curso">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Cuenta</th>
                          <th>Saldo</th>
                      </tr>
                  </thead>
                  <tbody>
                      @if(isset($usuarios))
                      @foreach($usuarios as $usuario)
                      <tr>
                          <td> {{ $usuario->idusuarios }} </td>
                          <td> {{ $usuario->nombre }} </td>
                          <td> {{ $usuario->no_cuenta }} </td>
                          <td> {{ $usuario->saldo }} </td>
                          <td>
                            {!! Form::open(['id' => 'formEliminar', 'url' => 'eliminarCuentahabiente']) !!}
                              <input type="hidden" name="idusuarios" value={{$usuario->idusuarios}} id="idusuarios" />
                              {!! Form::submit('Eliminar',['class' => 'btn btn-primary btn-buscar']) !!}
                            {!! Form::close() !!}
                          </td>
                          <td>
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalacreditar">Acreditar</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modaldebitar">Debitar</button>
                          </td>
                          @include('acreditar')
                          @include('debitar')

                      </tr>
                      @endforeach
                      @endif
                  </tbody>
              </table>


                <div class="links">
                </div>
            </div>
        </div>
    </body>
</html>
