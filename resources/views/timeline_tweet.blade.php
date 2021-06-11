<div class="border-b border-blue">
    <div class="flex p-4">
        <img src="https://i.pravatar.cc/50?u={{ $tweet->user->email}}" 
        alt="friend_Avatar" class="rounded-full mr-2" />
    </div>
    <div>
        <h5> {{$tweet->user->name}} </h5>
        <p> {{$tweet->body}} </p>
    </div>
</div>