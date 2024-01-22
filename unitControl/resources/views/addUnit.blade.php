<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>UnitControl</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <h1 class="text-center">Adicionar Unidade</h1>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <div class="container">
            <div class="row  justify-content-center">
                <div class="col-8">   
                    <div class="card">
                        <div class="card-body">
                            <form action="/unit/insert" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nome da Unidade</label>
                                    <input type="text" name="unit_name" class="form-control" id="" aria-describedby="Digite o nome">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Razão Social</label>
                                    <input type="text" name="corporate_reason" class="form-control" id="">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">CNPJ</label>
                                    <input type="number" name="cnpj" class="form-control" id="">
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary">Adicionar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
