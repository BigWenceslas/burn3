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
                <a href="{{route('contact')}}" class="text-white">Contact</a>
            </div>
        </div>
    </div>
</div>
</div>

<div class="bg-white pt-32pt pt-sm-64pt pb-32pt">
    <div class="container page__container">
        <form action="/" autocomplete="off" class="contact_form">
            @csrf
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
                        <label for="message">Message:</label><br>
                        <textarea name="message" id="message" style="width: 100%;" cols="30" rows="10">

                        </textarea>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-lg btn-accent send_contact">Envoyer &nbsp;&nbsp;<span class="fa fa-paper-plane"></span></button>
            </div>
        </form>
        {{-- <div class="col-md-5">
            <img src="https://i1.wp.com/kumullus.com/wp-content/uploads/2020/09/video-conference-5230779_1920.png?resize=1080%2C675&ssl=1" alt="">
        </div> --}}
    </div>
</div>

@endsection
@push('script')
    <script>
        $('.send_contact').on('click', function(e){
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
                success: function(data) {
                    // console.log(data);
                    data = JSON.parse(data);
                    if (data.type == "success") {
                        $('.spinner-grow').remove();
                        vt.success(data.message,{
                            title: undefined,
                            position: "top-center",
                            duration: 5000,
                            closable: true,
                            focusable: true,
                            callback: undefined
                        });
                        window.location.href = "{{ route('contact') }}";
                    }else if (data.type == "error") {
                        $('.spinner-grow').remove();
                        vt.error(data.message,{
                            title: "Erreur !",
                            position: "top-center",
                            duration: 5000,
                            closable: true,
                            focusable: true,
                            callback: undefined
                        });
                    }else {
                        $('.spinner-grow').remove();
                        vt.error("Une erreur est survenue, veuillez reessayer plutard !",{
                            title: "Erreur !",
                            position: "top-center",
                            duration: 5000,
                            closable: true,
                            focusable: true,
                            callback: undefined
                        });
                    }
                },
                error: function(error) {
                    vt.error("Une erreur est survenue, veuillez reessayer plutard !",{
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