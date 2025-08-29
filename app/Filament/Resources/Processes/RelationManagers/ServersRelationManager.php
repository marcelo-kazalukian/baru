<?php

namespace App\Filament\Resources\Processes\RelationManagers;

use Filament\Actions\AttachAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DetachAction;
use Filament\Actions\DetachBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ServersRelationManager extends RelationManager
{
    protected static string $relationship = 'servers';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('location')
                    ->maxLength(255)
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                TextColumn::make('name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('stage')
                    ->sortable(),                    
                TextColumn::make('ip_address'),
                TextColumn::make('location'),
            ])
            ->filters([
                //
            ])
            ->headerActions([                
                AttachAction::make()->schema(fn (AttachAction $action): array => [
                    $action->getRecordSelect(),
                    TextInput::make('location'),
                ]),
            ])
            ->recordActions([
                EditAction::make(),
                DetachAction::make(),                
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DetachBulkAction::make(),                    
                ]),
            ]);
    }
}
