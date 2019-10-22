<?php

namespace LaravelEnso\Calendar;

use Illuminate\Support\ServiceProvider;
use LaravelEnso\Calendar\app\Facades\Calendars;

class CalendarServiceProvider extends ServiceProvider
{
    protected $register = [];

    public function boot()
    {
        Calendars::register($this->register);
    }
}
