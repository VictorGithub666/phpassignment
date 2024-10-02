<?php

class DaysIterator implements Iterator {

    private $days;          // Array to hold days of the week
    private $position = 0;  // Current position in the iteration

    public function __construct(array $days) {
        $this->days = $days; 
    }

    public function current() {
        return $this->days[$this->position]; // Return current day
    }

    public function key() {
        return $this->position; // Return current position
    }

    public function next() {
        ++$this->position; // Move to next position
    }

    public function rewind() {
        $this->position = 0; // Reset position to the beginning
    }

    public function valid() {
        return isset($this->days[$this->position]); // Check if current position is valid
    }

}

// Array of days of the week
$days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
$daysIterator = new DaysIterator($days);

// Iterate over the days using the iterator
foreach ($daysIterator as $key => $day) {
    echo "Day at index $key: $day" . "<br><br>" . PHP_EOL; // Output the day and its index
}
