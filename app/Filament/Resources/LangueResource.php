<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LangueResource\Pages;
use App\Filament\Resources\LangueResource\RelationManagers;
use App\Models\Langue;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LangueResource extends Resource
{
    protected static ?string $model = Langue::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required(),
                Forms\Components\Select::make('level')
                    ->options([
                        'A1' => 'A1 - Débutant',
                        'A2' => 'A2 - Élémentaire',
                        'B1' => 'B1 - Intermédiaire',
                        'B2' => 'B2 - Avancé',
                        'C1' => 'C1 - Courant',
                        'C2' => 'C2 - Bilingue',
                        'N' => 'Natif',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('certification'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->sortable(),
                Tables\Columns\TextColumn::make('level')->sortable(),
                Tables\Columns\TextColumn::make('certification')->limit(50),
                Tables\Columns\TextColumn::make('created_at')->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLangues::route('/'),
            'create' => Pages\CreateLangue::route('/create'),
            'edit' => Pages\EditLangue::route('/{record}/edit'),
        ];
    }
}
