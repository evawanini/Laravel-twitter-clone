@extends('layout')
<form action="/dashboard/" method="post">
  @csrf
  <textarea name="body" placeholder="What's your Thought?">
  </textarea>
  <hr class="my-3">
  <footer class="flex justify-between">
    <img src="https://i.pravatar.cc/50" alt="friend_Avatar" class="rounded-full mr-2" />
    <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
      New Tweet
    </button>
  </footer>
</form>