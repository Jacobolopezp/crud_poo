<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <title>CRUD</title>
</head>

<body>
    <div class="container-fluid row">
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary">Client Register</h3>

        <?php
        include "registro.php";
        ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Document Number</label>
                <input type="text" class="form-control" name="documento">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Name</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="apellidos">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Arrival City</label>
                <select name="ciudad" class="form-control">
                    <option value="1">Argentina</option>
                    <option value="2">Colombia</option>
                    <option value="3">Chipre</option>
                    <option value="4">Madagascar</option>
                    <option value="5">Egypt</option>
                    <option value="6">Netherlands</option>
                    <option value="7">Japan</option>
                    <option value="8">Finland</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Flying Date</label>
                <input type="date" class="form-control" name="fecha">
            </div>
            <button type="submit" class="btn btn-primary" name="btnreg" value="ok">Submit</button>
        </form>

        <div class="col-8 p-4">
            <table class="table table-success">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">City</th>
                        <th scope="col">Fly Date</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "crud_conn.php";
                    $sql=$conexion->query(" select * from clientes ");
                    while ($datos=$sql->fetch_object()){ ?>
                        <tr>
                        <td><?= $datos->cc_clientes?></td>
                        <td><?= $datos->nombre_clientes?></td>
                        <td><?= $datos->apellidos_clientes?></td>
                        <td><?= $datos->f_lugar?></td>
                        <td><?= $datos->f_fecha?></td>
                        <td>
                            <a href=""><i class="bi bi-pencil-square"></i></a>
                            <a href=""><i class="bi bi-trash3-fill"></i></a>
                        </td>
                    </tr>
                    <?php }
                    ?>
                </tbody>
            </table>

        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>