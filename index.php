<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>
    <header class="header">
        <div class="header-content">
            <h1>APPI CRUD</h1>
        </div>
    </header>
    <main>
        <div class="container mt-5">
            <div class="row d-flex justify-content-center">
                <div class="card col-md-10">
                    <form method="POST" id="formulario">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" placeholder="Ingrese el nombre" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="apellido" class="form-label">Apellido</label>
                                <input type="text" class="form-control" id="apellido" placeholder="Ingrese el apellido" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="fechaNacimiento" class="form-label">Fecha de nacimiento</label>
                                <input type="date" class="form-control" id="fechaNacimiento" placeholder="Ingrese la fecha de nacimiento" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="pais" class="form-label">País</label>
                                <input type="text" class="form-control" id="pais" placeholder="Ingrese el país" required>
                            </div>
                        </div>
                        <button  onClick="Guardar()" class="btn btn-primary mb-4" >Guardar</button>
                        <button  onClick="Actualizar()" style="display: none;" class="btn btn-primary mb-4" >Actualizar</button>
                        <button  onClick="Nuevo()" class="btn btn-primary mb-4" >Nuevo</button>
                    </form>
                </div>
                <div class="col-md-8">
                    <hr>
                    <table id="tabla_info">
                        <thead>
                            <tr>
                                <th class="column-spacing">Nombre</th>
                                <th class="column-spacing">Apellido</th>
                                <th class="column-spacing">Fecha de nacimiento</th>
                                <th class="column-spacing">País</th>
                                <th class="column-spacing"></th>
                            </tr>
                        </thead>
                        <tbody>
                       
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    <script  src ="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js " ></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>