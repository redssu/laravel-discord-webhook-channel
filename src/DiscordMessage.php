<?php
declare(strict_types = 1);

namespace SnoerenDevelopment\DiscordWebhook;

use Illuminate\Contracts\Support\Arrayable;

class DiscordMessage implements Arrayable
{
    /**
     * The message content.
     *
     * @var string
     */
    protected $content;

    /**
     * The username.
     *
     * @var string
     */
    protected $username;

    /**
     * The avatar URL.
     *
     * @var string
     */
    protected $avatarUrl;

    /**
     * Indicates that this is a Text-to-speech message.
     *
     * @var boolean
     */
    protected $tts;

    /**
     * Create a new Discord message instance.
     *
     * @return \SnoerenDevelopment\DiscordWebhook\DiscordMessage
     */
    public static function create(): self
    {
        return new self;
    }

    /**
     * Set the content.
     *
     * @param  string $content The content.
     * @return \SnoerenDevelopment\DiscordWebhook\DiscordMessage
     *
     * @throws \InvalidArgumentException Thrown on empty content.
     */
    public function content(string $content): self
    {
        if (empty($content)) {
            throw new \InvalidArgumentException('Content must not be empty.');
        }

        $this->content = $content;
        return $this;
    }

    /**
     * Set the username.
     *
     * @param  string $username The username.
     * @return \SnoerenDevelopment\DiscordWebhook\DiscordMessage
     */
    public function username(string $username): self
    {
        $this->username = $username;
        return $this;
    }

    /**
     * Set the avatar url.
     *
     * @param  string $url The avatar url.
     * @return \SnoerenDevelopment\DiscordWebhook\DiscordMessage
     */
    public function avatar(string $url): self
    {
        $this->avatarUrl = $url;
        return $this;
    }

    /**
     * Set the TTS flag.
     *
     * @param  boolean $tts The TTS flag.
     * @return \SnoerenDevelopment\DiscordWebhook\DiscordMessage
     */
    public function tts(bool $tts): self
    {
        $this->tts = $tts;
        return $this;
    }

    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toArray()
    {
        return array_filter([
            'content' => $this->content,
            'username' => $this->username,
            'avatar_url' => $this->avatarUrl,
            'tts' => $this->tts,
        ]);
    }
}
