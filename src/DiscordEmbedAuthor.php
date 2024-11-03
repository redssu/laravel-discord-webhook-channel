<?php

declare(strict_types=1);

namespace SnoerenDevelopment\DiscordWebhook;

use Illuminate\Contracts\Support\Arrayable;

class DiscordEmbedAuthor implements Arrayable
{
    /**
     * The name of the embed author.
     *
     * @var string|null
     */
    protected string|null $name;

    /**
     * The url of the embed author.
     * 
     * @var string|null
     */
    protected string|null $url;

    /**
     * The icon URL of the embed author.
     * 
     * @var string|null
     */
    protected string|null $iconUrl;

    /**
     * The proxy icon URL of the embed author.
     * 
     * @var string|null
     */
    protected string|null $proxyIconUrl;

    /**
     * Create a new Discord embed author instance.
     *
     * @return \SnoerenDevelopment\DiscordWebhook\DiscordEmbedAuthor
     */
    public static function create(): self
    {
        return new self;
    }

    /**
     * Set the name of the embed author.
     * 
     * @param  string $name The name of the embed author.
     * @return \SnoerenDevelopment\DiscordWebhook\DiscordEmbedAuthor
     */
    public function name(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Set the URL of the embed author.
     * 
     * @param  string $url The URL of the embed author.
     * @return \SnoerenDevelopment\DiscordWebhook\DiscordEmbedAuthor
     */
    public function url(string $url): self
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Set the icon URL of the embed author.
     * 
     * @param  string $iconUrl The icon URL of the embed author.
     * @return \SnoerenDevelopment\DiscordWebhook\DiscordEmbedAuthor
     */
    public function iconUrl(string $iconUrl): self
    {
        $this->iconUrl = $iconUrl;
        return $this;
    }

    /**
     * Set the proxy icon URL of the embed author.
     * 
     * @param  string $proxyIconUrl The proxy icon URL of the embed author.
     * @return \SnoerenDevelopment\DiscordWebhook\DiscordEmbedAuthor
     */
    public function proxyIconUrl(string $proxyIconUrl): self
    {
        $this->proxyIconUrl = $proxyIconUrl;
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
            'name' => $this->name,
            'url' => $this->url,
            'icon_url' => $this->iconUrl,
            'proxy_icon_url' => $this->proxyIconUrl,
        ], function ($value) {
            return !is_null($value);
        });
    }
}