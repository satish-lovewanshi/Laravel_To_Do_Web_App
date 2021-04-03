@extends('layouts.Foundation')
 @section("content")
<!-- ADD TODO -->
<section class="contact mt-1">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 mx-auto col-md-7 col-12  text-center" data-aos="fade-up">

                <h1 class="mb-4"><strong> {{ Str::upper(Auth::user()->name) }}</strong> Your <strong>Upcoming</strong> ToDo <strong>Let's</strong> Work on !</h1>
            </div>

            <div class="col-lg-8 mx-auto col-md-10 col-12 " data-aos="fade-up" data-aos-delay="300">
                    @if(session()->has('message'))
                        <h3 class='text-success text-center'>{{ session()->get('message')}}</h3>
                    @endif
                <!-- todo cards -->
                @if($allTodo)
                @foreach($allTodo as $todo)
                @if(Auth::user()->id==$todo->UserId)
                <div class="card mb-3" >
                    <div class="row no-gutters">
                        <div class="col-8 ">
                        <div class="card-body">
                            <h5 class="card-title text-success">{{$todo->created_at->format("D d/M/Y")}}</h5> <!--format("d/m/y")-->
                            <h4 class="card-text text-justify text-dark ">{{$todo->todo}}</h4>
                            <p class="card-text"><small class="text-muted">Last updated {{$todo->updated_at->format("D/M/Y")}}</small></p>
                        </div>
                        </div>
                        <div class="col-4 ">

                            
                            <li class='nav-link'><button  class='btn btn-primary '>Priority: {{$todo->Priority}}</button></li>
                            

                            <form action="{{route('todo.edit',[$todo->id])}}" method='post'>
                                @method('GET')
                                @csrf
                            <li class='nav-link'><button type="submit" class='btn btn-success '>Update</button></li>
                            </form>
                            
                            <form action="{{route('todo.destroy',[$todo->id])}}" method='post'>
                                @method('delete')
                                @csrf
                            <li class='nav-link'><button type='submit'  class='btn btn-danger '>Delete</button></li>
                            
                            </form>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
                @endif
             
            </div>

        </div>
    </div>
</section>

@endsection