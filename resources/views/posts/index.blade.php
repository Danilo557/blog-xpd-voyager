@extends('layouts.blog')

@push('seo')
<title>Blog Expide tu Factura | Facturación Electrónica y Noticias</title>
<meta content="Bienvenido al Blog XPD. Aquí encontrarás todo lo relacionado a facturación electrónica, te explicamos temas contables, fiscales y noticias del SAT." name="description">

@endpush
@push('css')
    <link rel="stylesheet" href="{{ asset('css/index.min.css') }}">
@endpush
@section('content')
    <section id="hero">
        <div class="container-fluid">
            @include('partials.carrousel')
        </div>
    </section>

    <main id="main">
        <section class="about">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-9 col-12">
                        <ul id="images" class="posts-list">
                            @foreach ($posts as $post)
                                <li>
                                    <article>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="img-post-content">
                                                    <?php if (!empty($post->image)) { ?>

                                                    <picture>
                                                        <source media="(min-width: 992px)"
                                                            data-srcset="{{ asset(Storage::url($post->image_url)) }}" />
                                                        <source media="(min-width: 768px)"
                                                            data-srcset="{{ asset(Storage::url($post->image_medium_url)) }}" />
                                                        <source media="(min-width: 576px)"
                                                            data-srcset="{{ asset(Storage::url($post->image_small_url)) }}" />

                                                        <img class="img-post lazy"
                                                            data-src="{{ asset(Storage::url($post->image_small_url)) }}"
                                                            height="100px" width="100px" alt="<?php /*Titulo*/ ?>">
                                                    </picture>
                                                    <?php } else { ?>
                                                    <img class="img-post lazy"
                                                        data-src="{{ asset('/img/unavailable.webp') }}" height="100px"
                                                        width="100px" alt="nota">
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <a href="{{ route('posts.show', $post) }}">
                                                    <h2>{{ $post->title }} </h2>
                                                </a>
                                                <p>
                                                    {{ $post->excerpt }}
                                                </p>
                                            </div>
                                        </div>
                                    </article>
                                </li>
                            @endforeach


                        </ul>

                        {!! $posts->links() !!}

                    </div>


                    <div class="col-xl-3 d-flex justify-content-center">
                        <div class="d-flex flex-column">
                            @include('partials.posts-top')
                            <?php
                            //  dynamic_sidebar('sidebar_1');
                            ?>
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
