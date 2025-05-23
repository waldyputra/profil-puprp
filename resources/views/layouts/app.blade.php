<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/PUPRP.png') }}">
    <title>
        Dinas PUPRP Kabupaten Bintan
    </title>
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('assets/css/argon-dashboard.css') }}" rel="stylesheet" />
</head>

<body class="{{ $class ?? '' }}">

    @guest
        @yield('content')
    @endguest

    @auth
        @if (in_array(request()->route()->getName(), [
                'sign-in-static',
                'sign-up-static',
                'login',
                'register',
                'recover-password',
                'rtl',
                'virtual-reality',
            ]))
            @yield('content')
        @else
            @if (!in_array(request()->route()->getName(), ['profile', 'profile-static']))
                <div class="min-height-300 dark-version position-absolute w-100"></div>
            @elseif (in_array(request()->route()->getName(), ['profile-static', 'profile']))
                <div class="position-absolute w-100 min-height-300 top-0"
                    style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg'); background-position-y: 50%;">
                    <span class="mask dark-version opacity-6"></span>
                </div>
            @endif
            @include('layouts.navbars.auth.sidenav')
            <main class="main-content border-radius-lg">
                @yield('content')
            </main>
            @include('components.fixed-plugin')
        @endif
    @endauth

    <!-- Core JS Files -->
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('assets/js/argon-dashboard.js') }}"></script>
    @stack('js')

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
                        <div class="form-group">
                            <label for="namabidang">Nama Bidang</label>
                            <input type="text" class="form-control" id="namabidang" name="namabidang" required>
                        </div>
                        <div class="form-group">
                            <label for="tentang">Tentang</label>
                            <textarea class="form-control" id="tentang" name="tentang" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
    <div class="modal fade" id="editModalMap" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Map</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editMapForm" action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="mapId" name="mapId">
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" required>
                        </div>
                        <div class="form-group">
                            <label for="koordinat">Koordinat</label>
                            <input type="text" class="form-control" id="koordinat" name="koordinat" required>
                        </div>
                        <button type="submit" class="btn dark-version" style="color: white">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="EditModalSejarah" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Sejarah</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editSejarahForm" action="" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="sejarahId" name="sejarahId">
                        <div class="form-group">
                            <label for="namasejarah">Nama Sejarah</label>
                            <input type="text" class="form-control" id="namasejarah" name="namasejarah" required>
                        </div>
                        <button type="submit" class="btn dark-version" style="color: white">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editGalleryModal" tabindex="-1" role="dialog"
        aria-labelledby="editGalleryModalLabel" aria-hidden="true">
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
                        <button type="submit" class="btn dark-version" style="color: white">Simpan
                            perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editModalGeografis" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Geografis</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editGeografisForm" action="" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="geografisId" name="geografisId">
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" required>
                        </div>
                        <div class="form-group">
                            <label for="koordinat">Koordinat</label>
                            <textarea class="form-control" id="koordinat" name="koordinat" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn dark-version" style="color: white">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editModalPejabat" tabindex="-1" role="dialog"
        aria-labelledby="editModalLabelPejabat" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabelPejabat">Edit Pejabat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editPejabatForm" action="" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="pejabatId" name="pejabatId">
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
                            <input type="date" class="form-control" id="tanggallahir" name="tanggallahir"
                                required>
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
                        <button type="submit" class="btn dark-version" style="color: white">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
                    <img id="fotoStruktur" src="" alt="Foto Struktur"
                        style="max-width: 100%; height: auto;">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editNewsModal" tabindex="-1" role="dialog" aria-labelledby="editNewsModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editNewsModalLabel">Edit Berita</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editNewsForm" action="{{ route('berita.update', ':id') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="newsId" name="newsId">
                        <div class="form-group">
                            <label for="title">Judul Berita</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="content">Konten</label>
                            <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Pilih Gambar</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                        <button type="submit" class="btn dark-version" style="color: white">Simpan
                            perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#editModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var id = button.data('id'); // Extract info from data-* attributes
            var namabidang = button.data('namabidang');
            var tentang = button.data('tentang');

            var modal = $(this);
            modal.find('.modal-body #namabidang').val(namabidang);
            modal.find('.modal-body #tentang').val(tentang);
            modal.find('#editBidangForm').attr('action', '/bidangs/' + id);
        });
    </script>
    <script>
        $('#editModalGeografis').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var id = button.data('id'); // Extract info from data-* attributes
            var alamat = button.data('alamat');
            var koordinat = button.data('koordinat');

            var modal = $(this);
            modal.find('#geografisId').val(id);
            modal.find('#alamat').val(alamat);
            modal.find('#koordinat').val(koordinat);

            var actionUrl = '{{ route('geografis.update', ':id') }}';
            actionUrl = actionUrl.replace(':id', id);
            modal.find('form').attr('action', actionUrl);
        });
    </script>
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
        $('#editModalMap').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var id = button.data('id'); // Extract info from data-* attributes
            var alamat = button.data('alamat');
            var koordinat = button.data('koordinat');

            var modal = $(this);
            modal.find('#mapId').val(id);
            modal.find('#alamat').val(alamat);
            modal.find('#koordinat').val(koordinat);

            var actionUrl = '{{ route('map.update', ':id') }}';
            actionUrl = actionUrl.replace(':id', id);
            modal.find('form').attr('action', actionUrl);
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
        $('#EditModalSejarah').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var id = button.data('id'); // Extract info from data-* attributes
            var namasejarah = button.data('namasejarah');

            var modal = $(this);
            modal.find('#sejarahId').val(id);
            modal.find('#namasejarah').val(namasejarah);

            var actionUrl = '{{ route('sejarah.update', ':id') }}';
            actionUrl = actionUrl.replace(':id', id);
            modal.find('form').attr('action', actionUrl);
        });
    </script>
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


</body>

</html>
