<h2>New Job Posted: {{ $job->title }}</h2>
<p>
    Congratulations! for your job posting.
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
</p>
<p><a href="{{ url('/jobs/' . $job->id) }}">View Job</a></p>