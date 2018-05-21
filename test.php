<?php
if (file_exists(__DIR__.'/vendor/autoload.php')) {
    require __DIR__.'/vendor/autoload.php';
} else {
    require __DIR__.'/../../autoload.php';
}

use Spatie\SchemaOrg\Schema;

echo $localBusiness = Schema::localBusiness()
    ->address('-')
    ->email('-')
    ->toYaml();