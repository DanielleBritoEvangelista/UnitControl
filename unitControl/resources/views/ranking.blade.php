<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UnitControl</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">UnitControl</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href=""></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/employee">Colaboradores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/unit">Unidades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/position">Cargos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/performance">Desempenho</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Relatórios
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/ranking">Ranking</a></li>
                            <li><a class="dropdown-item" href="/employee/report">Colaboradores</a></li>
                            <li><a class="dropdown-item" href="/unit/employees">Colaboradores por Unidade</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <h2 class="text-center">Ranking de Colaboradores</h2><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Posição</th>
                            <th scope="col">Colaborador</th>
                            <th scope="col">CPF</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Unidade</th>
                            <th scope="col">Cargo</th>
                            <th scope="col">Desempenho</th>
                            
                            <th scope="col"></th>

                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <!-- @foreach ($data as $row)
                            <tr>
                                <td></td>
                                <td>{{$row->employee->employee_name}}</td>
                                <td>{{$row->position->position_name}}</td>
                                <td>{{$row->performance_note}}</td>
                            </tr>
                        @endforeach -->

                        @foreach ($data as $key => $row)
                            <tr>
                                <td>
                                    @if($key < 3)
                                        @if($key == 0)
                                            🥇
                                        @elseif($key == 1)
                                            🥈
                                        @else
                                            🥉
                                        @endif
                                    @endif
                                </td>
                                <td>{{$key+1}}</td>
                                <td>{{$row->employee->employee_name}}</td>
                                <td>{{$row->employee->employee_cpf}}</td>
                                <td>{{$row->employee->employee_email}}</td>
                                <td>{{$row->employee->unit->unit_name}}</td>
                                <td>{{$row->position->position_name}}</td>
                                <td>{{$row->performance_note}}</td>
                                
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
