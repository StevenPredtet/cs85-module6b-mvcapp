<?php
namespace Kirby\Module6aMvcProject\Controllers;

use Kirby\Module6aMvcProject\Models\Workout;

class WorkoutController {

    private $workouts = [];

    public function __construct() {
         $this->workouts = [
            new Workout("Monday", "Push", 60, "Chest and shoulders"),
            new Workout("Tuesday", "Pull", 50, "Back and biceps"),
            new Workout("Wednesday", "Legs", 70, "Squats and lunges"),
            new Workout("Sunday", "Rest", 0, "Rest day")
        ];
    }

    public function validateDay($day) {
        $validDays = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
        return in_array($day, $validDays);
    }

    public function getWorkoutByDay($day) {
        foreach ($this->workouts as $workout) {
            if (strcasecmp($workout->day, $day) === 0) {
                return $workout;
            }
        }
        return null;
    }

    public function showWorkout($day) {
        if (!$this->validateDay($day)) {
            echo "Invalid day provided.";
            return;
        }

        $workout = $this->getWorkoutByDay($day);

        if (!$workout) {
            echo "No workout found for $day.";
            return;
        }

           include __DIR__ . '/../../views/workout_view.php';
    }
}
