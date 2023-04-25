
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Web</title>

    <!-- Styles -->
    @vite([
        'resources/js/app.js',
        'resources/css/app.css',
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
        ])
</head>
<body>
    <div class="container">
        <div class="row"> 
        <nav class="navbar navbar-expand-lg navbar-dark  bg-primary col-12">
        <div class="container">
        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                            <li class="nav-item">
                                    <a class="nav-link active" aria-current="page">SISTEMA WEB</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="/">Cadastrar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="consultar">Consultar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="container">
    <div class="row">
		<div class="card mb-3 col-12">
			<div class="card-body">
				<h4 class="card-title">Consultar Contatos Agendados</h4>
                <table class ="table">
                    <thead>
                        <tr>
                            <th scope="col"> Nome</th>
                            <th scope="col"> Telefone </th>
                            <th scope="col"> Origem </th>
                            <th scope="col"> Data Contato </th>
                            <th scope="col"> Observação </th>
                        </tr>
                    </thead>

                <tbody>
                @foreach ($agendamentos as $agendamento)
                <tr>
                    <td> {{$agendamento->Nome}}</td>
                    <td> {{$agendamento->Telefone}}</td>
                    <td> {{$agendamento->Origem}}</tdp>
                    <td> {{$agendamento->Data_Contato}}</td>
                    <td> {{$agendamento->Observacao}}</td>
                </tr>
                @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
