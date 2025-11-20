<div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->

    <h1>Hello World</h1>

    @foreach ($jobs as $job)
    <div style="border: 1px solid #333; border-radius: 15px; padding-left: 10px; margin-top:15px">
        <h1>The Name Of Employ Is {{$job['name']}}</h1>
        <h2> Job Title Is {{ $job['title'] }} </h2>
        <h2><span>Job Salary Is {{ $job['salary'] }}</span></h2>
    </div>
        
    @endforeach
</div>
