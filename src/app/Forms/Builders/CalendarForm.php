<?php

namespace LaravelEnso\Calendar\app\Forms\Builders;

use LaravelEnso\Forms\app\Services\Form;
use LaravelEnso\Calendar\app\Models\Calendar;

class CalendarForm
{
    protected const FormPath = __DIR__.'/../Templates/calendar.json';

    protected $form;

    public function __construct()
    {
        $this->form = (new Form(static::FormPath));
    }

    public function create()
    {
        return $this->form->actions('store')
            ->create();
    }

    public function edit(Calendar $calendar)
    {
        return $this->form->actions(['destroy', 'create', 'update'])
            ->edit($calendar);
    }
}
