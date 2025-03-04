<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\Media;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected $casts = [
        'media_urls' => 'array',
    ];

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->required(),
                Forms\Components\Textarea::make('description_fr')->label('Description (FR)')->required(),
                Forms\Components\Textarea::make('description_en')->label('Description (EN)')->required(),
                Forms\Components\TextInput::make('technologies')->label('Technologies utilisées'),
                Forms\Components\TextInput::make('link')->url(),
                Forms\Components\Repeater::make('media_urls')
                    ->label('Médias associés')
                    ->schema([
                        Forms\Components\TextInput::make('url')->label('URL du média')->required(),
                        Forms\Components\Select::make('type')
                            ->options([
                                'Image' => 'Image',
                                'Video' => 'Vidéo',
                                'Heroicon' => 'Icône Heroicon',
                            ])->required(),
                    ])
                    ->mutateDehydratedStateUsing(fn ($state) => json_encode($state)) // Convertit les données avant enregistrement
                    ->dehydrated(fn ($state) => !empty($state)) // S'assure que ce champ est bien envoyé
                    ->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->sortable(),
                Tables\Columns\TextColumn::make('technologies'),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
