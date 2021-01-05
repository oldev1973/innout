<main class="content">
    <?php

    renderTitle(
        'Relatório Mensal',
        'Acompanhe o seu saldo de horas',
        'icofont-ui-calendar'
    );
    ?>

    <div>
        <form action="#" method="POST" class="mb-4">
            <div class="input-group">
                <?php if ($user->is_admin):?>        
                    <select name="user" class="form-control mr-2" placeholder="Selecione um usuário">
                        <?php
                            foreach ($users as $user) {
                                $selected = $user->id === $selectedUserId ? 'selected' : '';
                                echo "<option value='{$user->id}' {$selected}>{$user->name}</option>";
                            }
                        ?>
                    </select>
                <?php endif ?>
                <select name="period" class="form-control mr-2" placeholder="Selecione um período">
                    <?php
                        foreach ($periods as $key => $month) {
                            $selected = $key === $selectedPeriod ? 'selected' : '';
                            echo "<option value='{$key}' {$selected}>{$month}</option>";
                        }
                    ?>
                </select>
                <button class="btn btn-primary">
                    <i class="icofont-search"></i>
                </button>
            </div>
        </form>
        <table class="table table-bordered table-striped table-hover">
            <tr class="bg-primary text-white">
                <td>Horas Tabalhadas</td>
                <td colspan="3"><?= $sumOfWorkedTime ?></td>
                <td>Saldo Mensal</td>
                <td><?= $balance ?></td>
            </tr>
        </table>
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <th>Dia</th>
                <th>Entrada 1</th>
                <th>Saida 1</th>
                <th>Entrada 2</th>
                <th>Saida 2</th>
                <th>Saldo</th>
            </thead>
            <tbody>
                <?php foreach ($report as $registry) : ?>
                    <tr>
                        <td><?= formatDateWithLocale(@$registry->work_date, '%A, %d de %B de %Y') ?></td>
                        <td><?= @$registry->time1 ?></td>
                        <td><?= @$registry->time2 ?></td>
                        <td><?= @$registry->time3 ?></td>
                        <td><?= @$registry->time4 ?></td>
                        <td><?= @$registry->getBalance(); ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

    </div>

</main>