<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class Share extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $twitterLink = $this->getTwitterLink();
        $facebookLink = $this->getTwitterLink();

        return view('widgets.share', [
            'config' => $this->config,
            'twitterLink' => $twitterLink,
            'facebookLink' => $facebookLink,
        ]);
    }

    private function getTwitterLink(): string
    {
        $title = 'Title here';
        $short_url = 'http://shorturl.co';
        $url = 'http://fullurl.com';

        $twitter_params =
            '?text=' . urlencode($title) . '+-' .
            '&amp;url=' . urlencode($short_url) .
            '&amp;counturl=' . urlencode($url) .
            '';

        return "http://twitter.com/share" . $twitter_params . "";
    }
}

