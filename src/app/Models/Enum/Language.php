<?php

namespace App\Models\Enum;

class Language extends Enum
{
    const UKRAINIAN = 'ua';
    const RUSSIAN = 'ru';
    const ENGLISH = 'en';

    protected static $names = [
        self::UKRAINIAN => 'Ukrainian',
        self::RUSSIAN => 'Russian',
        self::ENGLISH => 'English',
    ];

    public function isUkrainian(): bool
    {
        return $this->getValue() === self::UKRAINIAN;
    }

    public function isRussian(): bool
    {
        return $this->getValue() === self::RUSSIAN;
    }

    public function isEnglish(): bool
    {
        return $this->getValue() === self::ENGLISH;
    }
}
