<!--En este archivo se mostrarán los usuarios registrados , nombre correo y el rol. Este apartado solo lo podrá ver el usuario con rol de administrador. -->
<div class="container my-lg-5">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    Usuarios
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Rol</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $user): ?>
                                <tr>
                                    <td><?= $user['first_name']." ".$user['last_name'] ?></td>
                                    <td><?= $user['email'] ?></td>
                                    <td>
                                        <span class="badge badge-primary"><?= ucfirst($user['role']) ?></span>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
