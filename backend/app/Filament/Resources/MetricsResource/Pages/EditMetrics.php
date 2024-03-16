<?php

namespace App\Filament\Resources\MetricsResource\Pages;

use App\Filament\Resources\MetricsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMetrics extends EditRecord
{
    protected static string $resource = MetricsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
