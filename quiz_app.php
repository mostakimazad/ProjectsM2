<?php

$score = 0;

// Question 1
echo "\nQuestion 1: What is the capital of France?\n";
echo "a) Berlin\n";
echo "b) Paris\n";
echo "c) Madrid\n";
echo "Your answer (a/b/c): ";
$ans1 = trim(fgets(STDIN));
if ($ans1 == "b") {
    echo "✅ Correct!\n";
    $score++;
} else {
    echo "❌ Wrong! The correct answer is b.\n";
}

// Question 2
echo "\nQuestion 2: What is 5 + 3?\n";
echo "a) 8\n";
echo "b) 10\n";
echo "c) 6\n";
echo "Your answer (a/b/c): ";
$ans2 = trim(fgets(STDIN));
if ($ans2 == "a") {
    echo "✅ Correct!\n";
    $score++;
} else {
    echo "❌ Wrong! The correct answer is a.\n";
}

// Question 3
echo "\nQuestion 3: Which one is a programming language?\n";
echo "a) HTML\n";
echo "b) PHP\n";
echo "c) CSS\n";
echo "Your answer (a/b/c): ";
$ans3 = trim(fgets(STDIN));
if ($ans3 == "b") {
    echo "✅ Correct!\n";
    $score++;
} else {
    echo "❌ Wrong! The correct answer is b.\n";
}

// Final Score
echo "\n🎉 You got $score out of 3 correct!\n";

?>php