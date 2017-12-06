# What you need to know

## Basic of PHP Programming

    1. POST and GET methods
    2. Arrays
    3. Sessions
    4. HTML
    5. Basic knowledge of object-oriented programming (OOP) in PHP

## Setting Up a Web Server Stack

    1. Web Server (Apache, PHP's internal server, etc.)
    2. Database (MySQL)
    3. IDE (Sublime, Phpstorm, etc.)

# What is CodeIgniter?

    `A framework`

## What is a Framework?

    `An enhanced toolset that may be integrated into any programming language.`

## Why use CodeIgniter?
    1. Write less code
    2. Use previously tested solutions
    3. Avoiding reinventing the wheel
    4. Implement MVC
    5. Create maintainable applications

    * CodeIgniter:

    $data['name'] = 'Oscar';
    $data['last'] = 'Maxwell';
    $data['age'] = 37;
    $this->db->insert('people', $data);

    * Plain PHP:

    $sql = "INSERT INTO people(NULL,'Oscar','Maxwell',37);
    mysql_query($sql);

## Application Enhancements

    Tools:
    * Database actions
    * Forms
    * Routes

    Helpers:
    * Sessions
    * Headers
    * Form validations

## Other Frameworks

    Laravel:
    * Uses Composer
    * Powerful
    * Testable
    * Dependency injection

    Symfony:
    * Powerful
    * Robust

    Zend:
    * Great toolset
    * Created by Zend (A PHP Company)

# MVC

## Model

    * Database
    * API
    * Business logic

## View

    * HTML
    * XML
    * JSON
    * Generated (e.g., PDF)


## Controller

    `Model <-> Controller View <->`

    Entry Point:
    index.php/{controller}/{method}/[param 1]/[param 2]/ ...
