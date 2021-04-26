<?php namespace Jwohlfert23\LaravelTall\Views\Components;

use Illuminate\View\Component;

class Icon extends Component
{
    public string $icon;
    public string $mode;

    public function __construct($icon, $mode = 'outline')
    {
        $this->icon = $icon;
        $this->mode = $mode;
    }

    public function render() : \Closure
    {
        return function (array $data) {
            $path = base_path("vendor/jwohlfert23/laravel-tall/resources/icons/{$this->mode}/{$this->icon}.svg");
            $svg = file_exists($path) ? file_get_contents($path) : '';
            $svg = str_replace('<svg ', '<svg '.$data['attributes'].' ', $svg);
            return $svg;
        };

    }
}
