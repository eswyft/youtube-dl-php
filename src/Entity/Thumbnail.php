<?php

declare(strict_types=1);

namespace YoutubeDl\Entity;

class Thumbnail extends AbstractEntity
{
    public function getId(): ?string
    {
        return $this->get('id');
    }

    public function getUrl(): ?string
    {
        return $this->get('url');
    }

    public function getPreference(): ?int
    {
        $v = $this->get('preference');
        return null === $v ? null : (int) $v;
    }

    public function getWidth(): ?int
    {
        $v = $this->get('width');
        return 'unknown' === $v ? null : (int) $v;
    }

    public function getHeight(): ?int
    {
        $v = $this->get('height');
        return 'unknown' === $v ? null : (int) $v;
    }

    public function getResolution(): ?string
    {
        return $this->get('resolution');
    }
}
