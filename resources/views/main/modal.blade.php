<div class="modal fade" id="pinjamModal" tabindex="-1" aria-labelledby="pinjamModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          Apakah anda yakin untuk meminjam buku <b>{{ $buku->title }}</b>?
          Waktu peminjaman hanya berlaku 1 minggu.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
          <a class="btn btn-primary" href="/pinjam/{{ $buku->slug }}">Pinjam</a>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="kembalikanModal" tabindex="-1" aria-labelledby="kembalikanModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          Apakah anda yakin untuk mengembalikan buku <b>{{ $buku->title }}</b>?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
          <a href="/kembalikan/{{ $buku->slug }}" class="btn btn-success">Kembalikan</a>
        </div>
      </div>
    </div>
</div>