<?php

declare(strict_types=1);

namespace SnoerenDevelopment\DiscordWebhook;

use Illuminate\Contracts\Support\Arrayable;

/**
 * "image", "thumbnail" and "video" embed structures all-in-one.
 */
class DiscordEmbedUrlObject implements Arrayable
{
    /**
     * The URL of the embed url object.
     * 
     * @var string|null
     */
    protected string|null $url;

    /**
     * The proxy URL of the embed url object.
     * 
     * @var string|null
     */
    protected string|null $proxyUrl;

    /**
     * The height of the embed url object.
     * 
     * @var int|null
     */
    protected int|null $height;

    /**
     * The width of the embed url object.
     * 
     * @var int|null
     */
    protected int|null $width;

    /**
     * Create a new Discord embed url object instance.
     *
     * @return \SnoerenDevelopment\DiscordWebhook\DiscordEmbedUrlObject
     */
    public static function create(): self
    {
        return new self;
    }

    /**
     * Set the URL of the embed url object.
     * 
     * @param  string $url The URL of the embed url object.
     * @return \SnoerenDevelopment\DiscordWebhook\DiscordEmbedUrlObject
     */
    public function url(string $url): self
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Set the proxy URL of the embed url object.
     * 
     * @param  string $proxyUrl The proxy URL of the embed url object.
     * @return \SnoerenDevelopment\DiscordWebhook\DiscordEmbedUrlObject
     */
    public function proxyUrl(string $proxyUrl): self
    {
        $this->proxyUrl = $proxyUrl;
        return $this;
    }

    /**
     * Set the height of the embed url object.
     * 
     * @param  int $height The height of the embed url object.
     * @return \SnoerenDevelopment\DiscordWebhook\DiscordEmbedUrlObject
     */
    public function height(int $height): self
    {
        $this->height = $height;
        return $this;
    }

    /**
     * Set the width of the embed url object.
     * 
     * @param  int $width The width of the embed url object.
     * @return \SnoerenDevelopment\DiscordWebhook\DiscordEmbedUrlObject
     */
    public function width(int $width): self
    {
        $this->width = $width;
        return $this;
    }

    /**
     * Get the instance as an array.
     *
     * @return mixed[]
     */
    public function toArray(): array
    {
        return array_filter([
            'url' => $this->url,
            'proxy_url' => $this->proxyUrl,
            'height' => $this->height,
            'width' => $this->width,
        ], function ($value) {
            return !is_null($value);
        });
    }
}