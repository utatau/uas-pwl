<?php

namespace App\Filament\Resources\MejaResource\Pages;

use App\Filament\Resources\MejaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMejas extends ListRecords
{
    protected static string $resource = MejaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
