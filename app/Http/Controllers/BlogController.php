<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $blogs = [
        1 => [
            'blogtitle' => 'HTML',
            'date' => '2/20/2022',
            'subtitle' => 'Cascading Style Sheets',
            'content' => 'CSS is the language we use to style an HTML document. CSS describes how HTML elements should be displayed. This tutorial will teach you CSS from basic to advanced.',
        ],
        2 => [
            'blogtitle' => 'PHP',
            'date' => '2/21/2022',
            'subtitle' => 'Object-Oriented Programming',
            'content' => 'Procedural programming is about writing procedures or functions that perform operations on the data, while object-oriented programming is about creating objects that contain both data and functions.',
        ],
        3 => [
            'blogtitle' => 'Java',
            'date' => '2/22/2022',
            'subtitle' => 'Methods',
            'content' => 'A method is a block of code which only runs when it is called. You can pass data, known as parameters, into a method. Methods are used to perform certain actions, and they are also known as functions.',
        ],
        4 => [
            'blogtitle' => 'SQL',
            'date' => '2/23/2022',
            'subtitle' => 'Database',
            'content' => 'SQL is a standard language for storing, manipulating and retrieving data in databases. Our SQL tutorial will teach you how to use SQL in: MySQL, SQL Server, MS Access, Oracle, Sybase, Informix, Postgres, and other database systems.',
        ],
        5 => [
            'blogtitle' => 'C++',
            'date' => '2/24/2022',
            'subtitle' => 'Functions',
            'content' => 'A function is a block of code which only runs when it is called. You can pass data, known as parameters, into a function. Functions are used to perform certain actions, and they are important for reusing code: Define the code once, and use it many times.',
        ],
        6 => [
            'blogtitle' => 'C#',
            'date' => '2/25/2022',
            'subtitle' => 'Classes',
            'content' => 'You learned from the previous chapter that C# is an object-oriented programming language. Everything in C# is associated with classes and objects, along with its attributes and methods. For example: in real life, a car is an object. The car has attributes, such as weight and color, and methods, such as drive and brake.   ',
        ],
        7 => [
            'blogtitle' => 'Python',
            'date' => '2/26/2022',
            'subtitle' => 'Handling',
            'content' => 'File handling is an important part of any web application. Python has several functions for creating, reading, updating, and deleting files.',
        ]
    ];

    public function index()
    {
        return view('Blogs.index', ['showall' => $this->blogs]);
    }

    public function date($mm, $dd, $yyyy)
    {
        if ($dd == 20) {
            $id = 1;
            return view('Blogs.date', ['date' => $this->blogs[$id]]);
        } elseif ($dd == 21) {
            $id = 2;
            return view('Blogs.date', ['date' => $this->blogs[$id]]);
        } elseif ($dd == 22) {
            $id = 3;
            return view('Blogs.date', ['date' => $this->blogs[$id]]);
        } elseif ($dd == 23) {
            $id = 4;
            return view('Blogs.date', ['date' => $this->blogs[$id]]);
        } elseif ($dd == 24) {
            $id = 5;
            return view('Blogs.date', ['date' => $this->blogs[$id]]);
        } elseif ($dd == 25) {
            $id = 6;
            return view('Blogs.date', ['date' => $this->blogs[$id]]);
        } elseif ($dd == 26) {
            $id = 7;
            return view('Blogs.date', ['date' => $this->blogs[$id]]);
        } else {
            abort(404);
        }
    }

    public function show($id)
    {
        abort_if(!isset($this->blogs[$id]), 404);
        return view('Blogs.show', ['show' => $this->blogs[$id]]);
    }
}
