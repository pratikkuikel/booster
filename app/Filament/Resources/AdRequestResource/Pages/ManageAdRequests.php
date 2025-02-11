<?php

namespace App\Filament\Resources\AdRequestResource\Pages;

use App\Filament\Resources\AdRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageAdRequests extends ManageRecords
{
    protected static string $resource = AdRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
