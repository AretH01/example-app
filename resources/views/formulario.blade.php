<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

    <body class="d-flex h-100 text-center text-dark bg-withe">
        <header class="mb-auto">
            <div>
            <h3 class="float-md-start mb-0">Llenado de Datos</h3>
            <nav class="nav nav-masthead justify-content-center float-md-end">
                <a class="nav-link" aria-current="page" href="">Home</a>
                <a class="nav-link" href="/Formulario">Llenado de Datos</a>
                <a class="nav-link" href="#">Info</a>
            </nav>
            </div>
        </header>
    </body>

    <div class="container" style="padding-top: 25px;">

        <h3>Formulario Plaga Cultivos de Limon</h3>
        <hr>

            <form class="row g-3" method="POST" action="/Formulario/add">
            @csrf
            <div class="col-md-3">
                <label for="Nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Cruz Partida Francisca Emanuela" required>
            </div>

            <div class="col-md-2">
                <label for="Superficie" class="form-label">Superficie (m²)</label>
                <input type="number" class="form-control" id="Superficie" name="Superficie" placeholder="100" required> 
            </div>
            
            <div class="col-md-3">
                <label for="Ubicacion" class="form-label">Ubicacion</label>
                <input type="text" class="form-control" id="Ubicacion" name="Ubicacion" placeholder="Latitud y Longitud" required> 
            </div>

            <div class="col-md-2">
                <label for="NumerodePlantas" class="form-label">Numero de Plantas</label>
                <input type="number" class="form-control" id="NumerodePlantas" name="NumerodePlantas" placeholder="100" required>
            </div>

            <div class="col-md-2">
                <label for="Variedad" class="form-label">Variedad</label>
                <input type="text" class="form-control" id="Variedad" name="Variedad" placeholder="Mayer, Eureka..." required>
            </div>

            <div class="col-md-3">
                <label for="TipodePlaga" class="form-label">Tipo de Plaga</label>
                <input type="text" class="form-control" id="tipodePlaga" name="TipodePlaga" placeholder="Minador de Cítricos, Cochinilla..." required>
            </div>

            <div class="col-md-3">
                <label for="Enfermedades" class="form-label">Enfermedades</label>
                <textarea class="form-control" id="Enfermedades" Name="Enfermedades" rows="3" Required></textarea required>
            </div>

            <div class="col-md-2">
                <label for="ProduccionAnual" class="form-label">Produccion Anual (t)</label>
                <input type="number" class="form-control" id="ProduccionAnual" name="ProduccionAnual" placeholder="100" required>
            </div>

            <div class="col-md-4">
                <label for="DescripciondelaTecnologiaAplicada" class="form-label">Descripcion de la Tecnologia Aplicada</label>
                <textarea class="form-control" id="DescripciondelaTecnologiaAplicada" name="DescripciondelaTecnologiaAplicada" rows="3" Required></textarea >
            </div>

            <!--div class="col-12">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Check me out
                </label>
                </div>
            </div-->

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
        </form>
    </div>

    <div class="tabla" style="padding-top: 25px;">
    
        <h3>Tabla de Registros</h3>
        <hr>
        <table class="table table-dark table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Superficie (m²)</th>
            <th scope="col">Ubicacion</th>
            <th scope="col">No. Plantas</th>
            <th scope="col">Tipo de Plagas</th>
            <th scope="col">Enfermedades</th>
            <th scope="col">Produccion Anual (t)</th>
            <th scope="col">Desc. Tecnologia Aplicada</th>
            <th scope="col">Accion</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>123</td>
            <td>lagos</td>
            <td>134</td>
            <td>minador de sabia</td>
            <td>hojas amarillas</td>
            <td>500</td>
            <td>se le aplico un hiervisida</td>
            <td>
                <input type="button" class="btn btn-danger" value="Delete">
                <input type="button" class="btn btn-success" value="Update">
            </td>
            </tr>
        </tbody>
        </table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>