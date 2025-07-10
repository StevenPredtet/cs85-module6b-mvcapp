Fitness tracker

Why I chose this topic: I chose to create a fitness tracker because fitness and health are important to me personally.
Tracking workouts helps me stay organized and motivated throughout the week.
I wanted to build an app that models a simple weekly workout schedule while practicing PHP and MVC


Description: This app allows users to view details about their workouts by day of the week. 
For each day, it displays the workout type (like push, pull, legs), the duration in minutes and hours, and any notes the user might want to remember. 
It also clearly marks rest days. The user can specify which day to view through the URL, and the app shows the appropriate workout details.


The hardest part and why: The hardest part was structuring the application following the MVC pattern and getting autoloading set up correctly with Composer and namespaces. 
Initially, I struggled with organizing files and folders properly and making sure classes loaded.
Ensuring the controller correctly validated input and passed data to the view took some extra effort.


What I learned about MVC: 
This project helped me understand how MVC separates concerns: the Model handles data and logic, the Controller manages input and processing, and the View deals with presentation. 
This separation improves code maintainability and scalability. I also learned how PSR-4 autoloading through Composer makes managing namespaces and loading classes easier and cleaner.


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
