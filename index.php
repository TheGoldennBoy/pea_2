<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Consulta de Clientes</title>
</head>
<body>
    <h1>Consulta de Cliente</h1>
    <hr>
    <div class="col-8">
            <button type="button" class="btn btn-primary btn-block" id="btnConsulta" onclick="obtenerClientes">Consultar</button>
    </div>

      <div class="container-fluid">    
                       
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tipo Cliente</th>
                                        <th>Tipo Doc</th>
                                        <th>N° Documento</th>
                                        <th>Direccion</th>
                                    </tr>
                                </thead>
                                <tbody id="tblData">
                                    
                                </tbody>
                            </table>
 

      </div>
      
</body>
</html>
<script src="assets/tipo.js"></script>