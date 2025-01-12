<?php

namespace App\Filament\Resources\WebsiteImageResource\Pages;

use App\Filament\Resources\WebsiteImageResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditWebsiteImage extends EditRecord
{
    protected static string $resource = WebsiteImageResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
        ->success()
        ->title('Gambar berhasil diupdate');
    }
}
