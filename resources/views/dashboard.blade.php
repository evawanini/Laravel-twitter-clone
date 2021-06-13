@extends('layout')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <!DOCTYPE html>
    <html>

    <head>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <div class="grid grid-cols-3 lg:justify-between">
        <div>
            @include('sidebar_links')
        </div>

        <div class="flex-1 lg:mx-10 w-700px lg:justify-between">
            <div class="border rounded-lg p-8 mb-8">
                @include('quick_tweet')
            </div>

            <div>
                <div class="border border-gray-300">
                    @foreach($tweets as $tweet)
                    @include('timeline_tweet')
                    @endforeach
                </div>

            </div>
        </div>

        <div>
            @include('my_following')
        </div>
    </div>

    </html>
</x-app-layout>