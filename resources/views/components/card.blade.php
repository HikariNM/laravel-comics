<div class="card bg-dark text-white border-0 h-100">
    <img src="{{ $img }}" class="card-img-top" alt="{{ $title }}" style="aspect-ratio: 3/4; object-fit: cover;">
    <div class="card-body px-1 py-2 border-top border-primary border-2">
        <p class="mb-0 text-uppercase fw-bold small text-white-50">{{ $title }}</p>
        {{ $slot }}
    </div>
</div>