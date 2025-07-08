<?php
/*
  Challenge 1: Fahrenheit to Celsius
  Create a function called `fahrenheitToCelsius` that takes a Fahrenheit temperature as an argument. Return the temperature converted to Celsius.

  The formula to convert Fahrenheit to Celsius is: Celsius = (Fahrenheit - 32) * 5/9
*/
function converter($fahrenheit)
{
    $celcius = ($fahrenheit - 32) * 5 / 9;
    return $celcius;
}
echo converter(200);

echo '<br>';

/*
  Challenge 2: Print names in uppercase
  Create a function called `printNamesToUpperCase` that takes an array of names as an argument. The function should loop through the array and print each name to the screen in uppercase letters.
*/

function printNamesToUpperCse($names)
{

    foreach ($names as $name) {
        $upperCse = strtoupper($name);
        echo $upperCse;
    }
}
    $names = ['adam', 'gulcin'];
    print printNamesToUpperCse($names);

echo '<br>';

/*
  Challenge 3: Find the longest word
  1. Create a function called `findLongestWord` that takes a sentence as an argument.
  2. The function should return the longest word in the sentence.
  3. The output should look like this:
*/
function findLongestWord($sentence){
    $split = explode(' ', $sentence);
    $longestWord = '';
    foreach ($split as $word) {
        if (strlen($word) > strlen($longestWord)) {
            $longestWord = $word;
        }
    }
    return $longestWord;
}

$sentence = ("Bu cumledeki en uzunk kelime neeeeeeeeeeeeeeeeeeeeeeeeeee?");
echo findLongestWord($sentence);