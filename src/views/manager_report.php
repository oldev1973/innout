<main class="content">
    <?php

        renderTitle(
            'Relatório Gerencial',
            'Resumo de horas trabalhadas',
            'icofont-chart-histogram'
        );
    ?>

    <div class="summary-boxes">
        <div class="summary-box bg-primary">
            <i class="icofont-users"></i>
            <p class="title">Quantidade de funcionários</p>
            <h3 class="value"><?= $activeUserCount?></h3>
        </div>
        <div class="summary-box bg-danger">
            <i class="icofont-patient-bed"></i>
            <p class="title">Faltas</p>
            <h3 class="value"><?= count($absentUsers)?></h3>
        </div>
        <div class="summary-box bg-success">
            <i class="icofont-sand-clock"></i>
            <p class="title">Horas trabalhadas no mês</p>
            <h3 class="value"><?= $workedHoursInMonth?></h3>
        </div>
    </div>

    <?php if (count($absentUsers)) : ?>    
        <div class="card mt-4">
            <div class="card-header">
                <h4 class="card-title">Faltaram Hoje:</h4>
                <p class="card-category">Relação de funcionários ausentes até o momento</p>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <th>Nome</th>
                    </thead>
                    <tbody>
                        <?php foreach ($absentUsers as $name):?>
                            <tr>
                                <td><?= $name ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php endif ?>    
                       
</main>