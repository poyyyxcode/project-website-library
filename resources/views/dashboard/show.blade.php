@include('dashboard.head')
@include('dashboard.navbar')
<div class="container mt-5 mb-5">
    <a href="{{ route('dashboard.index') }}" class="btn btn-secondary mb-4">< Kembali</a>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <img src="{{ asset('storage/images/'.$buku->image) }}" class="w-100 rounded" alt="{{ $buku->title }}" style="height: 500px; object-fit: contain">
                        <hr>
                        <h4><b>Judul:</b> {{ $buku->title }}. (<b>ID:</b> {{ $buku->id }})</h4>
                        <p class="tmt-3">
                            <b>Deksripsi Singkat:</b> {{ $buku->deskripsi_singkat }}
                        </p>
                        <p><b>Category:</b> {{ $buku->category }}</p>
                        <p><b>ISBN:</b> {{ $buku->isbn }}</p>
                        <p><b>Dibuat pada:</b> {{ $buku->created_at ?? 'Tidak diketahui' }}</p>
                        <p><b>Diupdate pada:</b> {{ $buku->updated_at ?? 'Tidak diketahui'}}</p>
                        <p><b>Status:</b>
                            @if (!($buku->is_tersedia))
                                Dipinjam oleh {{ $buku->user_meminjam ?? 'tidak diketahui' }}
                            @else
                                Tersedia
                            @endif
                        </p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('dashboard.footer')