<?php

namespace NotificationChannels\Workplace;

use Illuminate\Support\Arr;

class WorkplaceMessage
{
    /** @var string The message content */
    protected $content;

    /** @var boolean Flag content as markdown */
    protected $markdown = true;

    /**
     * Message constructor.
     *
     * @param string $content
     */
    public function __construct($content = '')
    {
        $this->content = $content;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function content($content)
    {
        $this->content = $content;
        return $this;
    }

    public function isMarkdown()
    {
        return $this->markdown;
    }

    public function isPlainText()
    {
        return !$this->markdown;
    }

    public function asMarkdown()
    {
        $this->markdown = true;
        return $this;
    }

    public function asPlainText()
    {
        $this->markdown = false;
        return $this;
    }
}
