@extends('layout')
<!DOCTYPE html>
<html>
<h1> My Profile Information </h1>
<header>
<img src="/images/banner.jpeg"/>
<div class="flex justify-between items-center">
<div>
<h3> My Profile: <strong>{{auth()->user()->name}}</strong></h3>
<strong><p> [Joined Twitter {{auth()->user()->created_at->diffForHumans() }}]</strong>
</div>
<div>
<a href="" class="btn rounded-full border border-black-200 shadow py-2 px-4 mb-5"> Edit My Profile</a>
</div>
<p>
Hi, My name is <strong>{{auth()->user()->name}}</strong>. I enjoy adventures. Let's be friends!
</p>
<img src="https://i.pravatar.cc/50" 
alt="friend_Avatar" 
class="rounded-full mr-2"
style="width: 150px; left: calc(50% -75px); top: 140px;" />
</header>
