<?php

require('conexion.php');
require('header.php');

?>
 <link rel="stylesheet" href="./curso.css">

<div id="particles-js-canvas-el" class="jejejejejejje">
    <div class="container mt-5">
        <h2 class="text-center mb-4">REGISTRATE A NUESTROS CURSOS DE DISEÑO GRAFICO!!</h2>

        <?php if (isset($_SESSION['mensaje'])) { ?>
            <div class="row">
                <div class="col">
                    <div class="alert alert-<?php echo $_SESSION['color'] ?> alert-dismissible fade show" role="alert">
                        <p class="mb-0"><?php echo $_SESSION['mensaje'] ?></p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        <?php session_unset();
        } ?>

        <form action="agregar_curso.php" method="post" enctype="multipart/form-data" class="bg-light p-4 rounded shadow-lg">
            <div class="mb-3">
                <label for="Imagen" class="form-label">Imagen</label>
                <input type="file" id="Imagen" name="Imagen" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="Titulo" class="form-label">Título</label>
                <input type="text" id="Titulo" name="Titulo" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="Descripcion" class="form-label">Descripción</label>
                <textarea id="Descripcion" name="Descripcion" class="form-control" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="Estudiantes" class="form-label">Estudiantes</label>
                <input type="text" id="Estudiantes" name="Estudiantes" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Registrarse</button>
        </form>
    </div>

    <div class="container mt-5">
        <h2 class="text-center mb-4">TABLA DE CURSOS</h2>
        <table class="table table-striped table-bordered table-hover shadow-sm">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Imagen</th>
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Estudiantes</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $statement = $conexion->prepare("SELECT * FROM cursos");
                $statement->execute();
                $result = $statement->fetchAll();

                foreach ($result as $item) { ?>
                    <tr>
                        <td><?php echo $item['id'] ?></td>
                        <td><img src="<?php echo $item['imagen'] ?>" width="100" alt="Curso Imagen"></td>
                        <td><?php echo $item['titulo'] ?></td>
                        <td><?php echo $item['descripcion'] ?></td>
                        <td><?php echo $item['estudiantes'] ?></td>
                        <td class="d-flex justify-content-around">
                            <a class="text-success" href="editar_curso.php?id=<?php echo $item['id'] ?>"><i class="bi bi-pencil-fill"></i></a>
                            <a class="text-danger" href="borrar_curso.php?id=<?php echo $item['id'] ?>"><i class="bi bi-trash-fill"></i></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <div class="text-center mt-4">
            <a href="index.php" class="btn btn-secondary">Administra</a>
        </div>
    </div>

    <?php require('footer.php'); ?>

    <button type="submit" class="btn btn-primary w-100">Registrarse</button>
    </form>
</div>

<div class="container mt-5">
    <h2 class="text-center mb-4">Tabla de Cursos de Maquillaje</h2>
    <table class="table table-striped table-bordered table-hover shadow-sm">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Imagen</th>
                <th>Título</th>
                <th>Descripción</th>
                <th>Estudiantes</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $statement = $conexion->prepare("SELECT * FROM cursos");
            $statement->execute();
            $result = $statement->fetchAll();

            foreach ($result as $item) { ?>
                <tr>
                    <td><?php echo $item['id'] ?></td>
                    <td><img src="<?php echo $item['imagen'] ?>" width="100" alt="Curso Imagen"></td>
                    <td><?php echo $item['titulo'] ?></td>
                    <td><?php echo $item['descripcion'] ?></td>
                    <td><?php echo $item['estudiantes'] ?></td>
                    <td class="d-flex justify-content-around">
                        <a class="text-success" href="editar_curso.php?id=<?php echo $item['id'] ?>"><i class="bi bi-pencil-fill"></i></a>
                        <a class="text-danger" href="borrar_curso.php?id=<?php echo $item['id'] ?>"><i class="bi bi-trash-fill"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="text-center mt-4">
        <a href="index.php" class="btn btn-secondary">Administra</a>
    </div>
</div>
</div>

<script src="scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
<script src="particulas.js"></script>

<?php require('footer.php'); ?>