<main class="content">
    <?php
    renderTitle(
        'Registrar Ponto',
        'Mantenha o seu ponto consistente!',
        'icofont-check-alt'
    );
    include(TEMPLATE_PATH . "/messages.php");
    ?>

    <div class="card">
        <div class="card-header">
            <h3><?= $today ?></h3>
            <p class="mb-0">Os registros efetuados hoje</p>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-around m-5">
                <span class="record">Entrada 1: <?= isset($records->time1) ? $records->time1 : '---' ?></span>
                <span class="record">Saída 1: <?= isset($records->time2) ? $records->time2 : '---' ?></span>
            </div>
            <div class="d-flex justify-content-around m-5">
                <span class="record">Entrada 2: <?= isset($records->time3) ? $records->time3 : '---' ?></span>
                <span class="record">Saída 2: <?= isset($records->time4) ? $records->time4 : '---' ?></span>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-center">
            <a href="???" class="btn btn-success btn-lg">
                <i class="icofont-check mr-1"></i>
                Registrar ponto
            </a>
        </div>
    </div>

</main>