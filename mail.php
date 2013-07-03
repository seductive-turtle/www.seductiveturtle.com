<?php
print_r( $_POST );
mail( "aequasi@gmail.com", "Request from Seductive Turtle", print_r( $_POST, true ) );
