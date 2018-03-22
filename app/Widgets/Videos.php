<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class Videos extends AbstractWidget
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
        $count = \App\Video::count();
        $string = 'Videos';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-video',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager.dimmer.user_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => __('All Videos'),
                'link' => route('voyager.teams.index'),
            ],
            'image' => '/img/widget-bg.jpg',
        ]));
    }
}
