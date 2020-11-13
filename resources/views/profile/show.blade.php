<x-app>
    <header class="mb-6 position-relative">
        <div class="relative">
            <img 
                src="/images/banner.jpg" 
                alt=""
                class="mb-2 h-32 w-full object-cover rounded"
            >

            <img 
            src="{{ $user->avatar }}" 
            alt="" 
            class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
            style="left: 50%"
            width="100"
            >   

        </div>

        <div class="flex justify-between items-center">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{$user->name}}</h2>
                <p class="text-sm text-gray-500">Joined {{$user->created_at->diffForHumans()}}</p>
            </div>

            <div class="flex">
                @can('edit' , $user)
                    <a 
                    href="{{ $user->path('edit') }}" 
                    class="border border-bg-cool-gray-100 rounded-full mx-1 shadow py-2 px-2 text-sm"
                    >
                    Edit Profile
                    </a>
                @endcan
                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>

        <p class="text-sm">Example description</p>
    </header>

    @include ('_timeline', [
        'tweets' => $tweets
    ])
</x-app>
