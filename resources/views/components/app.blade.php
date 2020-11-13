<x-master>

<section class="px-8">
<main class="container mx-auto">
    <div class="flex justify-between">
        <div class="w-32 ml-6">
            @include ('_sidebar-links')
        </div>
        
        <div class="flex-1 mx-10" style="max-width: 700px">
        
        {{$slot}}
        
        </div>

        <div >
            @include ('_friends-list')
        </div>
    </div>
    
    
    
</main>
</section>
</x-master>