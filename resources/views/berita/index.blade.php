@extends('layouts.app')

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Berita'])
    <div class="row mt-4 mx-4">
        <div class="col-12">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                    <h6>Daftar Berita</h6>
                    <button type="button" class="btn dark-version" style="color: white" data-bs-toggle="modal"
                        data-bs-target="#addNewsModal">
                        Tambah Berita Baru
                    </button>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">Judul</th>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">Konten</th>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">Gambar</th>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($beritas as $berita)
                                    <tr>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-sm font-weight-bold mb-0">{{ $berita->title }}</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-sm mb-0">{{ $berita->content }}</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            @if ($berita->image)
                                                <img src="{{ asset('storage/' . $berita->image) }}" alt="gambar"
                                                    class="img-thumbnail" width="100">
                                            @else
                                                <span class="text-sm mb-0">Tidak ada gambar</span>
                                            @endif
                                        </td>
                                        <td class="align-middle text-end">
                                            <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                                <button type="button" class="btn btn-icon btn-3 btn-warning"
                                                    data-bs-toggle="modal" data-bs-target="#editNewsModal"
                                                    data-id="{{ $berita->id }}" data-title="{{ $berita->title }}"
                                                    data-content="{{ $berita->content }}">
                                                    <span class="btn-inner--icon"><i class="fa fa-edit"></i></span>
                                                    <span class="btn-inner--text">Edit</span>
                                                </button>&nbsp;
                                                <form action="{{ route('berita.destroy', $berita->id) }}" method="POST"
                                                    class="delete-form" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-icon btn-3 btn-danger delete-btn">
                                                        <span class="btn-inner--icon"><i class="fa fa-trash"></i></span>
                                                        <span class="btn-inner--text">Hapus</span>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="align-middle text-center text-sm">
                                            <p class="text-sm font-weight-bold mb-0">Tidak ada data</p>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add News Modal -->
    <div class="modal fade" id="addNewsModal" tabindex="-1" aria-labelledby="addNewsModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addNewsModalLabel">Tambah Berita Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addNewsForm" action="{{ route('berita.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="title">Judul Berita</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="content">Konten Berita</label>
                            <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="image">Pilih Gambar</label>
                            <input type="file" class="form-control" id="image" name="image" required>
                        </div>
                        <div class="modal-footer px-0 pb-0">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn dark-version" style="color: white">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit News Modal -->
    <div class="modal fade" id="editNewsModal" tabindex="-1" aria-labelledby="editNewsModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editNewsModalLabel">Edit Berita</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editNewsForm" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="edit_title">Judul Berita</label>
                            <input type="text" class="form-control" id="edit_title" name="title" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="edit_content">Konten Berita</label>
                            <textarea class="form-control" id="edit_content" name="content" rows="3" required></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="edit_image">Pilih Gambar (Opsional)</label>
                            <input type="file" class="form-control" id="edit_image" name="image">
                            <small class="text-muted">Biarkan kosong jika tidak ingin mengubah gambar</small>
                        </div>
                        <div class="modal-footer px-0 pb-0">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn dark-version" style="color: white">Simpan
                                Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footers.auth.footer')
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Handle Edit Modal
            const editModal = document.getElementById('editNewsModal');
            editModal.addEventListener('show.bs.modal', function(event) {
                const button = event.relatedTarget;
                const id = button.getAttribute('data-id');
                const title = button.getAttribute('data-title');
                const content = button.getAttribute('data-content');

                const form = this.querySelector('form');
                form.action = '{{ route('berita.update', ':id') }}'.replace(':id', id);

                this.querySelector('#edit_title').value = title;
                this.querySelector('#edit_content').value = content;
            });

            // Handle Delete Confirmation
            document.querySelectorAll('.delete-form').forEach(form => {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    if (confirm('Apakah Anda yakin ingin menghapus berita ini?')) {
                        this.submit();
                    }
                });
            });

            // Handle Alert Dismissal
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                setTimeout(() => {
                    const bsAlert = new bootstrap.Alert(alert);
                    bsAlert.close();
                }, 5000);
            });
        });
    </script>
@endsection
