@extends('layout')
<!DOCTYPE html>
<html>
<div class="grid grid-cols-3 divide-x lg:justify-between">
    <div>
        @include('sidebar_links')
    </div>

    <div class="flex-1 lg:mx-10 w-700px lg:justify-between items-center">
        <div>
            <img src="/images/banner.jpeg" class="pd-33.33% flex items-stretch relative"/>
            <h1> My Profile Information </h1>
            <header>
                <h3> My Profile: <strong>{{auth()->user()->name}}</strong></h3>
                <strong>
                    <p> [Joined Twitter {{auth()->user()->created_at->diffForHumans() }}]
                </strong>
        </div>
        <div>
            <a href="" class="btn rounded-full border border-blue-300 shadow py-2 px-4 mb-5"> Edit My Profile</a>
        </div>
        <p>
            Hi, My name is <strong>{{auth()->user()->name}}</strong>. I enjoy adventures. Let's be friends!
        </p>
        <!-- <img src="https://i.pravatar.cc/50" alt="friend_Avatar" class="rounded-full flex mr-2 absolute top-30 w-50 mt-0" style="width: 150px; left: calc(50% -75px); top: 140px;" /> -->
        </header>
    </div>

    <div>
        @include('my_following')
    </div>
</div>