<?php

namespace App\Livewire;

use Livewire\Attributes\Computed;
use Livewire\Component;

class CreateCode extends Component
{
    public string $message;

    protected array $symbols = [
        'enable',
        'public',
        'grade',
        'rocket',
        'cookie',
        'thunderstorm',
        'face',
        'skull',
        'home',
        'mode_cool',
        'bedroom_baby',
        'flatware',
        'single_bed',
        'sprinkler',
        'umbrella',
        'token',
        'skillet',
        'stadia_controller',
        'airwave',
        'floor_lamp',
        'close',
        'quiet_time',
        'heat',
        'tools_power_drill',
        'nest_eco_leaf',
        'air_freshener',
        'hiking',
        'light',
        'surfing',
        'piano',
        'toys_fan',
        'fertile',
        'bedtime',
        'social_leaderboard',
        'extension',
        // 'chat',
        // 'adjust',
    ];



    #[Computed(persist: true)]
    public function letters(): array
    {
        shuffle($this->symbols);

        return collect([
            'a', 'ą', 'b', 'c', 'ć', 'd', 'e', 'ę', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'ł',
            'm', 'n', 'ń', 'o', 'ó', 'p', 'q', 'r', 's', 'ś', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'ź', 'ż'
        ])
            ->combine($this->symbols)
            ->toArray();
    }

    public function render()
    {
        return view('livewire.create-code');
    }
}
