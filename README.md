Fitness tracker

Description: This is a fitness tracker application, the app lets users track their weekly workout schedule.
It includes the workout type, the duration and notes.

Raw AI Prompt: Generate a PHP method named getSummary for a Workout class which returns a readable string describing the workout.
If there's a rest day mention that and give details about the type of workout, the duration, and notes.

AI Output: public function getSummary() {
    if ($this->isRestDay()) {
        return "Rest day on {$this->day}. Time to recover!";
    } else {
        return "Workout on {$this->day}: {$this->type} for {$this->duration} minutes. Notes: {$this->notes}";
    }
}

Critique: The method summarizes workouts by returning a simple message depending on if it's a rest day or workout day.
It returns plain text so it's safe, the method is efficient. The code it gave was clear and understandable. I didn't have to make any changes.

Setup Instructions: Clone/download repository.
Put project folder into XAMPP htdocs directory.
Install composer dependencies.
Start Apache server in control panel.
Access using this link in browser: http://localhost/cs85module6a_mvc_project/public/index.php?day=Monday
Change the day at the end of the link to access a different day. Monday-Sunday
