@php
    $carrousels= TCG\Voyager\Models\Post::where('status',TCG\Voyager\Models\Post::PUBLISHED)->where("in_carrousel",1)->get();
@endphp

<div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
    <div class="carousel-inner" role="listbox">
         
        @foreach ($carrousels as $carrousel)
        
        <div class="carousel-item <?php echo $loop->first ?  'active' : '' ?>   lazy" data-bg="{{Storage::url(str_replace('\\', '/', $carrousel->image))}} ">
            <div class="carousel-container">
                <div class="carousel-content">
                    <h2 class="animate__animated animate__fadeInDown mb-auto">
                        <a href="{{route('posts.show',$carrousel->slug)}}">
                           {{$carrousel->title}}
                        </a>
                    </h2>
                    <p></p>
                    <p class="animate__animated animate__fadeInUp">
                        {{$carrousel->excerpt}}
                    </p>

                </div>
            </div>
        </div>
        
        @endforeach

         
    </div>
    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>

    <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>