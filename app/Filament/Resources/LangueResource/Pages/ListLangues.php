<?php

namespace App\Filament\Resources\LangueResource\Pages;

use App\Filament\Resources\LangueResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLangues extends ListRecords
{
    protected static string $resource = LangueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
