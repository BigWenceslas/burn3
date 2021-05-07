@extends('front.layout.header')
@push('css')
    
@endpush
@section('contentFront')

<div class="mdk-box mdk-box--bg-gradient-primary bg-dark js-mdk-box position-relative overflow-hidden mb-0"
data-effects="parallax-background blend-background">
<div class="mdk-box__bg">
    <div class="mdk-box__bg-front"
        style="background-image: url({{asset('template/assets/images/1280_work-station-straight-on-view.jpg')}});"></div>
</div>
<div class="mdk-box__content">
    <div class="container page__container py-64pt py-md-112pt">
        <div class="row align-items-center text-center text-md-left">
            <div class="col-md-6 col-lg-5 order-1 order-md-0">
                <a href="{{route('home')}}" class="text-white">Accueil</a>
                <span class="text-white">&nbsp;>&nbsp;</span>
                <a href="" class="text-white">A Propos</a>
            </div>
        </div>
    </div>
</div>
</div>



@endsection
@push('script')
    <script>
        
    </script>
@endpush