@extends('front.layout.header')
@push('css')
<meta name="description" content="<%= page_data.meta_desc %>" />
<meta name="keywords" content="<%= page_data.meta_keyword %>">
<meta property="og:locale" content="fr_FR" />
<meta property="og:type" content="website" />
<meta property="og:title" content="<%= page_data.meta_titre %>" />
<meta property="og:description" content="<%= page_data.meta_desc %>" />
<meta property="og:url" content="https://mapane.app" />
<meta property="og:site_name" content="Mapane" />
<meta property="og:image" content="https://mapane.app/images/locafav.png" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="<%= page_data.meta_titre %>" />
<meta name="twitter:description" content="<%= page_data.meta_desc %>" />
<meta name="twitter:image" content="https://mapane.app/images/locafav.png" />
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

    .blog-page a {
        color: #26A3FF;
        -webkit-text-decoration-skip: ink;
        text-decoration-skip: ink;
    }

    .blog-page .center-xy {
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        position: absolute;
    }

    .blog-page .no-scroll {
        overflow: hidden;
    }

    .blog-page .img-responsive {
        width: 100%;
        display: block;
    }

    .blog-page .rounded-circle {
        border-radius: 100%;
    }

    .blog-page .rounded-sm {
        border-radius: 6px;
    }

    .blog-page .rounded-md {
        border-radius: 8px;
    }

    .blog-page .rounded-lg {
        border-radius: 12px;
    }

    .blog-page .spacer-y {
        margin-top: 30px;
        margin-bottom: 30px;
    }

    .blog-page .skew {
        transform: skew(23deg);
    }

    .blog-page .skew .unskew {
        transform: skew(-23deg);
    }

    .blog-page .main-container {
        margin-top: 50px;
    }

    .blog-page .post {
        margin: 0 auto;
        padding: 30px 0;
        border-bottom: 1px solid #ececec;
    }

    .blog-page .post:last-of-type {
        padding-bottom: 0;
        border-bottom: none;
    }

    .blog-page .post .post-meta--user {
        margin-bottom: 10px;
        display: flex;
        align-items: center;
    }

    .blog-page .post .post-meta--user img,
    .post .post-meta--user p {
        vertical-align: middle;
        display: inline;
        float: left;
    }

    .blog-page .post .post-meta--user img {
        width: 40px;
    }

    .blog-page .post .post-meta--user p {
        color: #91A8BD;
        line-height: 1.3;
        margin: 0 0 0 10px;
    }

    .blog-page .post .post-meta--user a {
        display: inline-block;
    }

    .blog-page .post .post-meta--post {
        color: #fff;
        width: 100%;
        position: absolute;
        bottom: 0;
    }

    .blog-page .post .post-meta--post .post-meta--item {
        padding: 12px 15px;
    }

    .blog-page .post .post-meta--post svg {
        display: inline-block;
        vertical-align: middle;
    }

    .blog-page .post .post-meta--post .post-comments {
        float: left;
    }

    .blog-page .post .post-meta--post .post-comments .post-comments--counter {
        font-size: 12px;
        font-family: monospace;
    }

    .blog-page .post .post-meta--post .post-share {
        float: right;
    }

    .blog-page .post .post-heading {
        font-size: 24px;
        line-height: 1.2;
        margin: 15px 0;
    }

    .blog-page .post .post-heading a {
        color: inherit;
        text-decoration: none;
    }

    .blog-page .post .post-body {
        font-size: 16px;
        margin: 0;
    }

    .blog-page .sidebar-container {
        margin: 30px 0;
    }

    .blog-page .sidebar-container a {
        color: inherit;
        text-decoration: none;
    }

    .blog-page .sidebar-container .sidebar-heading-container {
        text-align: center;
        display: 0 block;
    }

    .blog-page .sidebar-container .sidebar-heading {
        font-size: 24px;
        text-align: center;
        margin: 0;
        position: relative;
        display: inline-block;
    }

    .blog-page .sidebar-container .sidebar-heading:before {
        content: "";
        background: #FFE822;
        width: 104%;
        height: 11px;
        margin-left: -2%;
        bottom: 5px;
        position: absolute;
        z-index: -1;
        opacity: 0.4;
    }

    .blog-page .sidebar-container .post-sidebar {
        display: flex;
        align-items: end;
        margin: 30px 0;
    }

    .blog-page .sidebar-container .post-sidebar img {
        margin-right: 10px;
    }

    .blog-page .sidebar-container .post-sidebar p {
        margin: 0;
    }

    .blog-page .sidebar-container .post-sidebar .post-heading {
        font-weight: 800;
    }

    .blog-page .sidebar-container .post-sidebar .post-date {
        color: #91A8BD;
    }

    .blog-page .post-related-container {
        padding: 30px 0;
    }

    .blog-page .post-related-container .post-related:not(:last-of-type) {
        margin-bottom: 30px;
    }

    .blog-page .post-related-container .post-heading {
        font-size: 18px;
        margin: 10px 0 0;
    }

    .blog-page .img-container {
        position: relative;
        overflow: hidden;
    }

    .blog-page .img-container .img-container-content {
        background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.2));
        width: 100%;
        height: 100%;
        top: 0;
        right: 0;
        position: absolute;
    }

    .blog-page .img-container .btn-category {
        background: #FFE822;
        font-size: 14px;
        font-weight: 600;
        margin-right: -10px;
        padding-right: 3px;
        right: 0;
        position: absolute;
    }

    .blog-page .btn {
        text-decoration: none;
        text-align: center;
        display: inline-block;
    }

    .blog-page .btn span {
        padding: 8px 20px;
        display: block;
    }

    .blog-page .footer {
        padding: 15px 0;
        border-top: 1px solid #efefef;
    }

    .blog-page .footer p {
        margin: 0;
    }

    .blog-page .footer p:first-of-type {
        font-size: 18px;
        font-weight: 600;
    }

    .blog-page .footer p:last-of-type {
        color: #91A8BD;
    }

    .blog-page .cb-logo--elem {
        fill: #242A31;
    }

    .blog-page .svg-icon {
        width: 1.5em;
        height: 1.5em;
    }

    .blog-page .svg-icon path,
    .blog-page .svg-icon polygon,
    .blog-page .svg-icon rect {
        fill: currentColor;
    }

    .blog-page .svg-icon circle {
        stroke: currentColor;
        stroke-width: 1;
    }

    .blog-page .nav {
        width: 100%;
        height: 100%;
        z-index: 13000;
    }

    .blog-page .nav-bar {
        color: #000;
        background: #fff;
        text-align: right;
        line-height: 1;
        vertical-align: middle;
        width: 100%;
        height: 50px;
        padding: 0 5px;
        border-bottom: 1px solid #e9e9e9;
        top: 0;
        position: fixed;
        display: table;
        z-index: 12000;
    }

    .blog-page .nav-brand {
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        position: absolute;
        width: 100px;
        height: 22px;
        margin: auto;
        display: block;
    }

    .blog-page .nav-toggle {
        font-size: 20px;
        vertical-align: middle;
        margin-top: 5px;
        display: table-cell;
        cursor: pointer;
        float: right;
    }

    .blog-page .navicon {
        padding: 9px 10px;
        cursor: pointer;
        position: relative;
    }

    .blog-page .navicon .navicon-line {
        background: #242A31;
        width: 22px;
        height: 2px;
        margin: 4px 0;
        border-radius: 1px;
        display: block;
        transition: all 0.2s ease;
    }

    .blog-page .nav-list {
        background: #f9f9f9;
        width: 100%;
        margin-top: 50px;
        top: 0;
        position: fixed;
        overflow-y: scroll;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: none;
        z-index: 11000;
    }

    .blog-page .nav-list ul {
        margin: 0;
        padding: 0;
        list-style-type: none;
    }

    .blog-page .nav-list li {
        display: block;
        vertical-align: middle;
    }

    .blog-page .nav-list li:first-of-type,
    .nav-list li:last-of-type {
        margin-top: 10px;
    }

    .blog-page .nav-list li:hover {
        background: #f1f1f1;
    }

    .blog-page .nav-list a {
        color: inherit;
        font-size: 14px;
        font-weight: 600;
        text-decoration: none;
        text-align: center;
        padding: 12px 20px;
        display: block;
    }

    .blog-page .nav-backdrop {
        background: rgba(0, 0, 0, 0.7);
        width: 200%;
        height: 200%;
        position: fixed;
        z-index: 10000;
    }

    .blog-page .nav-search--form {
        font-size: 0;
        border-top: 1px solid #e9e9e9;
        background: #efefef;
    }

    .blog-page .nav-search--search {
        font-size: 16px;
        background: transparent;
        vertical-align: middle;
        width: 100%;
        margin: 0;
        padding: 14px 46px 14px 14px;
        border: none;
        -webkit-appearance: none;
        display: inline-block;
    }

    .blog-page .nav-search--btn {
        color: #fff;
        background: #FF268E url(http://www.clker.com/cliparts/v/C/2/9/I/6/search-icon-white-hi.png);
        background-size: 14px;
        background-repeat: no-repeat;
        background-position: center center;
        font-size: 14px;
        vertical-align: middle;
        width: 30px;
        height: 30px;
        right: 0;
        margin: 8px;
        position: absolute;
        border: none;
        border-radius: 100%;
        -webkit-appearance: none;
        display: inline-block;
    }

    @media screen and (max-width: 576px) {
        .blog-page .nav .container {
            padding: 0;
        }
    }

    @media screen and (min-width: 576px) {
        .blog-page .nav-toggle {
            display: none;
        }

        .blog-page .nav-brand {
            right: auto;
            margin-left: 15px;
        }

        .blog-page .nav-list {
            background-color: transparent;
            width: auto;
            margin-top: 0;
            right: 0;
            z-index: 12000;
        }

        .blog-page .nav-list li {
            display: inline-block;
        }

        .blog-page .nav-list li:first-of-type,
        .nav-list li:last-of-type {
            margin-top: 0;
        }

        .blog-page .nav-list a {
            padding: 15px 10px;
        }

        .blog-page .nav-backdrop {
            display: none;
        }

        .blog-page .nav-search--form {
            display: none;
        }

        .blog-page .footer {
            padding: 30px 0;
        }
    }

    @media screen and (min-width: 768px) {
        .blog-page .post-related-container .post-related {
            margin-bottom: 0;
        }
    }
</style>
@endpush
@section('contentFront')

<div class="mdk-box mdk-box--bg-gradient-primary bg-dark js-mdk-box position-relative overflow-hidden mb-0"
    data-effects="parallax-background blend-background">
    <div class="mdk-box__bg">
        <div class="mdk-box__bg-front"
            style="background-image: url({{asset('template/assets/images/1280_work-station-straight-on-view.jpg')}});">
        </div>
    </div>
    <div class="mdk-box__content">
        <div class="container page__container py-64pt py-md-112pt">
            <div class="row align-items-center text-center text-md-left">
                <div class="col-md-6 col-lg-5 order-1 order-md-0">
                    <a href="{{route('home')}}" class="text-white">Accueil</a>
                    <span class="text-white">&nbsp;>&nbsp;</span>
                    <a href="{{route('blog')}}" class="text-white">Blog</a>
                    <span class="text-white">&nbsp;>&nbsp;</span>
                    <a href="" class="text-white">{{ $article->nom }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-section border-bottom-2 blog-page">
    <div class="container page__container">
        <div class="main-container container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="post-container">

                        <article class="post">
                            <!--  meta  -->
                            <div class="post-byline post-meta--user">
                                <a href="#">
                                    <img src="https://via.placeholder.com/64/f44336/ffffff/?text=Avatar"
                                        class="post-avatar rounded-circle">
                                </a>
                                <p>Publié le {{ date('d M Y, H:i', strtotime($article->created_at)) }} par <a href="#">{{ $article->auteur->name }}</a></p>
                            </div>

                            <!--  img  -->
                            <div class="img-container rounded-sm">
                                <img src="{{asset('storage/'.$article->image.'')}}"
                                    class="img-responsive" style="width: 567px;height:319px;object-fit:cover;">
                                <div class="img-container-content">
                                    <div class="btn btn-category skew">
                                        <span class="unskew liencat" onclick="goToCat('{{ $article->categorie->slug }}')">{{ $article->categorie->nom }}</span>
                                    </div>
                                    <div class="post-meta--post">
                                        <div class="post-comments post-meta--item">
                                            <svg class="svg-icon" viewBox="0 0 20 20">
                                                <path
                                                    d="M14.999,8.543c0,0.229-0.188,0.417-0.416,0.417H5.417C5.187,8.959,5,8.772,5,8.543s0.188-0.417,0.417-0.417h9.167C14.812,8.126,14.999,8.314,14.999,8.543 M12.037,10.213H5.417C5.187,10.213,5,10.4,5,10.63c0,0.229,0.188,0.416,0.417,0.416h6.621c0.229,0,0.416-0.188,0.416-0.416C12.453,10.4,12.266,10.213,12.037,10.213 M14.583,6.046H5.417C5.187,6.046,5,6.233,5,6.463c0,0.229,0.188,0.417,0.417,0.417h9.167c0.229,0,0.416-0.188,0.416-0.417C14.999,6.233,14.812,6.046,14.583,6.046 M17.916,3.542v10c0,0.229-0.188,0.417-0.417,0.417H9.373l-2.829,2.796c-0.117,0.116-0.71,0.297-0.71-0.296v-2.5H2.5c-0.229,0-0.417-0.188-0.417-0.417v-10c0-0.229,0.188-0.417,0.417-0.417h15C17.729,3.126,17.916,3.313,17.916,3.542 M17.083,3.959H2.917v9.167H6.25c0.229,0,0.417,0.187,0.417,0.416v1.919l2.242-2.215c0.079-0.077,0.184-0.12,0.294-0.12h7.881V3.959z">
                                                </path>
                                            </svg>
                                            <span class="post-comments--counter">{{ count($article->comments) }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <header>
                                <h1 class="post-heading"><a href="#">{{ $article->nom }}</a></h1>
                            </header>
                            <footer>
                                <div class="post-tag-container">
                                </div>
                            </footer>
                            <p class="post-body">
                                {!! $article->nom !!}
                            </p>
                        </article>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <aside class="sidebar-container">
                        <div class="sidebar-heading-container">
                            <h1 class="sidebar-heading">Articles récents</h1>
                        </div>
                        @foreach ($articles as $article_only)
                            <div class="post-sidebar">
                                <img src="{{asset('storage/'.$article_only->image.'')}}" class="rounded-sm" style="width: 60px;height:60px;object-fit:cover;">
                                <header class="">
                                    <p class="post-heading">{{ $article_only->nom }}</p>
                                    <p class="post-date">{{ date('d M Y, H:i', strtotime($article_only->created_at)) }}</p>
                                </header>
                            </div>
                        @endforeach
                    </aside>
                </div>
                <div class="col-12 col-md-8" style="margin-top: 2rem;">
                    <aside class="sidebar-container">
                        <div class="sidebar-heading-container" style="text-align: left;">
                            <h1 class="sidebar-heading" style="padding: 0px;">Commentaires</h1>
                        </div>
                        <section class="list_comments">
                            @if (count($article->comments) > 0)
                                @foreach ($article->comments->reverse() as $comment)
                                    <div class="post-sidebar">
                                        <img src="{{asset('favpng_user-profile.png')}}" class="rounded-sm" style="width: 60px;height:60px;object-fit:cover;">
                                        <header class="">
                                            <p class="post-heading">{{ $comment->name }}</p>
                                            <p class="post-date">{{ $comment->comment }} <br> {{ date('d M Y, H:i', strtotime($comment->created_at)) }}</p>
                                        </header>
                                    </div>
                                    <hr>
                                @endforeach
                            @else
                                <div class="alert alert-success" role="alert">
                                    <h4 class="alert-heading">Well done!</h4>
                                    <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                    <hr>
                                    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                                </div>
                            @endif
                        </section>
                        <form class="comment_form" style="margin-top: 8rem;">
                            @csrf
                            <input type="hidden" name="id" value="{{ $article->id }}">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nom">Nom:</label>
                                        <input id="nom" name="nom" type="text" class="form-control" placeholder="Votre nom ...">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input id="email" name="email" type="text" class="form-control" placeholder="Votre email ...">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="message">Commentaire:</label><br>
                                        <textarea name="comment" id="comment" style="width: 100%;" cols="30" rows="10">
                
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center" style="justify-content: center;display: flex;">
                                <button class="btn btn-lg btn-accent send_comment" style="display: flex;justify-content:center;">Envoyer</button>
                            </div>
                        </form>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@push('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
<script src="https://stevenlevithan.com/assets/misc/date.format.js"></script>
<script>
    $('.send_comment').on('click', function (e) {
        e.preventDefault();

        $('.send_comment').html("En cours");

        var $form = $('.comment_form');
        var formdata = (window.FormData) ? new FormData($form[0]) : null;
        var data = (formdata !== null) ? formdata : $form.serialize();
        $.ajax({
            url: "{{ route('comment_blog') }}",
            type: 'POST',
            processData: false,
            contentType: false,
            data: data,
            success: function (data) {
                // console.log(data);
                data = JSON.parse(data);
                if (data.type == "success") {
                    const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
                    $('.send_comment').html("Envoyer");
                    $('.list_comments').prepend(`
                        <div class="post-sidebar">
                            <img src="/favpng_user-profile.png" class="rounded-sm" style="width: 60px;height:60px;object-fit:cover;">
                            <header class="">
                                <p class="post-heading">${ data.comment.name }</p>
                                <p class="post-date">${ data.comment.comment } <br> ${ dateFormat(new Date(data.comment.created_at), "d mmm yyyy, H:MM") }</p>
                            </header>
                        </div>
                        <hr>
                    `)
                    $('#comment').val("");
                    vt.success("Article commenté avec succès !", {
                        title: "Succès !",
                        position: "top-center",
                        duration: 5000,
                        closable: true,
                        focusable: true,
                        callback: undefined
                    });
                } else if (data.type == "error") {
                    $('.send_comment').html("Envoyer");
                    vt.error(data.message, {
                        title: "Erreur !",
                        position: "top-center",
                        duration: 5000,
                        closable: true,
                        focusable: true,
                        callback: undefined
                    });
                } else {
                    $('.send_comment').html("Envoyer");
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
                $('.send_comment').html("Envoyer");
            }
        });
    });

    function goToCat(params) {
        window.location.href = "/blog-category/"+params;
    }
</script>
@endpush