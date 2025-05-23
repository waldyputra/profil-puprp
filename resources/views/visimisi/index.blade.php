@extends('layouts.app')

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Visi Misi'])
    <div class="row mt-4 mx-4">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                    <h6>Visi Misi</h6>
                    <button type="button" class="btn dark-version" style="color: white" data-toggle="modal"
                        data-target="#addModal">
                        Add Visi Misi
                    </button>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">Visi</th>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">Misi</th>
                                    <th class="text-center text-uppercase text-xxs font-weight-bolder">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($visimisis as $visimisi)
                                    <tr>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-sm font-weight-bold mb-0">{{ $visimisi->visi }}</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-sm font-weight-bold mb-0">{{ $visimisi->misi }}</p>
                                        </td>
                                        <td class="align-middle text-end">
                                            <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                                <a href="#" class="btn btn-icon btn-3 btn-warning" data-toggle="modal"
                                                    data-target="#EditModalVisimisi" data-id="{{ $visimisi->id }}"
                                                    data-visi="{{ $visimisi->visi }}" data-misi="{{ $visimisi->misi }}">
                                                    <span class="btn-inner--icon"><i class="fa fa-edit"></i></span>
                                                    <span class="btn-inner--text">Edit</span>
                                                </a>&nbsp
                                                <form action="{{ route('visimisi.destroy', $visimisi->id) }}" method="POST"
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
                    <h5 class="modal-title" id="addModalLabel">Add Visi Misi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addSejarahForm" action="{{ route('visimisi.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="visi">Visi</label>
                            <textarea class="form-control" id="visi" name="visi" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="misi">Misi</label>
                            <textarea class="form-control" id="misi" name="misi" required></textarea>
                        </div>
                        <button type="submit" class="btn dark-version" style="color: white">Add Visi Misi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Edit Modal -->
    <div class="modal fade" id="EditModalVisimisi" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Visi Misi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editVisimisiForm" action="" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="sejarahId" name="sejarahId">
                        <div class="form-group">
                            <label for="visi">Visi</label>
                            <input type="text" class="form-control" id="visi" name="visi" required>
                        </div>
                        <div class="form-group">
                            <label for="misi">Misi</label>
                            <input type="text" class="form-control" id="misi" name="misi" required>
                        </div>
                        <button type="submit" class="btn dark-version" style="color: white">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript for Modal -->
    <script>
        $('#EditModalVisimisi').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var id = button.data('id'); // Extract info from data-* attributes
            var visi = button.data('visi');
            var misi = button.data('misi');

            var modal = $(this);
            modal.find('#sejarahId').val(id);
            modal.find('#visi').val(visi);
            modal.find('#misi').val(misi);

            var actionUrl = '{{ route('visimisi.update', ':id') }}';
            actionUrl = actionUrl.replace(':id', id);
            modal.find('form').attr('action', actionUrl);
        });
    </script>

    @include('layouts.footers.auth.footer')
@endsection
