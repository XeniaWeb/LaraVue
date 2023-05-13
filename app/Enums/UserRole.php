<?php

declare(strict_types=1);

namespace App\Enums;

use App\Interfaces\LocalizedEnum;

enum UserRole: string implements LocalizedEnum
{
    case ROLE_ADMIN = 'admin';
    case ROLE_EDITOR = 'editor';
    case ROLE_SUPPORT = 'support';
    case ROLE_VISITOR = 'visitor';
    case ROLE_SUBSCRIBER = 'subscriber';

    public function toLocalizedString(): string
    {
        return match ($this) {
            self::ROLE_ADMIN => trans('admin'),
            self::ROLE_EDITOR => trans('editor'),
            self::ROLE_SUPPORT => trans('support'),
            self::ROLE_VISITOR => trans('visitor'),
            self::ROLE_SUBSCRIBER => trans('subscriber'),
        };
    }

    /**
     * Возвращает массив в формате ключ-значение.
     */
    public static function forSelect(): array
    {
        $items = [];
        foreach (self::cases() as $case) {
            $items[$case->value] = $case->toLocalizedString();
        }

        return $items;
    }
}
