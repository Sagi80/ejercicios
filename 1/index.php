<?php
function main() {
    
    for ($i = 1; $i <= 100; $i++) {
        
        if ($i % 3 == 0 && $i % 5 == 0){
        echo "<p>buzzfizz</p><br>";
        }
        else if ($i % 3 == 0){
        echo "<p>buzz</p><br>";
        }
        else if ($i % 5 == 0){
        echo "<p>fizz</p><br>";
        }
        else {
        echo "<p>$i</p><br>";
        }
    }
}

main();