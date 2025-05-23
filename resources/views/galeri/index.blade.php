@extends('layouts.app')

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Galeri'])
    <div class="row mt-4 mx-4">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                    <h6>Galeri Foto</h6>
                    <button type="button" class="btn dark-version" style="color: white" data-toggle="modal"
                        data-target="#addGalleryModal">
                        Tambah Galeri Baru
                    </button>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">Judul Galeri</th>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">Foto</th>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($galeris as $galeri)
                                    <tr>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-sm font-weight-bold mb-0">{{ $galeri->title }}</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            @foreach ($galeri->photos as $photo)
                                                <img src="{{ asset('storage/' . $photo->path) }}" alt="foto" class="img-thumbnail" width="100">
                                            @endforeach
                                        </td>
                                        <td class="align-middle text-end">
                                            <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                                <a href="#" class="btn btn-icon btn-3 btn-warning" data-toggle="modal"
                                                    data-target="#editGalleryModal" data-id="{{ $galeri->id }}"
                                                    data-title="{{ $galeri->title }}">
                                                    <span class="btn-inner--icon"><i class="fa fa-edit"></i></span>
                                                    <span class="btn-inner--text">Edit</span>
                                                </a>&nbsp
                                                <form action="{{ route('galeri.destroy', $galeri->id) }}"
                                                    method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-icon btn-3 btn-danger">
                                                        <span class="btn-inner--icon"><i class="fa fa-trash"></i></span>
                                                        <span class="btn-inner--text">Hapus</span>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="align-middle text-center text-sm">
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

    <!-- Add Gallery Modal -->
    <div class="modal fade" id="addGalleryModal" tabindex="-1" role="dialog" aria-labelledby="addGalleryModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addGalleryModalLabel">Tambah Galeri Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addGalleryForm" action="{{ route('galeri.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Judul Galeri</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="photos">Pilih Foto</label>
                            <input type="file" class="form-control" id="photos" name="photos[]" multiple required>
                        </div>
                        <button type="submit" class="btn dark-version" style="color: white">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Gallery Modal -->
    <div class="modal fade" id="editGalleryModal" tabindex="-1" role="dialog" aria-labelledby="editGalleryModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editGalleryModalLabel">Edit Galeri</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editGalleryForm" action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="galleryId" name="galleryId">
                        <div class="form-group">
                            <label for="title">Judul Galeri</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="photos">Pilih Foto</label>
                            <input type="file" class="form-control" id="photos" name="photos[]" multiple>
                        </div>
                        <button type="submit" class="btn dark-version" style="color: white">Simpan perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footers.auth.footer')
@endsection

@section('scripts')
<script>
    $('#editGalleryModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var id = button.data('id'); // Extract info from data-* attributes
        var title = button.data('title');

        var modal = $(this);
        modal.find('#galleryId').val(id);
        modal.find('#title').val(title);

        var actionUrl = '{{ route('galeri.update', ':id') }}';
        actionUrl = actionUrl.replace(':id', id);
        modal.find('form').attr('action', actionUrl);
    });
</script>
@endsection
