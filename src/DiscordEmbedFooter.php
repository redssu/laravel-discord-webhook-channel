<?php

declare(strict_types=1);

namespace SnoerenDevelopment\DiscordWebhook;

use Illuminate\Contracts\Support\Arrayable;

class DiscordEmbedFooter implements Arrayable
{
    /**
     * The text of the embed footer.
     *
     * @var string|null
     */
    protected string|null $text;

    /**
     * The icon URL of the embed footer.
     * 
     * @var string|null
     */
    protected string|null $iconUrl;

    /**
     * The proxy icon URL of the embed footer.
     * 
     * @var string|null
     */
    protected string|null $proxyIconUrl;

    /**
     * Create a new Discord embed footer instance.
     *
     * @return \SnoerenDevelopment\DiscordWebhook\DiscordEmbedFooter
     */
    public static function create(): self
    {
        return new self;
    }

    /**
     * Set the text of the embed footer.
     * 
     * @param  string $text The text of the embed footer.
     * @return \SnoerenDevelopment\DiscordWebhook\DiscordEmbedFooter
     */
    public function text(string $text): self
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Set the icon URL of the embed footer.
     * 
     * @param  string $iconUrl The icon URL of the embed footer.
     * @return \SnoerenDevelopment\DiscordWebhook\DiscordEmbedFooter
     */
    public function iconUrl(string $iconUrl): self
    {
        $this->iconUrl = $iconUrl;
        return $this;
    }

    /**
     * Set the proxy icon URL of the embed footer.
     * 
     * @param  string $proxyIconUrl The proxy icon URL of the embed footer.
     * @return \SnoerenDevelopment\DiscordWebhook\DiscordEmbedFooter
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
            'text' => $this->text,
            'icon_url' => $this->iconUrl,
            'proxy_icon_url' => $this->proxyIconUrl,
        ], function ($value) {
            return !is_null($value);
        });
    }
}