<main class="content">
    <?php

        renderTitle(
            'Cadastro de Usuários',
            'Crie ou atualize um usuário',
            'icofont-user'
        );
        include(TEMPLATE_PATH . "/messages.php");

    ?>

    <form action="#" method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Nome</label>
                <input type="text" name="name" id="name" placeholder="Informe o nome" 
                    class="form-control <?= $errors['name'] ? 'is-invalid' : ''?>" value="<?= @$name ?>">
                <div class="invalid-feedback">
                    <?= $errors['name'] ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" placeholder="Informe o e-mail" 
                    class="form-control <?= $errors['email'] ? 'is-invalid' : ''?>" value="<?= @$email ?>">
                <div class="invalid-feedback">
                    <?= $errors['email'] ?>
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="password">Senha</label>
                <input type="password" name="password" id="password" placeholder="Informe a senha" 
                    class="form-control <?= $errors['password'] ? 'is-invalid' : ''?>">
                <div class="invalid-feedback">
                    <?= $errors['password'] ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="confirm_password">Confirme a Senha</label>
                <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirme a senha" 
                    class="form-control <?= $errors['confirm_password'] ? 'is-invalid' : ''?>">
                <div class="invalid-feedback">
                    <?= $errors['confirm_password'] ?>
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="start_date">Data de Admissão</label>
                <input type="date" name="start_date" id="start_date" 
                    class="form-control <?= $errors['start_date'] ? 'is-invalid' : ''?>" value="<?= $start_date ?>">
                <div class="invalid-feedback">
                    <?= $errors['start_date'] ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="end_date">Data de Deslligamento</label>
                <input type="date" name="end_date" id="end_date" 
                    class="form-control <?= $errors['end_date'] ? 'is-invalid' : ''?>" value="<?= $end_date ?>">
                <div class="invalid-feedback">
                    <?= $errors['end_date'] ?>
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label class="mr-2" for="is_admin">Administrador?</label>
                <input type="checkbox" name="is_admin" id="is_admin" 
                    class=" <?= $errors['is_admin'] ? 'is-invalid' : ''?>" <?= @$is_admin ? 'checked' : ''?>>
                <div class="invalid-feedback">
                    <?= $errors['is_admin'] ?>
                </div>
            </div>
        </div>
        <div>
            <button class="btn btn-primary btn-lg">Salvar</button>
            <a  class="btn btn-secondary btn-lg"  href="/users.php">Calcelar</a>
        </div>
    </form>

</main>

