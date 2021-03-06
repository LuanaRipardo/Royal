@extends('layouts.main.main')
@inject('recents', 'App\Models\Blog\Post')
@inject('items', 'App\Models\Blog\Post')

@push('content')
    <section class="intro-banner intro-bg"
             style="background-image: url({{ asset('principal/img/upload/intro/blog.jpg') }}); height: 300px margin-top: 80px;">
        <div class="intro-banner__inner" style="max-height: 400px">
            <h1 class="title" style="color: #fff;text-transform: capitalize">Nossos serviços</h1>
        </div>
    </section>
    <div class="breadcrumbs-wrapper" style="margin-bottom: 10px;"  id="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{{ route('home-site') }}">Royal Spa</a></li>
                <li><a href="javascript:;">Serviços</a></li>
            </ol>
        </div>
    </div>
    <main class="page-content slideout-panel" id="content">
        <div class="services-panels st-row">
            @foreach ($items->where('category_id', array_search('TREATMENT', \App\Models\Blog\Post::TYPE))->get() as $service)
                <div class="services-slides">
                    <section class="services-slide st-row intro-bg" style="background-image: url({{ asset($service->thumb_path) }});">
                        <div class="services-slide__inner">
                            <h4 class="services-slide__title">{{ $post->title }}</h4><a class="services-slide__helper" href="#">
                                <div class="services-slide__helper-desc container">
                                    <h3>{{ $post->title }}</h3>
                                    <p>{!! strip_tags($post->content) !!}</p>
                                </div></a>
                        </div>
                    </section>
                </div>
            @endforeach

                <div class="col-md-12">

                    {{ $posts->links() }}

                </div>
        </div>
    </main>

@endpush




