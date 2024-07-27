@include('dashboard.head')
@include('dashboard.navbar')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session('failed'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('failed') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="container mt-4">
        <a href="{{ route('dashboard.create') }}" class="btn btn-success mb-4">+ Tambah Buku</a>
        <div class="table-responsive">
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Image</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">ISBN</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($bukus as $buku)
                        <tr>
                            <th scope="row">{{ $buku->id }}</th>
                            <td>{{ $buku->title }}</td>
                            <td><img src="{{ asset("storage/images/$buku->image") }}" class="card-img-top" style="height: 150px; object-fit: contain" alt="Img Error: {{ $buku->title }}"></td>
                            <td>{{ $buku->category }}</td>
                            <td>{{ $buku->penulis[0]->name }}</td>
                            <td>{{ $buku->isbn }}</td>
                            <td>
                                <a href="{{ route('dashboard.show', $buku->slug) }}" class="btn btn-dark">Show</a>
                                <a href="{{ route('dashboard.edit', $buku->slug) }}" class="btn btn-primary">Edit</a>
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('dashboard.destroy', $buku->slug) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $bukus->links() }}
        </div>
    </div>
@include('dashboard.footer')