<?php

namespace Domain\Enums;

use Spatie\Enum\Enum;

/**
 * @method static self ACTIVE()
 * @method static self DISABLED()
 */
class ProductStatus extends Enum
{
    /**
     *
     * @return array
     */
    protected static function values(): array
    {
        return [
            'ACTIVE' => 0,
            'DISABLED' => 1,
        ];
    }

    /**
     *
     * @return array
     */
    protected static function labels(): array
    {
        return [
            'ACTIVE' => 'ativo',
            'DISABLED' => 'inativo',
        ];
    }
}
