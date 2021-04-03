@extends('layouts.Foundation') @section("content")
<!-- HOME PAGE -->
<section class="contact mt-1">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 mx-auto col-md-7 col-12  text-center" data-aos="fade-up">

                <h1 class="mb-4"><strong>Blog Post</strong> </h1>
            </div>

            <div class="col-lg-8 mx-auto col-md-10 col-12" data-aos="fade-up">
            <h2 class='text-danger'>What is To Do List ?</h2>
            <h3 class="mb-4 text-justify" data-aos="fade-up">They list everything that you have to do, with the most important tasks at the top of the list, and the least important tasks at the bottom. ... And by prioritizing tasks, you plan the order in which you'll do them, so that you can tell what needs your immediate attention, and what you can leave until later.
            <h2 class='text-danger'>What is Time Management ?</h2>
            <h3 class="mb-4 text-justify" data-aos="fade-up">Time management is the process of planning and exercising conscious control of time spent on specific activities, especially to increase effectiveness, efficiency, and productivity. 

            <h2 class='text-success'>1. Be one day early.</h2>
            <h3 class="mb-4 text-justify" data-aos="fade-up">Many people believe they work best under the intense pressure of a deadline and will put off work until the day before it's due. However, for most this isn't actually the case. Projects often take more time than initially thought making it difficult to actually complete projects on time. 
            <h2 class='text-success'>2. Schedule breaks between tasks.</h2>
            <h3 class="mb-4 text-justify" data-aos="fade-up">During both waking and resting hours, the human brain goes through basic rest-activity cycles or BRAC for short. The brain cycles between higher and lower alertness every 90 minutes. After working at high intensity for more than 90 minutes, we begin to draw on emergency reserves of energy to keep us going. 
                                                                Scheduling a break at least every 90 minutes can help you maintain focus and keep your productivity high throughout the day.
            <h2 class='text-success'>3. Use time management apps.</h2>
            <h3 class="mb-4 text-justify" data-aos="fade-up">The best way to manage your time is to know where your time is going in the first place. Time management apps will allow you to monitor your progress and figure out your procrastination patters. Starting a timer can help increase your focus and works as a signal to your brain to switch into work mode.




                <br>
                <a href="{{ 'todo/create'}}" method="_HEAD" class='btn btn-primary'>Let's Add Todo</a>
            </h3>
            
           
        </div>
    </div>
</section>

@endsection