<?php
declare(strict_types=1);

namespace SnoerenDevelopment\DiscordWebhook;

use Illuminate\Contracts\Support\Arrayable;

class DiscordEmbed implements Arrayable
{
    /**
     * The title of the embed.
     *
     * @var string|null
     */
    protected string|null $title = null;

    /**
     * The description of the embed.
     *
     * @var string|null
     */
    protected string|null $description = null;

    /**
     * The URL of the embed.
     *
     * @var string|null
     */
    protected string|null $url = null;

    /**
     * The ISO 8601 timestamp of the embed content.
     * 
     * Example value: 2024-09-14 07:00:00.000
     * 
     * @var string|null 
     */
    protected string|null $timestamp = null;

    /**
     * The color code of the embed.
     * 
     * @var int|null
     */
    protected int|null $color = null;

    /**
     * The footer of the embed.
     * 
     * @var \SnoerenDevelopment\DiscordWebhook\DiscordEmbedFooter|null
     */
    protected DiscordEmbedFooter|null $footer = null;

    /**
     * The image of the embed.
     * 
     * @var \SnoerenDevelopment\DiscordWebhook\DiscordEmbedUrlObject|null
     */
    protected DiscordEmbedUrlObject|null $image = null;

    /**
     * The thumbnail of the embed.
     * 
     * @var \SnoerenDevelopment\DiscordWebhook\DiscordEmbedUrlObject|null
     */
    protected DiscordEmbedUrlObject|null $thumbnail = null;

    /**
     * The video of the embed.
     * 
     * @var \SnoerenDevelopment\DiscordWebhook\DiscordEmbedUrlObject|null
     */
    protected DiscordEmbedUrlObject|null $video = null;

    /**
     * The provider of the embed.
     * 
     * @var \SnoerenDevelopment\DiscordWebhook\DiscordEmbedProvider|null
     */
    protected DiscordEmbedProvider|null $provider = null;

    /**
     * The author of the embed.
     * 
     * @var \SnoerenDevelopment\DiscordWebhook\DiscordEmbedAuthor|null
     */
    protected DiscordEmbedAuthor|null $author = null;

    /**
     * The fields of the embed.
     * 
     * @var \SnoerenDevelopment\DiscordWebhook\DiscordEmbedField[]|null
     */
    protected array|null $fields = null;

    /**
     * Create a new Discord embed instance.
     *
     * @return \SnoerenDevelopment\DiscordWebhook\DiscordEmbed
     */
    public static function create(): self
    {
        return new self;
    }

    /**
     * Set the title of the embed.
     *
     * @param  string $title The title of the embed.
     * @return \SnoerenDevelopment\DiscordWebhook\DiscordEmbed
     */
    public function title(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Set the description of the embed.
     *
     * @param  string $description The description of the embed.
     * @return \SnoerenDevelopment\DiscordWebhook\DiscordEmbed
     */
    public function description(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Set the URL of the embed.
     *
     * @param  string $url The URL of the embed.
     * @return \SnoerenDevelopment\DiscordWebhook\DiscordEmbed
     */

    public function url(string $url): self
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Set the ISO 8601 timestamp of the embed.
     * 
     * Example value: 2024-09-14 07:00:00.000
     * 
     * @param  string $timestamp The ISO 8601 timestamp of the embed.
     * @return \SnoerenDevelopment\DiscordWebhook\DiscordEmbed
     */
    public function timestamp(string $timestamp): self
    {
        $this->timestamp = $timestamp;
        return $this;
    }

    /**
     * Set the color code of the embed.
     *
     * @param  int $color The color code of the embed.
     * @return \SnoerenDevelopment\DiscordWebhook\DiscordEmbed
     */
    public function color(int $color): self
    {
        $this->color = $color;
        return $this;
    }

    /**
     * Set the footer of the embed.
     *
     * @param  \SnoerenDevelopment\DiscordWebhook\DiscordEmbedFooter $footer The footer of the embed.
     * @return \SnoerenDevelopment\DiscordWebhook\DiscordEmbed
     */
    public function footer(DiscordEmbedFooter $footer): self
    {
        $this->footer = $footer;
        return $this;
    }

    /**
     * Set the image of the embed.
     *
     * @param  \SnoerenDevelopment\DiscordWebhook\DiscordEmbedUrlObject $image The image of the embed.
     * @return \SnoerenDevelopment\DiscordWebhook\DiscordEmbed
     */
    public function image(DiscordEmbedUrlObject $image): self
    {
        $this->image = $image;
        return $this;
    }

    /**
     * Set the thumbnail of the embed.
     *
     * @param  \SnoerenDevelopment\DiscordWebhook\DiscordEmbedUrlObject $thumbnail The thumbnail of the embed.
     * @return \SnoerenDevelopment\DiscordWebhook\DiscordEmbed
     */
    public function thumbnail(DiscordEmbedUrlObject $thumbnail): self
    {
        $this->thumbnail = $thumbnail;
        return $this;
    }

    /**
     * Set the video of the embed.
     *
     * @param  \SnoerenDevelopment\DiscordWebhook\DiscordEmbedUrlObject $video The video of the embed.
     * @return \SnoerenDevelopment\DiscordWebhook\DiscordEmbed
     */
    public function video(DiscordEmbedUrlObject $video): self
    {
        $this->video = $video;
        return $this;
    }

    /**
     * Set the provider of the embed.
     *
     * @param  \SnoerenDevelopment\DiscordWebhook\DiscordEmbedProvider $provider The provider of the embed.
     * @return \SnoerenDevelopment\DiscordWebhook\DiscordEmbed
     */
    public function provider(DiscordEmbedProvider $provider): self
    {
        $this->provider = $provider;
        return $this;
    }

    /**
     * Set the author of the embed.
     *
     * @param  \SnoerenDevelopment\DiscordWebhook\DiscordEmbedAuthor $author The author of the embed.
     * @return \SnoerenDevelopment\DiscordWebhook\DiscordEmbed
     */
    public function author(DiscordEmbedAuthor $author): self
    {
        $this->author = $author;
        return $this;
    }

    /**
     * Add fields to the embed.
     *
     * @param  \SnoerenDevelopment\DiscordWebhook\DiscordEmbedField[] $fields Fields to add.
     * @return \SnoerenDevelopment\DiscordWebhook\DiscordEmbed
     */
    public function fields(array $fields): self
    {
        $this->fields = [...($this->fields ?? []), ...$fields];
        return $this;
    }

    /** 
     * Add a field to the embed.
     * 
     * @param  \SnoerenDevelopment\DiscordWebhook\DiscordEmbedField $field The field to add.
     * @return \SnoerenDevelopment\DiscordWebhook\DiscordEmbed
     */
    public function field(DiscordEmbedField $field): self
    {
        $this->fields = [...($this->fields ?? []), $field];
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
            'type' => 'rich', // This is the only type supported in webhook messages.
            'title' => $this->title,
            'description' => $this->description,
            'url' => $this->url,
            'timestamp' => $this->timestamp,
            'color' => $this->color,
            'footer' => $this->footer?->toArray(),
            'image' => $this->image?->toArray(),
            'thumbnail' => $this->thumbnail?->toArray(),
            'video' => $this->video?->toArray(),
            'provider' => $this->provider?->toArray(),
            'author' => $this->author?->toArray(),
            'fields' => $this->fields ? array_map(
                fn(DiscordEmbedField $field) => $field->toArray(),
                $this->fields
            ) : null,
        ], function ($value) {
            return !is_null($value);
        });
    }
}