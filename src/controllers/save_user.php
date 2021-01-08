<?php

session_start();
requireValidSession();

$exception = null;

if (count($_POST)>0) {
    try {
        $newUser = new User($_POST);
        $newUser->insert();
        addSuccesMsg('Usuário cadastradoo com sucesso.');
    } catch (Exception $e) {
        $exception = $e;
    }
}

loadTemplateView('save_user', [
    'exception' => $exception
]);
