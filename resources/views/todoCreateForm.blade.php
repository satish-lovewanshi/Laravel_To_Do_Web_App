@extends('layouts.Foundation')
 @section("content")
<!-- ADD TODO -->
<section class="contact mt-1">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 mx-auto col-md-7 col-12  text-center" data-aos="fade-up">

                <h1 class="mb-4">Hey {{ Str::upper(Auth::user()->name) }}, Let's <strong>Add</strong> Next <strong>creative</strong> Work</h1>
            </div>

            <div class="col-lg-8 mx-auto col-md-10 col-12">

                <form action="{{ url('todo') }}" method="post" class="contact-form" data-aos="fade-up" data-aos-delay="300" role="form">
                    @csrf
                    <div class="row">
                            @if(session()->has('message'))
                                <h3 class='text-success text-center'>{{  session()->get('message')}}</h3>
                            @endif
                        <div class="col-lg-12 col-12">
                            <textarea class="form-control" rows="6" name="todo" placeholder="What to do next ?"></textarea>
                            <h3 class='text-center text-danger'>
                                @error('todo'){{$message}}@enderror
                            </h3>
                            
                            
                        </div>
                      
                        <div class="col-lg-5 mx-auto col-7">
                            
                            <input type="text" class="form-control" name="Priority" placeholder="Enter Priority"></input>
                        </div>
                        <div class="col-lg-5 mx-auto col-7">
                            
                            <button type="submit" class="form-control" id="submit-button">Add Now</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
</section>

@endsection