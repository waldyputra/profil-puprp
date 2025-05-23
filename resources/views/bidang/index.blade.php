@extends('layouts.app')

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Bidang'])
    <div class="row mt-4 mx-4">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                    <h6>Bidang</h6>
                    <button type="button" class="btn dark-version" style="color: white" data-toggle="modal"
                        data-target="#addModal">
                        Add New Bidang
                    </button>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">Nama Bidang</th>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($bidangs as $bidang)
                                    <tr>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-sm font-weight-bold mb-0">{{ $bidang->namabidang }}</p>
                                        </td>
                                        <td class="align-middle text-end">
                                            <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                                <a href="#" class="btn btn-icon btn-3 btn-warning" data-toggle="modal"
                                                    data-target="#editModal" data-id="{{ $bidang->id }}"
                                                    data-namabidang="{{ $bidang->namabidang }}"
                                                    data-tentang="{{ $bidang->tentang }}">
                                                    <span class="btn-inner--icon"><i class="fa fa-edit"></i></span>
                                                    <span class="btn-inner--text">Edit</span>
                                                </a>&nbsp
                                                <form action="{{ route('bidangs.destroy', $bidang->id) }}" method="POST"
                                                    style="display:inline;">
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
                                        <td colspan="2" class="align-middle text-center text-sm">
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
                    <h5 class="modal-title" id="addModalLabel">Add New Bidang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addBidangForm" action="{{ route('bidangs.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="namabidang">Nama Bidang</label>
                            <input type="text" class="form-control" id="namabidang" name="namabidang" required>
                        </div>
                        <div class="form-group">
                            <label for="tentang">Tentang</label>
                            <textarea class="form-control" id="tentang" name="tentang" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn dark-version" style="color: white">Add Bidang</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Bidang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editBidangForm" action="" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="bidangId" name="bidangId">
                        <div class="form-group">
                            <label for="namabidang">Nama Bidang</label>
                            <input type="text" class="form-control" id="namabidang" name="namabidang" required>
                        </div>
                        <div class="form-group">
                            <label for="tentang">Tentang</label>
                            <textarea class="form-control" id="tentang" name="tentang" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn dark-version" style="color: white">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript for Modal -->
    <script>
        $('#editModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var id = button.data('id'); // Extract info from data-* attributes
            var namabidang = button.data('namabidang');
            var tentang = button.data('tentang');

            var modal = $(this);
            modal.find('#bidangId').val(id);
            modal.find('#namabidang').val(namabidang);
            modal.find('#tentang').val(tentang);

            var actionUrl = '{{ route('bidangs.update', ':id') }}';
            actionUrl = actionUrl.replace(':id', id);
            modal.find('form').attr('action', actionUrl);
        });
    </script>
    @include('layouts.footers.auth.footer')
@endsection
