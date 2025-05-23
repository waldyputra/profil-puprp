@extends('layouts.app')

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Struktur'])
    <div class="row mt-4 mx-4">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                    <h6>Struktur</h6>
                    <button type="button" class="btn dark-version" style="color: white" data-toggle="modal"
                        data-target="#addModal">
                        Add New Struktur
                    </button>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">Foto</th>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($strukturs as $strukturItem)
                                    <tr>
                                        <td class="align-middle text-center text-sm">
                                            <button type="button" class="btn btn-success" data-toggle="modal"
                                                data-target="#fotoModalStruktur" data-foto="{{ $strukturItem->foto }}">
                                                <span class="btn-inner--icon"><i class="fa fa-image"></i></span>
                                                <span class="btn-inner--text">Lihat Foto</span>
                                            </button>
                                        </td>
                                        <td class="align-middle text-end">
                                            <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                                <a href="#" class="btn btn-icon btn-3 btn-warning" data-toggle="modal"
                                                    data-target="#editModalStruktur" data-id="{{ $strukturItem->id }}"
                                                    data-foto="{{ $strukturItem->foto }}">
                                                    <span class="btn-inner--icon"><i class="fa fa-edit"></i></span>
                                                    <span class="btn-inner--text">Edit</span>
                                                </a>&nbsp
                                                <form action="{{ route('struktur.destroy', $strukturItem->id) }}"
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
                                        <td colspan="10" class="align-middle text-center text-sm">
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

    <!-- Add Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Add New Struktur</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addStrukturForm" action="{{ route('struktur.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control" id="foto" name="foto">
                        </div>
                        <button type="submit" class="btn dark-version" style="color: white">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="editModalStruktur" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Struktur</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editStrukturForm" action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="edit_id" name="id">
                        <div class="form-group">
                            <label for="edit_foto">Foto</label>
                            <input type="file" class="form-control" id="edit_foto" name="foto">
                            <img id="edit_current_foto" src="" alt="Current Foto" class="img-thumbnail mt-2"
                                style="max-width: 100px;">
                        </div>
                        <button type="submit" class="btn dark-version" style="color: white">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Photo Modal -->
    <div class="modal fade" id="fotoModalStruktur" tabindex="-1" role="dialog" aria-labelledby="fotoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="fotoModalLabel">Foto Struktur</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img id="fotoStruktur" src="" alt="Foto Struktur" style="max-width: 100%; height: auto;">
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footers.auth.footer')
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#editModalStruktur').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget);
                var id = button.data('id');
                var foto = button.data('foto');

                console.log("Foto filename: ", foto); // Debug output

                // Assuming `foto` contains just the filename
                var baseUrl = '{{ asset('uploads') }}'; // Base URL to the 'public/uploads' directory

                var fotoUrl = baseUrl + '/' + foto;
                console.log("Constructed URL: ", fotoUrl); // Debug output

                var modal = $(this);
                modal.find('#edit_id').val(id);
                modal.find('#edit_current_foto').attr('src', fotoUrl);

                var actionUrl = '{{ route('struktur.update', ':id') }}';
                actionUrl = actionUrl.replace(':id', id);
                modal.find('form').attr('action', actionUrl);
            });
        });
    </script>
    <script>
        $('#fotoModalStruktur').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var foto = button.data('foto'); // Extract the filename from data-* attributes

            console.log("Foto filename: ", foto); // Debug output

            var baseUrl = '{{ asset('uploads') }}'; // Base URL to the 'public/uploads' directory

            var fotoUrl = baseUrl + '/' + foto;
            console.log("Constructed URL: ", fotoUrl); // Debug output

            var modal = $(this);
            modal.find('.modal-body #fotoStruktur').attr('src', fotoUrl);
        });
    </script>
@endsection
