<?php

class Movie {

    public $title;
    public $date;

    /**
     * __construct
     *
     * @param  mixed $_title
     * @param  mixed $_date
     * @return void
     */
    function __construct($_title, $_date) {
    
        $this->title = $_title;
        $this->date = $_date;
    
    }
    
    public function getFullMovie() {
    
        return $this->title . ',' . $this->date . '.';
    
    }

}

?>