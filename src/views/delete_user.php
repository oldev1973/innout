<main class="content">
    <?php

        renderTitle(
            'Remover Usuário',
            'Remova um usuário do sistema',
            'icofont-user'
        );
        include(TEMPLATE_PATH . "/messages.php");

    ?>

   <h2>Deseja Remover o usuário: <?= $userToDelete->name ?> ? </h2>

</main>

