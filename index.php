<?php
$hours = [
    '1' => [
        'firstName' => 'Jonas',
        'lastName' => 'Jonaitis',
        'workingHours' => [
            '2023-12-12' => 100,
            '2023-11-12' => 50,
            '2023-10-12' => 15,
        ],
    ],
    '2' => [
        'firstName' => 'Petras',
        'lastName' => 'Petraitis',
        'workingHours' => [
            '2023-12-12' => 80,
            '2023-11-12' => 45,
            '2023-10-12' => 20,
        ],
    ],
    '3' => [
        'firstName' => 'Antanas',
        'lastName' => 'Antanaitis',
        'workingHours' => [
            '2023-12-12' => 90,
            '2023-11-12' => 55,
            '2023-10-12' => 25,
        ],
    ],
    '4' => [
        'firstName' => 'Ona',
        'lastName' => 'Onaitė',
        'workingHours' => [
            '2023-12-12' => 75,
            '2023-11-12' => 40,
            '2023-10-12' => 30,
        ],
    ],
    '5' => [
        'firstName' => 'Juozas',
        'lastName' => 'Juozaitis',
        'workingHours' => [
            '2023-12-12' => 110,
            '2023-11-12' => 60,
            '2023-10-12' => 35,
        ],
    ],
];

echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">';
echo '<table class="table">';
echo '<thead class="thead-dark"><tr><th>ID</th><th>Vardas</th><th>Pavardė</th><th>2023-10-12</th><th>2023-11-12</th><th>2023-12-12</th></tr></thead>';
echo '<tbody>';

foreach ($hours as $id => $employee) {
    echo '<tr>';
    echo '<td>' . $id . '</td>';
    echo '<td>' . $employee['firstName'] . '</td>';
    echo '<td>' . $employee['lastName'] . '</td>';
    echo '<td>' . $employee['workingHours']['2023-10-12'] . '</td>';
    echo '<td>' . $employee['workingHours']['2023-11-12'] . '</td>';
    echo '<td>' . $employee['workingHours']['2023-12-12'] . '</td>';
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';
?>
