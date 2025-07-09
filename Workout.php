<?php
namespace Kirby\Module6aMvcProject\Models;

class Workout {
    public $day;
    public $type;
    public $duration; 
    public $notes;

    public function __construct($day, $type, $duration, $notes = "") {
        $this->day = $day;
        $this->type = $type;
        $this->duration = $duration;
        $this->notes = $notes;
    }

    public function isRestDay() {
        return strtolower($this->type) === 'rest';
    }

    public function getDurationHours() {
        return $this->duration / 60;
    }
}