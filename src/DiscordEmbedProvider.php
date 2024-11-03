<?php

declare(strict_types=1);

namespace SnoerenDevelopment\DiscordWebhook;

use Illuminate\Contracts\Support\Arrayable;

class DiscordEmbedProvider implements Arrayable
{
    /**
     * The name of the embed provider.
     * 
     * @var string|null
     */
    protected string|null $name;

    /**
     * The URL of the embed provider.
     * 
     * @var string|null
     */
    protected string|null $url;

    /**
     * Create a new Discord embed provider instance.
     *
     * @return \SnoerenDevelopment\DiscordWebhook\DiscordEmbedProvider
     */
    public static function create(): self
    {
        return new self;
    }

    /**
     * Set the name of the embed provider.
     * 
     * @param  string $name The name of the embed provider.
     * @return \SnoerenDevelopment\DiscordWebhook\DiscordEmbedProvider
     */
    public function name(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Set the URL of the embed provider.
     * 
     * @param  string $url The URL of the embed provider.
     * @return \SnoerenDevelopment\DiscordWebhook\DiscordEmbedProvider
     */
    public function url(string $url): self
    {
        $this->url = $url;
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
        ], function ($value) {
            return !is_null($value);
        });
    }
}