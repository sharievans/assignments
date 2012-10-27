Unit Testing

Wiki definition
```php
Wiki: A method by which individual units of source code, 
sets of one or more computer program modules together 
with associated control data, usage procedures, and 
operating procedures, are tested to determine if they are fit for use.
```


http://msdn.microsoft.com/en-us/library/aa292197(v=vs.71).aspx
```php
The primary goal of unit testing is to take the smallest piece of 
testable software in the application, isolate it from the remainder of the code, 
and determine whether it behaves exactly as you expect. Each unit is tested separately 
before integrating them into modules to test the interfaces between modules. Unit testing 
has proven its value in that a large percentage of defects are identified during its use.
```

Pros Wiki
```php
The goal of unit testing is to isolate each part of the program 
and show that the individual parts are correct. A unit test provides a strict, 
written contract that the piece of code must satisfy. Find problems early, Facilitates change,
Simplifies integration, Documentation, Design
```

Pros http://www.alexbolboaca.ro/wordpress/articles/unit-testing-automatic-testing-tdd-pros-and-cons
```php
The baseline value you can get from an application is people using it.
Code doesn’t just work. No matter how smart your programmers are, they will miss something.
If the application crashes, people won’t be using it.
If the application doesn’t do what it’s supposed to, people won’t be using it.
```

Cons Wiki
```php
It is impossible to evaluate every execution path in all but the most trivial programs.
It only tests the functionality of the units themselves. 
Therefore, it will not catch integration errors or broader system-level errors 
(such as functions performed across multiple units, or non-functional test areas such as performance).

```

Cons http://stackoverflow.com/questions/64333/disadvantages-of-test-driven-development
```php
-Big time investment. For the simple case you lose about 20% of the actual implementation, 
  but for complicated cases you lose much more.
  
-Additional Complexity. For complex cases your test cases are harder to calculate, 

-I'd suggest in cases like that to try and use automatic reference code that will 
run in parallel in the debug version / test run, instead of the unit test of simplest cases.

-Design Impacts. Sometimes the design is not clear at the start and evolves as you go 
along - this will force you to redo your test which will generate a big time lose. 

I would suggest postponing unit tests in this case until you have some grasp of the 
design in mind.

-Continuous Tweaking. For data structures and black box algorithms unit tests would 
be perfect, but for algorithms that tend to be changed, tweaked or fine tuned, 
this can cause a big time investment that one might claim is not justified. 
So use it when you think it actually fits the system and don't force the design to fit to TDD.
```


Cons http://agilesoftwaredevelopment.com/node/597
```php
Basically says Unit Testing is a waste of time and that time is better invested in RSSChannels?
```


Integration Testing
```php
Wiki: Individual software modules are combined and tested as a group.
The purpose of integration testing is to verify functional, performance, 
and reliability requirements placed on major design items.

Types of Integration Testing: Big Bang, Top-Down and Bottom Up

Big Bang: Developed Modules are coupled to form a complete a software system than tested
Called Usage Model testing

Top-Down: The top integrated modules are tested and the branch of the module is tested step by step.
It's easier to find a missing branch in Top-Down Testing.

Bottom-Up: The lowest level components are tested first, then used to facilitate 
the testing of higher level components. The process is repeated until the component 
at the top of the hierarchy is tested. Easier to find bugs in Bottom-Up.

Sandwich Testing: is an approach to combine top down testing with bottom up testing.
```

Pros http://blog.infostretch.com/integration-testingtest-the-right-areas-and-discover-bugs-earlier
```php
-More stable than GUI tests
-Useful in writing precise component level tests.
-Drives better code design
-Tester understands the internal workings of application allowing better writing of test cases
-Easy to integrate in a continuous integration environment
-Test the core of your application agnostic of UI.
If your application has a large business logic area and a 
light UI layer,this is the right layer to do your automation.
```

Pros http://www.techrepublic.com/article/integration-testing-will-show-you-how-well-your-modules-get-along/1061716
```php
We do integration testing because a set of modules that work fine individually rarely work together correctly the first time. 
There are a variety of reasons:

-Differences in the understanding of business requirements between multiple developers cause them to assume 
different things should happen for the same test cases.

-Fields are defined differently. For instance, one module assumes a field can hold 10 characters, 
while another module is programmed to hold 11.

-There are different assumptions in field content. For example, one program expects a phone 
number to be 10 digits. Another expects the phone number to include the dashes.

-The modules still have errors that were not uncovered in unit testing. Integration 
testing may add new test cases, some of which may have been difficult to generate 
during unit testing, that result in additional errors being uncovered.

```

Cons http://www.scribd.com/doc/14505504/20/Pros-and-Cons-of-top-down-integration-testing
```php
Writing stubs can be difficult: Stubs mustallow all possible conditions to be tested.
Possibly a very large number of stubs maybe required, especially if the lowest level
of the system contains many methods.

Try to minimize the number of stubs and drivers

```

Testing Frameworks in PHP: Wiki
```php

-PHPUnit: Produces XML, HTML reports with code coverage

-PHP Unit Testing Framework: It produces ASCII, XML or XHTML Output and runs from the command line.

-SimpleTest: Unit test framework for both PHP and web.

-lime: Sub-project of symfony

-Apache-Test: PHP implementation of Test::More (test-more.php) Info

-ojes: Documentation Driven Testing

-SnapTest: SnapTest is a powerful unit testing framework for PHP 5+, 
leveraging PHP's unique runtime language to simplify the unit test 
process without sacrificing the agility tests provide.

-OnionTest: Write an Onion! No coding needed just some txt files.

-Enhance PHP: Unit testing framework with mocks and stubs built in. 
Runs in the command line or get HTML5, TAP or XML output via a web browser.

-Atoum: A simple, modern and intuitive unit testing framework for PHP

-Tester: PHP library for unit-testing (in console and browser), simplified variant of PHPUnit. 
With ability to handle errors and exceptions in tests.

-PhpInlineTest: PhpInlineTest - script to run inline tests for PHP functions and class methods.

Framework for Integrated Test, or "Fit": is an open-source tool for automated customer tests. 
It integrates the work of customers, analysts, testers, and developers.

```

Extra credit:

research difference between
|| :  'or'
&& : 'and'
(check the PHP manuel)
```php
"&&" has a greater precedence than "and"

    The statement:
    $g = true && false;

    Is read as follows:
    ($g = (true && false))

    The staement:
    $h = true and false;

    Is read:
    (($h = true) and false)


"||" has a greater precedence than "or"
    $e = false || true; 

    is read by the computer as

    ($e = (false || true))

    $f = false or true;
    
    is read by the computer as
    
    (($f = false) or true)

```

research Superglobal Arrays - what are they?
```php
Superglobals are built-in variables that are always available in all scopes.
Several predefined variables in PHP are "superglobals", 
which means they are available in all scopes throughout a script. 
There is no need to do global $variable; to access them within functions or methods.
```
























