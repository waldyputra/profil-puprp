@extends('layouts.app')

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Pejabat'])
    <div class="row mt-4 mx-4">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                    <h6>Pejabat</h6>
                    <button type="button" class="btn dark-version" style="color: white" data-toggle="modal"
                        data-target="#addModal">
                        Add New Pejabat
                    </button>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">Jabatan</th>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">Nama Pejabat</th>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">NIP</th>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">Tempat Lahir</th>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">Tanggal Lahir</th>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">Agama</th>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">Pangkat</th>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">Pendidikan</th>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">Foto</th>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($pejabats as $pejabatItem)
                                    <tr>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-sm font-weight-bold mb-0">{{ $pejabatItem->jabatan }}</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-sm font-weight-bold mb-0">{{ $pejabatItem->namapejabat }}</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-sm font-weight-bold mb-0">{{ $pejabatItem->nip }}</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-sm font-weight-bold mb-0">{{ $pejabatItem->tempatlahir }}</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-sm font-weight-bold mb-0">{{ $pejabatItem->tanggallahir }}</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-sm font-weight-bold mb-0">{{ $pejabatItem->agama }}</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-sm font-weight-bold mb-0">{{ $pejabatItem->pangkat }}</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-sm font-weight-bold mb-0">{{ $pejabatItem->pendidikan }}</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <button type="button" class="btn btn-success" data-toggle="modal"
                                                data-target="#fotoModal" data-foto="{{ $pejabatItem->foto }}">
                                                <span class="btn-inner--icon"><i class="fa fa-image"></i></span>
                                                <span class="btn-inner--text">Lihat Foto</span>
                                            </button>
                                        </td>
                                        <td class="align-middle text-end">
                                            <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                                <a href="#" class="btn btn-icon btn-3 btn-warning" data-toggle="modal"
                                                    data-target="#editModalPejabat" data-id="{{ $pejabatItem->id }}"
                                                    data-jabatan="{{ $pejabatItem->jabatan }}"
                                                    data-namapejabat="{{ $pejabatItem->namapejabat }}"
                                                    data-nip="{{ $pejabatItem->nip }}"
                                                    data-tempatlahir="{{ $pejabatItem->tempatlahir }}"
                                                    data-tanggallahir="{{ $pejabatItem->tanggallahir }}"
                                                    data-agama="{{ $pejabatItem->agama }}"
                                                    data-pangkat="{{ $pejabatItem->pangkat }}"
                                                    data-pendidikan="{{ $pejabatItem->pendidikan }}"
                                                    data-foto="{{ $pejabatItem->foto }}">
                                                    <span class="btn-inner--icon"><i class="fa fa-edit"></i></span>
                                                    <span class="btn-inner--text">Edit</span>
                                                </a>&nbsp
                                                <form action="{{ route('pejabat.destroy', $pejabatItem->id) }}"
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
                    <h5 class="modal-title" id="addModalLabel">Add New Pejabat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addPejabatForm" action="{{ route('pejabat.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <input type="text" class="form-control" id="jabatan" name="jabatan" required>
                        </div>
                        <div class="form-group">
                            <label for="namapejabat">Nama Pejabat</label>
                            <input type="text" class="form-control" id="namapejabat" name="namapejabat" required>
                        </div>
                        <div class="form-group">
                            <label for="nip">NIP</label>
                            <input type="text" class="form-control" id="nip" name="nip" required>
                        </div>
                        <div class="form-group">
                            <label for="tempatlahir">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggallahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggallahir" name="tanggallahir" required>
                        </div>
                        <div class="form-group">
                            <label for="agama">Agama</label>
                            <input type="text" class="form-control" id="agama" name="agama" required>
                        </div>
                        <div class="form-group">
                            <label for="pangkat">Pangkat</label>
                            <input type="text" class="form-control" id="pangkat" name="pangkat" required>
                        </div>
                        <div class="form-group">
                            <label for="pendidikan">Pendidikan</label>
                            <input type="text" class="form-control" id="pendidikan" name="pendidikan" required>
                        </div>
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
    <div class="modal fade" id="editModalPejabat" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Pejabat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editPejabatForm" action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="edit_id" name="id">
                        <div class="form-group">
                            <label for="edit_jabatan">Jabatan</label>
                            <input type="text" class="form-control" id="edit_jabatan" name="jabatan" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_namapejabat">Nama Pejabat</label>
                            <input type="text" class="form-control" id="edit_namapejabat" name="namapejabat"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="edit_nip">NIP</label>
                            <input type="text" class="form-control" id="edit_nip" name="nip" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_tempatlahir">Tempat Lahir</label>
                            <input type="text" class="form-control" id="edit_tempatlahir" name="tempatlahir"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="edit_tanggallahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="edit_tanggallahir" name="tanggallahir"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="edit_agama">Agama</label>
                            <input type="text" class="form-control" id="edit_agama" name="agama" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_pangkat">Pangkat</label>
                            <input type="text" class="form-control" id="edit_pangkat" name="pangkat" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_pendidikan">Pendidikan</label>
                            <input type="text" class="form-control" id="edit_pendidikan" name="pendidikan" required>
                        </div>
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
    <div class="modal fade" id="fotoModal" tabindex="-1" role="dialog" aria-labelledby="fotoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="fotoModalLabel">Foto Pejabat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img id="fotoPejabat" src="" alt="Foto Pejabat" style="max-width: 100%; height: auto;">
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footers.auth.footer')
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#editModalPejabat').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget);
                var id = button.data('id');
                var jabatan = button.data('jabatan');
                var namapejabat = button.data('namapejabat');
                var nip = button.data('nip');
                var tempatlahir = button.data('tempatlahir');
                var tanggallahir = button.data('tanggallahir');
                var agama = button.data('agama');
                var pangkat = button.data('pangkat');
                var pendidikan = button.data('pendidikan');
                var foto = button.data('foto');

                console.log("Foto filename: ", foto); // Debug output

                // Assuming `foto` contains just the filename
                var baseUrl = '{{ asset('uploads') }}'; // Base URL to the 'public/uploads' directory

                var fotoUrl = baseUrl + '/' + foto;
                console.log("Constructed URL: ", fotoUrl); // Debug output

                var modal = $(this);
                modal.find('#edit_id').val(id);
                modal.find('#edit_jabatan').val(jabatan);
                modal.find('#edit_namapejabat').val(namapejabat);
                modal.find('#edit_nip').val(nip);
                modal.find('#edit_tempatlahir').val(tempatlahir);
                modal.find('#edit_tanggallahir').val(tanggallahir);
                modal.find('#edit_agama').val(agama);
                modal.find('#edit_pangkat').val(pangkat);
                modal.find('#edit_pendidikan').val(pendidikan);
                modal.find('#edit_current_foto').attr('src', fotoUrl);

                var actionUrl = '{{ route('pejabat.update', ':id') }}';
                actionUrl = actionUrl.replace(':id', id);
                modal.find('form').attr('action', actionUrl);
            });
        });
    </script>
    <script>
        $('#fotoModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var foto = button.data('foto'); // Extract the filename from data-* attributes

            console.log("Foto filename: ", foto); // Debug output

            var baseUrl = '{{ asset('uploads') }}'; // Base URL to the 'public/uploads' directory

            var fotoUrl = baseUrl + '/' + foto;
            console.log("Constructed URL: ", fotoUrl); // Debug output

            var modal = $(this);
            modal.find('.modal-body #fotoPejabat').attr('src', fotoUrl);
        });
    </script>
@endsection
