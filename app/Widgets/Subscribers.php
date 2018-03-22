<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class Subscribers extends AbstractWidget
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
        $count = \App\Subscriber::count();
        $string = 'Subscribers';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-pen',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager.dimmer.user_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => __('All Subscribers'),
                'link' => route('voyager.teams.index'),
            ],
            'image' => '/img/widget-bg.jpg',
        ]));
    }
}
