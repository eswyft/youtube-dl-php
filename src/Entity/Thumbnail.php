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
        $p = $this->get('preference');
        return null === $p ? null : intval($p);
    }

    public function getWidth(): ?int
    {
        $w = $this->get('width');
        return 'unknown' === $w ? null : intval($w);
    }

    public function getHeight(): ?int
    {
        $h = $this->get('height');
        return 'unknown' === $h ? null : intval($h);
    }

    public function getResolution(): ?string
    {
        return $this->get('resolution');
    }
}
