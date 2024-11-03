<?php

declare(strict_types=1);

namespace SnoerenDevelopment\DiscordWebhook;

use Illuminate\Contracts\Support\Arrayable;

class DiscordEmbedField implements Arrayable
{
    /**
     * The name of the embed field.
     *
     * @var string|null
     */
    protected string|null $name;

    /**
     * The value of the embed field.
     * 
     * @var string|null
     */
    protected string|null $value;

    /**
     * Indicates whether the field should be displayed inline.
     * 
     * @var boolean|null
     */
    protected bool|null $inline;

    /**
     * Create a new Discord embed field instance.
     *
     * @return \SnoerenDevelopment\DiscordWebhook\DiscordEmbedField
     */
    public static function create(): self
    {
        return new self;
    }

    /**
     * Set the name of the embed field.
     * 
     * @param  string $name The name of the embed field.
     * @return \SnoerenDevelopment\DiscordWebhook\DiscordEmbedField
     */
    public function name(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Set the value of the embed field.
     * 
     * @param  string $value The value of the embed field.
     * @return \SnoerenDevelopment\DiscordWebhook\DiscordEmbedField
     */
    public function value(string $value): self
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Set whether the field should be displayed inline.
     * 
     * @param  boolean $inline Whether the field should be displayed inline.
     * @return \SnoerenDevelopment\DiscordWebhook\DiscordEmbedField
     */
    public function inline(bool $inline): self
    {
        $this->inline = $inline;
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
            'value' => $this->value,
            'inline' => $this->inline,
        ], function ($value) {
            return !is_null($value);
        });
    }
}