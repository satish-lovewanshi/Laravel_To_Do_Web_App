@extends('layouts.Foundation') @section("content")
<!-- Update TODO -->
<section class="contact mt-1">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 mx-auto col-md-7 col-12  text-center" data-aos="fade-up">

                <h1 class="mb-4">Update Your's<strong> ToDo</strong></h1>
            </div>

            <div class="col-lg-8 mx-auto col-md-10 col-12">

                <form action="{{ url('todo') }}/{{$todo->id}}" method="post" class="contact-form" data-aos="fade-up" data-aos-delay="300" role="form">
                    @method("put")
                    @csrf
                    <div class="row">
                       
                        <div class="col-lg-12 col-12">
                            <textarea class="form-control" rows="6" name="todo" placeholder="What to do next ?">{{$todo->todo}}</textarea>
                            <input type="hidden" value='{{$todo->id}}'>
                            <h3 class='text-center text-danger'>
                                @error('todo'){{$message}}@enderror
                            </h3>
                            @if(session()->has('message'))
                                <h3 class='text-success text-center'>{{ session()->get('message')}}</h3>
                            @endif
                        </div>
                      
                        <div class="col-lg-5 mx-auto col-7">
                            <button type="submit" class="form-control" id="submit-button">Update Now</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
</section>

@endsection