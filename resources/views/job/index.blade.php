<div>
    <h1>Job Board</h1>
<h3>My name is {{ $name }}</h3>
    @foreach ($jobs as $job)
        <div>
            <strong>{{ $job['title'] }}</strong> - Salary: {{ $job['salary'] }}
        </div>
    @endforeach
</div>