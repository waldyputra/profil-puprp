<div class="row gy-4">
    @foreach ($berita as $item)
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="img-fluid mb-3">
                <a href="#" class="stretched-link" data-bs-toggle="modal"
                    data-bs-target="#newsModal" data-title="{{ $item->title }}"
                    data-content="{!! nl2br(e($item->content)) !!}"
                    data-image="{{ asset('storage/' . $item->image) }}">
                    <h3>{{ $item->title }}</h3>
                </a>
                <p>
                    {!! Str::before(strip_tags($item->content), '.') !!}.
                    <span style="color: blue;">Baca Selengkapnya</span>
                </p>
            </div>
        </div>
    @endforeach
</div>

<div class="d-flex justify-content-center mt-4">
    {{ $berita->links() }}
</div>