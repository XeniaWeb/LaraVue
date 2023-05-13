<?php

namespace App\Interfaces;

/**
 * Interface that obliges to display the name
 */
interface LocalizedEnum
{
    /**
     * Display name
     */
    public function toLocalizedString(): string;
}
