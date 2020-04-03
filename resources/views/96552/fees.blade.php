@extends('layout')
@section('main')


    <!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>fee</title>
</head>
<body>
<h1>FEES TRANSACTION</h1>


<div class="bg-gray-800 py-16 mt-16 w-full flex flex-col items-center border-t-4 norder-black">
    <h2 class="font-bold text-xl text-gray-400">Fees Details</h2>

    <form class="max-w-xl w-full text-gray-200 mt-4 px-8 md:px-0" action="#" method="post">
        <div class="flex flex-col md:flex-row md:-mx-2">
            <label for="first_name" class="sr-only">First Name</label>
            <input class="bg-gray-700 mt-4 border border-gray-600 rounded-lg py-2 px-4 w-full md:mx-2" type="text" placeholder="First name" id="first_name">

            <label for="last_name" class="sr-only">Last Name</label>
            <input class="bg-gray-700 mt-4 border border-gray-600 rounded-lg py-2 px-4 w-full md:mx-2" type="text" placeholder="Last name" id="last_name">
        </div>
        <div class="flex flex-col md:flex-row  md:-mx-2">
            <label for="email" class="sr-only">Email address</label>
            <input class="bg-gray-700 mt-4 border border-gray-600 rounded-lg py-2 px-4 w-full md:mx-2" type="email" placeholder="" id="email">

            <label for="Date of Joining" class="sr-only">Date of Joining</label>
            <input class="bg-gray-700 mt-4 border border-gray-600 rounded-lg py-2 px-4 w-full md:mx-2" type="text" placeholder="Your title" id="title">
        </div>
        <label for="fees" class="sr-only">Fees</label>
        <input class="bg-gray-700 mt-4 border border-gray-600 rounded-lg py-2 px-4 w-full md:mx-2" type="number" id="fees">
        <label for="balance" class="sr-only">Balance</label>
        <input class="bg-gray-700 mt-4 border border-gray-600 rounded-lg py-2 px-4 w-full md:mx-2" type="number" placeholder="" id="balance">

        <div class="flex flex-col md:flex-row md:-mx-2">
            <button class="bg-blue-600 text-sm mt-4 rounded-lg py-2 px-4 w-full md:mx-2">Submit</button>
        </div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
