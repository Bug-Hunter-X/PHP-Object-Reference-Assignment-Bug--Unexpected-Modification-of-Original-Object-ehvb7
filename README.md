# PHP Object Reference Assignment Bug

This repository demonstrates a common, yet often overlooked, bug in PHP related to object references.  When assigning objects in PHP, it's crucial to understand that it creates a reference, not a copy, unless explicitly cloned.

## The Problem
The `bug.php` file shows a scenario where assigning an object creates a reference.  Modifying the referenced object inadvertently modifies the original.

## The Solution
The `bugSolution.php` file illustrates how to resolve this using `clone` to create a true copy of the object before modifications.