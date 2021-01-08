<?php

session_start();
requireValidSession(true);

$activeUserCount = User::getActiveUserCount();
$absentUsers = WorkingHours::getAbsentUsers();

$yearAndMonth = (new DateTime())->format('Y-m');
$workedSecondsInMonth = WorkingHours::getWorketTimeInMonth($yearAndMonth);

$workedHoursInMonth = explode(':', getTimeStringFromSeconds($workedSecondsInMonth))[0];

loadTemplateView('manager_report', [
    'activeUserCount' => $activeUserCount,
    'absentUsers' => $absentUsers,
    'workedHoursInMonth' => $workedHoursInMonth,
]);
