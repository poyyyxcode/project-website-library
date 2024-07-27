@foreach ($bukus as $buku)
    <div class="col">
        <div class="card">
        <img src="{{ asset("storage/images/$buku->image") }}" class="card-img-top" style="height: 335px; object-fit: contain" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $buku->title }}</h5>
            <p class="card-text">{{ $buku->deskripsi_singkat }}</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Penulis: {{ $buku->penulis()->get()[0]->name; }}</li>
            <li class="list-group-item">Kategori: {{ $buku->category }}</li>
            @guest
                <li class="list-group-item">Status: {{ $buku->is_tersedia ? 'Tersedia' : 'Tidak tersedia' }}</li>
            @endguest
            @auth
                @if ($buku->is_dipinjam())
                    <li class="list-group-item">Status: Dipinjam</li>
                @else
                    <li class="list-group-item">Status: {{ $buku->is_tersedia ? 'Tersedia' : 'Tidak tersedia' }}</li>
                @endif
            @endauth
            @if ($buku->deadline)
                <li class="list-group-item">Akan dikembalikan pada: {{ $buku->deadline }}</li>
            @endif
        </ul>
        <div class="card-body">
            @auth
                @if ($buku->is_ditandai())
                    <a href="/hapus_penanda/{{ $buku->slug }}" class="btn btn-danger">Hapus Penanda</a>
                @else
                    <a href="/tandai/{{ $buku->slug }}" class="btn btn-danger">Tandai</a>
                @endif
                @if ($buku->is_dipinjam())
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#kembalikanModal">
                        Kembalikan
                    </button>
                @elseif ($buku->is_tersedia)
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pinjamModal">
                        Pinjam
                    </button>
                @else
                @endif
            @endauth
            @guest
                <a href="/tandai/{{ $buku->slug }}" class="btn btn-danger">Tandai</a>
                <button class="btn btn-success">Pinjam</button>
            @endguest
        </div>        
        </div>
    </div>
    @include('main.modal')
@endforeach