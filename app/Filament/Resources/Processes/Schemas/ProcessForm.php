<?php

namespace App\Filament\Resources\Processes\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ProcessForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->label('Process Name')->required(),
                Textarea::make('description')->label('Description'),
            ]);
    }
}
