@include('dashboard.head')
@include('dashboard.navbar')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-1 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('dashboard.update', $buku->slug) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="font-weight-bold" for="judul">Judul</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $buku->title) }}" id="judul" placeholder="Masukkan Judul" required @required(true)>
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <label class="font-weight-bold" for="deskripsi_singkat">Deskripsi Singkat</label>
                                <textarea name="deskripsi_singkat" class="form-control @error('deskripsi_singkat') is-invalid @enderror" rows="5" id="deskripsi-singkat" placeholder="Masukkan Deskripsi Singkat" required @required(true)>{{ old('deskripsi_singkat', $buku->deskripsi_singkat) }}</textarea>
                                @error('deskripsi_singkat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <label class="font-weight-bold" for="category">Kategori</label>
                                <select class="form-select" id="category" name="category">
                                    <option value="Fiksi" selected>Fiksi</option>
                                    <option value="Non Fiksi">Non Fiksi</option>
                                </select>
                            </div>
                            {{-- Karikaturetorikatirturorokidulikiulinigimapisalasahtuh --}}
                            <div class="form-group mt-3">
                                <label class="font-weight-bold" for="image">Gambar</label>
                                <input type="file" class="form-control" name="image" id="image">
                            </div>
                            <div class="form-group mt-3">
                                <label class="font-weight-bold" for="isbn">ISBN</label>
                                <input type="text" class="form-control @error('isbn') is-invalid @enderror" name="isbn" value="{{ old('isbn', $buku->isbn) }}" id="isbn" placeholder="Masukkan ISBN" required @required(true)>
                                @error('isbn')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mt-3 mb-3">
                                <label class="font-weight-bold" for="penulis">Penulis</label>
                                <select class="form-select" id="penulis" name="penulis">
                                    @foreach ($penuliss as $penulis)
                                        <option value="{{ $penulis->id }}" selected>{{ $penulis->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <button type="reset" onclick="return confirm('Apakah anda yakin?');" class="btn btn-warning">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('dashboard.footer')