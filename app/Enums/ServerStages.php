<?php 

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum ServerStages: string implements HasLabel
{
    case DEVELOPMENT = 'development';
    case TESTING = 'testing';
    case PRODUCTION = 'production';

    public function getLabel(): string
    {
        return match ($this) {
            self::DEVELOPMENT => 'Development',
            self::TESTING => 'Testing',
            self::PRODUCTION => 'Production',
        };
    }
}

?>