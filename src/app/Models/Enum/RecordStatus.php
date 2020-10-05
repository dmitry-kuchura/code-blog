<?php

namespace App\Models\Enum;

class RecordStatus extends Enum
{
    const ACTIVE = 'active';
    const DISABLE = 'disable';
    const DRAFT = 'trash';
    const TRASH = 'draft';

    protected static $names = [
        self::ACTIVE => 'Active',
        self::DISABLE => 'Disable',
        self::DRAFT => 'Trash',
        self::TRASH => 'Draft',
    ];

    public function isActive(): bool
    {
        return $this->getValue() === self::ACTIVE;
    }

    public function isDisable(): bool
    {
        return $this->getValue() === self::DISABLE;
    }
}
