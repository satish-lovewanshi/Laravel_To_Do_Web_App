@extends('layouts.Foundation')
@section("content")
<!-- CONTACT -->
<section class="contact mt-1">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 mx-auto col-md-7 col-12  text-center" data-aos="fade-up">

                <h1 class="mb-4">Hey User, Let's <strong>Send</strong> Your <strong>Query</strong></h1>
            </div>

            <div class="col-lg-8 mx-auto col-md-10 col-12">
            @if(session()->has('message'))
                <h3 class='text-success text-center' data-aos="fade-up">{{  session()->get('message')}}</h3>
            @endif
            <form action="{{route('contact')}}" method="post" class="contact-form" data-aos="fade-up" data-aos-delay="300" role="form">
                @csrf
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <input type="text" class="form-control" name="name" placeholder="Name">
                        </div>

                        <div class="col-lg-6 col-12">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>

                        <div class="col-lg-12 col-12">
                            <textarea class="form-control" rows="6" name="message" placeholder="Message"></textarea>
                        </div>

                        <div class="col-lg-5 mx-auto col-7">
                            <button type="submit" class="form-control" id="submit-button">Send Now</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
</section>

@endsection