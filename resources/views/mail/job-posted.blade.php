<h2>{{ $job->title }}</h2>

<p>Congrats, Job has been posted</p>

<p>
    <a href="{{ url('/jobs/' . $job->id) }}">View your job listing.</a>
</p>

