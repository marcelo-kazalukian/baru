<?php

namespace App\Filament\Resources\Servers\Schemas;

use App\Enums\ServerStages;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;

use Filament\Schemas\Schema;

class ServerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->label('Server Name')->required(),
                TextInput::make('ip_address')->label('IP Address')->required(),
                TextInput::make('external_ip_address')->label('External IP Address'),
                Select::make('stage')
                    ->options(ServerStages::class)
            ]);
    }
}
