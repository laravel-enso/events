<?php

namespace LaravelEnso\Calendar\app\Services\Frequencies;

use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Builder;
use LaravelEnso\Calendar\app\Enums\Frequencies;
use LaravelEnso\Calendar\app\Services\FrequentEvent;
use LaravelEnso\Calendar\app\Contracts\ProvidesEvent;

class Daily extends BaseFrequency
{
    protected $frequency = Frequencies::Daily;

    public function query(Builder $query)
    {
        $query->where('frequence', $this->frequency)
            ->where('recurrence_ends_at', '>=', $this->startDate())
            ->where('starts_at', '<=', $this->endDate());
    }

    protected function dates(ProvidesEvent $event)
    {
        return $this->period($event);
    }
}
