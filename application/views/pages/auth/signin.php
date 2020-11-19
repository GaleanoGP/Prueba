<!--Vista para iniciar sesión -->
<div class="container vh-100">
    <div class="row vh-100 justify-content-center align-items-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center text-uppercase">Login</h4>
                </div>
                <div class="card-body">
                    <?php if(!empty($this->session->flashdata('success'))): ?>
                        <div class="alert alert-success">
                            <strong>Éxito!</strong> <?= $this->session->flashdata('success') ?>
                        </div>
                    <?php endif; ?>
                    <?php if(!empty($this->session->flashdata('error'))): ?>
                        <div class="alert alert-danger">
                            <strong>Error!</strong> <?= $this->session->flashdata('error') ?>
                        </div>
                    <?php endif; ?>
                    <form data-parsley-validate="" id="validate-form" action="<?= current_url() ?>" method="post">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control <?php if(form_error('email')) echo 'incorrecto'; ?>" placeholder="Email" name="email" required>
                            <?php if (form_error('email')): ?>
                                <?= form_error('email', '<div class="invalid-feedback">', '</div>') ?>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input minlength="8" id="password" type="password" class="form-control <?php if(form_error('email')) echo 'incorrecto'; ?>" placeholder="Contraseña" name="password" required>
                            <?php if (form_error('password')): ?>
                                <?= form_error('password', '<div class="invalid-feedback">', '</div>') ?>
                            <?php endif; ?>
                        </div>
                        <p>
                            <a href="<?= base_url('/signup') ?>">¿No tienes cuenta?</a>
                        </p>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block text-uppercase">Accede</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
