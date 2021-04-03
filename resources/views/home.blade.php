@extends('layouts.Foundation')
@section("content")
<!-- HOME PAGE -->
<section class="contact mt-1">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 mx-auto col-md-7 col-12  text-center" data-aos="fade-up">

                <h1 class="mb-4">Hey User, Let's <strong>Manage Your </strong> Upcoming <strong>creative</strong> Work with us </h1>
            </div>

            <div class="col-lg-8 mx-auto col-md-10 col-12">
            <h3 class="mb-4  text-center" data-aos="fade-up">The best way to manage your time is to know where your time is going in the first place. Time management apps will allow you to monitor your progress and figure out your procrastination patters. Starting a timer can help increase your focus and works as a signal to your brain to switch into work mode.
                <br>
                <a href="{{ 'todo/create'}}" method="_HEAD" class='btn btn-primary'>Let's Add Todo</a>
            </h3>
            
           
        </div>
    </div>
</section>

@endsection