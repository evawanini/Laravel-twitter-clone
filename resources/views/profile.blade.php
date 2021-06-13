@extends('layout')
<!DOCTYPE html>
<html>

<head>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<div class="grid grid-cols-3 lg:justify-between">
    <div>
        @include('sidebar_links')
    </div>
    <div>
        @include('profile_info')
    </div>
    <div>
        @include('my_following')
    </div>
</div>

</html>