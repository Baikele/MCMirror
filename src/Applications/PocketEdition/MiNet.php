<?php


namespace App\Applications\PocketEdition;

use App\Applications\ApplicationInterface;


class MiNet implements ApplicationInterface
{
    public function isRecommended(): bool
    {
        return true;
    }

    public function isAbandoned(): bool
    {
        return false;
    }

    public function isExternal(): bool
    {
        return true;
    }

    public function getUrl(): ?string
    {
        return 'https://ci.appveyor.com/project/NiclasOlofsson/MiNET/branch/master/artifacts';
    }

    public function getName(): string
    {
        return 'BungeeCord';
    }

    public function getCategory(): string
    {
        return 'Pocket Edition';
    }

    public function getOfficialLinks(): array
    {
        return [];
    }
}