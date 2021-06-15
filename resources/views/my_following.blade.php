@extends('layout')
<h3 class="uppercase font-bold mr-4"> My Followers </h3>
<ul>
@foreach(auth()->user()->follow as $user)
<li>
<div class="flex items-center text-sm w-1/4">
<img src="https://i.pravatar.cc/50?u={{$user->email}}"
alt="friend_Avatar"
class="rounded-full mr-2"/> {{$user->name}}
</div>
</li>
@endforeach
</ul>