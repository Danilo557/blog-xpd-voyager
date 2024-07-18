@extends('layouts.blog')

@push('seo')
<title> {{ $post->seo_title }}</title>
<meta content="{{$post->meta_description}}" name="description">
<meta content="{{$post->meta_keywords}}" name="keywords">
 
@endpush

@push('css')
    <link rel="stylesheet" href="{{ asset('css/post.min.css') }}">
@endpush
@section('content')
 
    <main id="main">
        <section class="post">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-1">
                    </div>
                    <div class="col-lg-8">
                        <h1>
                            {{ $post->title }}
                        </h1>
                    </div>
                    <div class="col-lg-3">

                    </div>
                </div>



                <div class="row">
                    <div class="col-lg-1">

                    </div>
                    <div class="col-lg-8">


                        <div class="img-content">
                            <figure>
                                <?php if (!empty($post->image)) { ?>
                                <picture>
                                    <source media="(min-width: 992px)"
                                        data-srcset="{{ Storage::url($post->image_url) }}" />
                                    <source media="(min-width: 768px)"
                                        data-srcset="{{ Storage::url($post->image_medium_url) }}" />
                                    <source media="(min-width: 300px)"
                                        data-srcset="{{ Storage::url($post->image_small_url) }}" />
                                    <img class="img-post lazy" data-src="{{ Storage::url($post->image_small_url) }}"
                                        height="100px" width="100px" alt="" />

                                </picture>
                                <?php } else { ?>
                                <img class="img-post lazy" data-src="{{ asset('/img/unavailable.webp') }}" height="100px"
                                    width="100px" alt="No disponible">

                                <?php } ?>

                            </figure>
                        </div>


                        <div class="">
                            <p class="d-flex flex-md-row-reverse flex-column text-right w-100">
                                <span class="ml-md-3">
                                   {{$post->user}}
                                </span>
                                <span class="font-weight-bold">
                                    {{-- Fecha --}}
                                    {{date('j F Y', strtotime($post->updated_at)); }}
                                    
                                </span>
                            </p>
                        </div>


                    </div>
                    <div class="col-lg-3">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-1">

                    </div>

                    <div class="col-lg-8">
                        <h2 class="font-weight-normal">
                            {{ $post->excerpt }}
                        </h2>
                        {!! $post->body !!}


                        <div class="lateral-iz">
                            <ul class="redes  d-flex justify-content-start justify-content-md-end mt-3">
                                <li class="d-flex justify-content-end align-items-center">
                                    <p class="texto-vertical">
                                        Comparte
                                    </p>
                                </li>
                                <li class="d-flex justify-content-end align-items-center">
                                    <a rel="noopener" aria-label="facebook"
                                        href="https://www.facebook.com/sharer/sharer.php?u={{route('posts.show',$post->slug)}}&quote="
                                        target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="d-flex justify-content-end align-items-center">
                                    <a rel="noopener" aria-label="twitter"
                                        href="https://twitter.com/intent/tweet?source={{route('posts.show',$post->slug)}}&text={{route('posts.show',$post->slug)}}"
                                        target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="d-flex justify-content-end align-items-center">
                                    <a rel="noopener" aria-label="linkedin"
                                        href="https://www.linkedin.com/sharing/share-offsite/?url={{route('posts.show',$post->slug)}}"
                                        target="_blank">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>


                    <div class="col-lg-3 d-flex justify-content-center">
                        <div class="d-flex flex-column">
                            @include('partials.posts-top')
                            {{-- Banner --}}
                        </div>




                    </div>
                </div>
            </div>
            </div>
        </section>


    </main>
@endsection

@push('js')
    <script></script>
@endpush
