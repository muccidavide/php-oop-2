<?php 
    class User{
        protected $user_name;
        protected $email;
        public $has_discount = false;
        public $is_card_active = false;
    
        function __construct(String $user_name, String $email, Bool $is_card_active, Bool $has_discount ) {
            $this->name = $user_name;
            $this->email = $email;
            $this->is_card_active = $is_card_active;
            $this->has_discount = $has_discount;
        }
    
    }

    $user_gino = new User("Gino","gino@email.com", true, true);
    $user_paolo = new User("Paolo","gino@email.com", false, false);


    





?>