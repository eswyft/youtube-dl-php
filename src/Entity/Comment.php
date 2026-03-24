<?php

declare(strict_types=1);

namespace YoutubeDl\Entity;

class Comment extends AbstractEntity
{
    public function getAuthor(): ?string
    {
        return $this->get('author');
    }

    public function getAuthorId(): ?string
    {
        return $this->get('author_id');
    }

    public function getId(): mixed
    {
        return $this->get('id');
    }

    public function getHtml(): ?string
    {
        return $this->get('html');
    }

    public function getText(): ?string
    {
        return $this->get('text');
    }

    public function getTimestamp(): ?int
    {
        return $this->get('timestamp');
    }

    public function getParent(): mixed
    {
        return $this->get('parent');
    }
}
