<?php

declare(strict_types=1);

namespace YoutubeDl\Entity;

class Format extends AbstractEntity
{
    public function getFormat(): ?string
    {
        return $this->get('format');
    }

    public function getUrl(): ?string
    {
        return $this->get('url');
    }

    /**
     * @return array<string, string>
     */
    public function getHttpHeaders(): array
    {
        return $this->get('http_headers', []);
    }

    public function getAcodec(): ?string
    {
        return $this->get('acodec');
    }

    public function getVcodec(): ?string
    {
        return $this->get('vcodec');
    }

    public function getFormatNote(): ?string
    {
        return $this->get('format_note');
    }

    public function getAbr(): ?int
    {
        $v = $this->get('abr');
        return null === $v ? null : (int) $v;
    }

    public function getPlayerUrl(): ?string
    {
        return $this->get('player_url');
    }

    public function getExt(): ?string
    {
        return $this->get('ext');
    }

    public function getPreference(): ?int
    {
        $v = $this->get('preference');
        return null === $v ? null : (int) $v;
    }

    public function getFormatId(): ?string
    {
        return $this->get('format_id');
    }

    public function getContainer(): ?string
    {
        return $this->get('container');
    }

    public function getWidth(): ?int
    {
        $v = $this->get('width');
        return null === $v ? null : (int) $v;
    }

    public function getHeight(): ?int
    {
        $v = $this->get('height');
        return null === $v ? null : (int) $v;
    }

    public function getAsr(): ?int
    {
        $v = $this->get('asr');
        return null === $v ? null : (int) $v;
    }

    public function getTbr(): ?float
    {
        $v = $this->get('tbr');
        return null === $v ? null : (float) $v;
    }

    public function getFps(): ?float
    {
        $v =  $this->get('fps');
        return null === $v ? null : (float) $v;
    }

    public function getFilesize(): ?int
    {
        $v = $this->get('filesize');
        return null === $v ? null : (int) $v;
    }

    public function getResolution(): ?string
    {
        return $this->get('resolution');
    }

    public function getVbr(): ?int
    {
        $v = $this->get('vbr');
        return null === $v ? null : (int) $v;
    }

    public function getProtocol(): ?string
    {
        return $this->get('protocol');
    }

    public function getLanguagePreference(): ?int
    {
        $v = $this->get('language_preference');
        return null === $v ? null : (int) $v;
    }

    public function getQuality(): ?int
    {
        $v = $this->get('quality');
        return null === $v ? null : (int) $v;
    }

    public function getSourcePreference(): ?int
    {
        $v = $this->get('source_preference');
        return null === $v ? null : (int) $v;
    }

    public function getStretchedRatio(): ?float
    {
        $v = $this->get('stretched_ratio');
        return null === $v ? null : (float) $v;
    }

    public function getNoResume(): bool
    {
        return (bool) $this->get('no_resume', false);
    }
}
