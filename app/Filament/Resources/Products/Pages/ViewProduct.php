<?php

namespace App\Filament\Resources\Products\Pages;

use Filament\Actions\Action;
use App\Filament\Resources\Products\ProductResource;
use Filament\Resources\Pages\ViewRecord;

class ViewProduct extends ViewRecord
{
    protected static string $resource = ProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('back')
                ->label('Kembali')
                ->url($this->getResource()::getUrl('index'))
                ->icon('heroicon-o-arrow-left')
                ->color('secondary'),
        ];
    }
}
