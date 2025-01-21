<?php

declare(strict_types=1);

namespace Modules\Rating\Enums;

enum SupportedLocale: string
{
    case IT = 'it';
    case EN = 'en';
    case ES = 'es';
    case FR = 'fr';
    case DE = 'de';

    public function label(): string
    {
        return match($this) {
            self::IT => 'Italiano',
            self::EN => 'English',
            self::ES => 'Español',
            self::FR => 'Français',
            self::DE => 'Deutsch',
        };
    }

    public static function fromString(string $value): self
    {
        return match($value) {
            'it' => self::IT,
            'en' => self::EN,
            'es' => self::ES,
            'fr' => self::FR,
            'de' => self::DE,
            default => throw new \InvalidArgumentException("Invalid locale: {$value}"),
        };
    }

    /**
     * Get all available locales.
     *
     * @return array<string,string>
     */
    public static function toArray(): array
    {
        return array_reduce(self::cases(), function (array $carry, self $locale) {
            $carry[$locale->value] = $locale->label();
            return $carry;
        }, []);
    }
} 