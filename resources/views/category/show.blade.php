<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>


    @if (session('success'))
        {{ session('success') }}
    @endif
    {{-- {{ dd($products) }} --}}
    <p>{{ $category->name }}</p>
    <div class="row mt-5">
        @foreach ($category->products as $product)
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <p>{{ $product->name }}</p>
                        <p>{{ $product->price }}</p>
                        <p>{{ $product->description }}</p>
                        {{-- <p>{{ $product->product }}</p> --}}

                     
                        {{-- href="{{ route('tasks.show',['task' => $task->id]) }}" --}}
                        {{-- <button class="btn btn-danger btn-sm">Delete</button> --}}
                    </div>
                </div>
            </div>
        @endforeach

    </div>











    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
