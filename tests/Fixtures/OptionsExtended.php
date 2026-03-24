<?php

declare(strict_types=1);

namespace YoutubeDl\Tests\Fixtures;

final class OptionsExtended extends \YoutubeDl\Options
{
    // Preset Aliases
    private ?string $presetAlias = null;

    public function presetAlias(?string $presetAlias): self
    {
        $new = clone $this;
        $new->presetAlias = $presetAlias;

        return $new;
    }

    public function toArray(): array
    {
        $array = parent::toArray();

        $array['preset-alias'] = $this->presetAlias;

        return $array;
    }
}
