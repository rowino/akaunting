<?php

return [

    'next'                  => 'Næste',
    'refresh'               => 'Opdatér',

    'steps' => [
        'requirements'      => 'Venligst, opfyld følgende krav!',
        'language'          => 'Trin 1/3: Valg af sprog',
        'database'          => 'Trin 2/3: Database opsætning',
        'settings'          => 'Trin 3/3: Virksomhed og administrator detaljer',
    ],

    'language' => [
        'select'            => 'Vælg sprog',
    ],

    'requirements' => [
        'enabled'           => ':feature skal være aktiveret!',
        'disabled'          => ':feature skal være deaktiveret!',
        'extension'         => ':extension udvidelse skal være indlæst!',
        'directory'         => ':directory folderen skal være skrivbar!',
        'executable'        => 'The PHP CLI executable file is not defined/working or its version is not :php_version or higher! Please, ask your hosting company to set PHP_BINARY or PHP_PATH environment variable correctly.',
    ],

    'database' => [
        'hostname'          => 'Hostnavn',
        'username'          => 'Brugernavn',
        'password'          => 'Adgangskode',
        'name'              => 'Database',
    ],

    'settings' => [
        'company_name'      => 'Firmanavn',
        'company_email'     => 'Firma E-mail',
        'admin_email'       => 'Administrator e-mail',
        'admin_password'    => 'Administrator Password',
    ],

    'error' => [
        'php_version'       => 'Fejl: Anmod din host om at bruge PHP :php_version eller højere for både HTTP og CLI',
        'connection'        => 'Error: Kunne ikke forbinde til databasen! Kontroller, at oplysningerne er korrekte.',
    ],

];
