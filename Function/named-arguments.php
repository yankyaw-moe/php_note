<?php

// old way
function profile1($name, $age, $email){
    echo "profile1 > $name ($age) @ $email";
}

profile1("yankyaw", 26, "yan@gmail.com"); // yankyaw (26) @ yan@gmail.com

// php8

function profile2($name, $age, $email){
    echo "profile2 > $name ($age) @ $email";
}

profile2(age: 26,name:"yankyaw",email:"yan@gmail.com"); // yankyaw (26) @ yan@gmail.com

profile2(
    age: 26,
    name:"yankyaw", 
    email:"yan@gmail.com",
); // yankyaw (26) @ yan@gmail.com