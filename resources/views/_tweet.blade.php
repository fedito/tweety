<div class="flex p-4 {{ $loop->last ? '' : 'border-b border-b-gray-400' }}">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ route('profile', $tweet->user) }}">
        <img 
            src="{{ $tweet->user->avatar }}" 
            alt="" 
            class="rounded-full mr-2"
            width="50"
            height="50"
        >
        </a>
    </div>

    <div>
        <a href="{{route('profile', $tweet->user->name)}}">
            <h5 class="font-bold mb-4">{{$tweet->user->name}}</h5>
        </a>

        <p class="text-sm">
            {{$tweet->body}}
        </p>
    
        <div class="flex">
        
        
        <form method="POST" action="/tweets/{{$tweet->id}}/like">
        @csrf
            
                <div class="flex items-center ">
                    <button type="submit">
                        <img 
                            src="/images/like.png"
                            class="rounded-full mr-2 w-5 border border-green-500"                       
                        >
                    </button>
    
                    <span class="text-sm text-gray-500">{{ $tweet->likes ?: 0 }}</span>
                </div>
            
        </form>

        <form method="POST" action="/tweets/{{$tweet->id}}/like">
        @csrf
        @method ('DELETE')

                <div class="flex items-center px-4 ">
                    <button type="submit">
                        <img 
                            src="/images/like.png"
                            class="rounded-full mr-2 w-5 transform rotate-180 border border-red-500"                       
                        >
                    </button>
    
                    <!-- <span class="text-sm text-gray-500">{{ $tweet->dislikes ?: 0 }}</span> -->
                </div>

        </form>
        </div>
    </div>
</div>
