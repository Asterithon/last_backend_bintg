<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <!-- Bootstrap CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero {
            padding: 50px;
            text-align: center;
        }
        .table-wrapper {
            padding: 20px;
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero container-fluid bg-dark">
        <div class="container">
            <h1>Project IDC</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac orci condimentum, interdum est at, laoreet nisi.</p>
            <a href="{{ route('book.create') }}" type="button" class="btn btn-primary">tambahkan disini</a>
        </div>
    </section>
    
    
    <section class="hero">
        <div class="container">
            <h1>Data Buku Tersedia</h1>
            <p>page ini berisi view data buku dengan dummy.</p>
            <a href="{{ route('book.create') }}" type="button" class="btn btn-primary">tambahkan disini</a>
        </div>
    </section>

    <!-- Table Section -->
    <section class="table-wrapper">
        <div class="container-fluid px-5">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th >No</th>
                            <th >Title</th>
                            <th>Description</th>
                            <th>Author</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                        <tr>
                            <td class="text-center" scope="row">{{ $loop->iteration }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->description }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->created_at }}</td>
                            <td>{{ $book->updated_at }}</td>
                            <td >
                                <form action="{{ route('book.destroy', $book->id) }}" class="d-flex">
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('book.edit', $book->id) }}" type="button" class="btn btn-outline-primary mx-2">Edit</a>
                                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                                </form>
                            </td>
                        @endforeach
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
