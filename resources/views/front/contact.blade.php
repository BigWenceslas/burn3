@extends('front.layout.header')
@push('css')
    
@endpush
@section('contentFront')


<div class="bg-gradient-primary py-32pt">
    <div class="container d-flex flex-column flex-md-row align-items-center text-center text-md-left">
        <img src="{{asset('template/assets/images/illustration/student/128/white.svg')}}" class="mr-md-32pt mb-32pt mb-md-0" alt="student">
        <div class="flex mb-32pt mb-md-0">
            <h1 class="text-white mb-0">Contactez-nous</h1>
            <p class="lead measure-lead text-white-50">Vous avez un problème, nous sommes là !</p>
        </div>
        {{-- <a href="{{ route('register') }}" class="btn btn-outline-white flex-column">
            Vous n'avez pas de compte ?
            <span class="btn__secondary-text">Inscrivez-vous aujourd'hui !</span>
        </a> --}}
    </div>
</div>
<div class="bg-white pt-32pt pt-sm-64pt pb-32pt">
    <div class="container page__container">
        <form action="/" autocomplete="off">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nom">Nom:</label>
                        <input id="nom" type="text" class="form-control" placeholder="Votre nom ...">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input id="email" type="text" class="form-control" placeholder="Votre email ...">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="message">Message:</label><br>
                        <textarea name="message" id="message" style="width: 100%;" cols="30" rows="10">

                        </textarea>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-lg btn-accent">Envoyer &nbsp;&nbsp;<span class="fa fa-paper-plane"></span></button>
            </div>
        </form>
        {{-- <div class="col-md-5">
            <img src="https://i1.wp.com/kumullus.com/wp-content/uploads/2020/09/video-conference-5230779_1920.png?resize=1080%2C675&ssl=1" alt="">
        </div> --}}
    </div>
</div>

@endsection
@push('script')
    
@endpush