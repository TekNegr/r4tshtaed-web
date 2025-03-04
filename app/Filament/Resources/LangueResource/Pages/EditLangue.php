<?php

namespace App\Filament\Resources\LangueResource\Pages;

use App\Filament\Resources\LangueResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLangue extends EditRecord
{
    protected static string $resource = LangueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
