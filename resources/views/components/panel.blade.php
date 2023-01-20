<div class="col-12 bg-dark mb-4">
    <div class="container d-flex py-3 text-light">
        <a href="{{ route('welcome') }}" class="d-flex align-items-center gap-2 hover-link">
            <img src="{{ asset('/images/logo.png') }}" style="width: 50px;height: auto" alt="">
            <p class="fw-bold fs-5">Fur.am</p>
        </a>
        <div class="ms-auto d-flex gap-3 align-items-center">
            <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="hover-link"><i class="fa-solid fa-right-to-bracket me-1"></i> Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
</div>
