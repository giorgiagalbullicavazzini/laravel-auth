<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
            @foreach ($projects as $project)
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">{{ $project->title }}</h5>
                      <h6 class="card-subtitle mb-2 text-body-secondary">{{ $project->status }} || {{ $project->release_date }}</h6>
                      <p class="card-text">{{ $project->description }}</p>
                      <a href="{{ $project->url }}" class="card-link">click</a>
                    </div>
                    <div class="card-footer text-body-secondary">
                        {{ $project->tags }} || {{ $project->languages }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>