@php
    $posts_top = TCG\Voyager\Models\Post::where("status",TCG\Voyager\Models\Post::PUBLISHED)->take(5)->get();
    $count=1;
@endphp

<div class="more">
    <div class="title">
        Últimas entradas
    </div>
    <ul id="lista-popular" class="menu mt-5">
        @foreach ($posts_top as $top)
            <li class="d-flex justify-content-start align-items-center">
                <a class="d-flex justify-content-start" href="{{route('posts.show',$top->slug)}}">
                    <div class="numeral"><?php echo $count; ?></div>
                    <p class="cortar my-auto">
                        {{$top->title}}
                    </p>
                </a>
            </li>

            
            @php
                $count++;
            @endphp
        @endforeach
         
    </ul>
</div>
