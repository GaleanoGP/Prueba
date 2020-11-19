<!--Vista para registrar usuarios. -->
<div class="container vh-100">
    <div class="row vh-100 justify-content-center align-items-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center text-uppercase">Registro</h4>
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
                        <div class="row">
                           <div class="col-md-6 col-sm-12">
                               <div class="form-group">
                                   <label for="first_name">Nombre</label>
                                   <input value="<?= set_value('first_name') ?>" type="text" class="form-control <?php if(form_error('first_name')) echo 'incorrecto'; ?>" placeholder="Nombre" name="first_name" required pattern="^[a-zA-Z\s]+">
                                   <?php if(form_error('first_name')): ?>
                                        <?= form_error('first_name', '<div class="invalid-feedback">', '</div>') ?>
                                   <?php endif; ?>
                               </div>
                           </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="last_name">Apellido</label>
                                    <input value="<?= set_value('last_name') ?>" type="text" class="form-control <?php if(form_error('last_name')) echo 'incorrecto'; ?>" placeholder="Apellido" name="last_name" required pattern="^[a-zA-Z\s]+">
                                    <?php if(form_error('last_name')): ?>
                                        <?= form_error('last_name', '<div class="invalid-feedback">', '</div>') ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input value="<?= set_value('email') ?>" type="email" placeholder="Email" class="form-control <?php if(form_error('email')) echo 'incorrecto'; ?>" name="email" required>
                            <?php if(form_error('email')): ?>
                                <?= form_error('email', '<div class="invalid-feedback">', '</div>') ?>
                            <?php endif; ?>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="password">Contraseña</label>
                                    <input type="password" class="form-control <?php if(form_error('password')) echo 'incorrecto'; ?>" name="password" required minlength="8" placeholder="Contraseña" id="password">
                                    <?php if(form_error('password')): ?>
                                        <?= form_error('password', '<div class="invalid-feedback">', '</div>') ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="password">Confirma contraseña</label>
                                    <input data-parsley-equalto="#password" type="password" class="form-control <?php if(form_error('confirm_password')) echo 'incorrecto'; ?>" name="confirm_password" required minlength="8" placeholder="Confirma la contraseña">
                                    <?php if(form_error('confirm_password')): ?>
                                        <?= form_error('confirm_password', '<div class="invalid-feedback">', '</div>') ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <p class="py-1">
                            <a href="<?= base_url('/') ?>">¿Ya tienes una cuenta?</a>
                        </p>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block text-uppercase">Registrarse</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
