<?php

declare(strict_types=1);

namespace Modules\Rating\DataObjects;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class RatingData extends Data
{
    public function __construct(
        public readonly string $title = '',
        public readonly string $description = '',
        public readonly bool $disabled = false,
        public readonly int $position = 0,
        public readonly string $locale = 'it',
        public readonly ?string $image_url = null,
    ) {
    }

    /**
     * Create from array with type casting.
     *
     * @param array<string,mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            title: (string)($data['title'] ?? ''),
            description: (string)($data['description'] ?? ''),
            disabled: (bool)($data['disabled'] ?? false),
            position: (int)($data['position'] ?? 0),
            locale: (string)($data['locale'] ?? 'it'),
            image_url: $data['image_url'] ?? null,
        );
    }
} 