<?php
// Loop through the string.
  // What's a string?  What's a loop?
$string = "I am a short sentence but getting longer";
$space = " ";
for ($i = 0; $i <= strlen($string); $i++) {
  // What do you want me to do once I loop through the string?
    //Take each word and assign it to an index.
      //What's a word?
        //Each word is preceded and followed by a space.
          //What's a delimiter?
  if ($space[$i] === $string[$i]) {
    //If the space number is equal to the word number, assign an index to the word. If the space number is greater than the word number, index is equal to the space index - 1. If the space index is less than the word index, the indexed word is the space index + 1.
      $word = [$i];
  } elseif ($space[$i] > $string[$i]) {
      $word = [$space[$i - 1]];
  } else {
      $word = [$space[$i + 1]];
  }
  //Now that you've indexed each word, print out the array.
    //How do I do that?
print_r($word);
      // Okay, you've created the array, but you're only printing out the first entry. Please print out all of them.
}

?>
