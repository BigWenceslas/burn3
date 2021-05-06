@extends('front.layout.header')
@push('css')
<style>
    .blog-single-article:hover .mdk-reveal__content {
        transform: translateY(-48px) !important;
    }

    .card-img {
        border-bottom-left-radius: 0px;
        border-bottom-right-radius: 0px;
    }

    .card-title {
        margin-bottom: 0.3rem;
    }

    .cat {
        display: inline-block;
        margin-bottom: 1rem;
    }

    .fa-users {
        margin-left: 1rem;
    }

    .card-footer {
        font-size: 0.8rem;
    }
</style>
@endpush
@section('contentFront')


<div class="mdk-box mdk-box--bg-gradient-primary bg-dark js-mdk-box position-relative overflow-hidden mb-0"
data-effects="parallax-background blend-background">
<div class="mdk-box__bg">
    <div class="mdk-box__bg-front"
        style="background-image: url(template/assets/images/1280_work-station-straight-on-view.jpg);"></div>
</div>
<div class="mdk-box__content">
    <div class="container page__container py-64pt py-md-112pt">
        <div class="row align-items-center text-center text-md-left">
            <div class="col-md-6 col-lg-5 order-1 order-md-0">
                <a href="{{route('home')}}" class="text-white">Accueil</a>
                <span class="text-white">&nbsp;>&nbsp;</span>
                <a href="" class="text-white">Blog</a>
            </div>
        </div>
    </div>
</div>
</div>
<div class="page-section border-bottom-2">
    <div class="container page__container">
        <div class="row align-items-end mb-16pt mb-md-32pt">
            <div class="col-md-auto mb-32pt mb-md-0">
                <div class="page-headline page-headline--title text-center text-md-left p-0">
                    <h2>Nos articles</h2>
                </div>
            </div>
        </div>


        <div class="row">
            @foreach ($articles as $article)
            <div class="col-sm-6 col-md-4 col-lg-4 blog-single-article">
                <div class="card">
                    <a href="{{route('blog_details', ['slug'=>$article->slug])}}">
                        <img class="card-img"
                            src="{{asset('storage/'.$article->image.'')}}"
                            alt="{{ $article->titre }}"
                            style="width: 100%;height:191px;object-fit:cover;">
                    </a>
                    <div class="card-img-overlay" style="z-index: 10;box-shadow: inset 0 0 0 2000px rgb(6 48 66 / 35%);width: 100%;height:191px;">
                        <a href="#" class="btn btn-light btn-sm">{{ $article->categorie->nom }}</a>
                    </div>
                    <div class="card-body" style="z-index: 13;">
                        <h4 class="card-title">
                            <a href="{{route('blog_details', ['slug'=>$article->slug])}}">{{ $article->nom }}</a>
                        </h4>
                        <small class="text-muted cat">
                            {{-- <i class="far fa-clock text-info"></i> 30 minutes --}}
                            <i class="fas fa-user text-info"></i> Par <strong>{{ $article->auteur->name }}</strong>
                        </small>
                        <p class="card-text">{{ \Illuminate\Support\Str::limit(str_replace('&nbsp;', ' ',strip_tags($article->contenu)), 150, $end='...') }}</p>
                        {{-- <a href="#" class="btn btn-info">Read Recipe</a> --}}
                    </div>
                    <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
                        <div class="views">{{ date('d M, H:i', strtotime($article->created_at)) }}
                        </div>
                        <div class="stats">
                            <i class="far fa-eye"></i> {{ $article->vues == null ? 0 : $article->vues }}
                            {{-- <i class="far fa-comment"></i> 12 --}}
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{-- <div class="pt-md-16pt text-center">
            <a href="library.html" class="btn btn-outline-secondary">Browse Courses</a>
        </div> --}}
    </div>
</div>

@endsection
@push('script')
<script>
    $('.send_contact').on('click', function (e) {
        e.preventDefault();

        $('.send_contact').prepend("<span class='spinner-grow spinner-grow-sm'></span>");

        var $form = $('.contact_form');
        var formdata = (window.FormData) ? new FormData($form[0]) : null;
        var data = (formdata !== null) ? formdata : $form.serialize();
        $.ajax({
            url: "{{ route('contact_form') }}",
            type: 'POST',
            processData: false,
            contentType: false,
            data: data,
            success: function (data) {
                // console.log(data);
                data = JSON.parse(data);
                if (data.type == "success") {
                    $('.spinner-grow').remove();
                    vt.success(data.message, {
                        title: undefined,
                        position: "top-center",
                        duration: 5000,
                        closable: true,
                        focusable: true,
                        callback: undefined
                    });
                    window.location.href = "{{ route('contact') }}";
                } else if (data.type == "error") {
                    $('.spinner-grow').remove();
                    vt.error(data.message, {
                        title: "Erreur !",
                        position: "top-center",
                        duration: 5000,
                        closable: true,
                        focusable: true,
                        callback: undefined
                    });
                } else {
                    $('.spinner-grow').remove();
                    vt.error("Une erreur est survenue, veuillez reessayer plutard !", {
                        title: "Erreur !",
                        position: "top-center",
                        duration: 5000,
                        closable: true,
                        focusable: true,
                        callback: undefined
                    });
                }
            },
            error: function (error) {
                vt.error("Une erreur est survenue, veuillez reessayer plutard !", {
                    title: "Erreur !",
                    position: "top-center",
                    duration: 5000,
                    closable: true,
                    focusable: true,
                    callback: undefined
                });
                $('.spinner-grow').remove();
                console.log(error);
            }
        });
    });
</script>
@endpush