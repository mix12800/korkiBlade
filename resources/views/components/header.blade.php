<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('index') }}">
            <img src="{{ asset('storage/img/image01.webp') }}" class="logo" alt="" />
            Корочки.есть
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-underline">
                @if (Auth::user()->role == 'admin')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index') }}">Заявки</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('coursesGet') }}">Курсы</a>
                </li>
                @else

                <li class="nav-item">
                    <a class="nav-link"
                        href="#">Мои заявки</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"
                        href="#">Сформировать заявку</a>
                </li>
                @endif


            </ul>
            <button
                class="btn btn-dark"
                data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                <i class="bi bi-box-arrow-in-right"></i> Выход
            </button>
        </div>
    </div>
</nav>

<!-- Модальное окно выхода -->
<div
    class="modal fade"
    id="exampleModal"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">
                    Выйти из аккаунта?
                </h1>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Закрыть"></button>
            </div>
            <div class="modal-footer">
                <a href="{{ route('logout') }}" type="button" class="btn btn-danger btn-lg w-100">
                    Выйти
                </a>
                <button
                    type="button"
                    class="btn btn-secondary btn-lg w-100"
                    data-bs-dismiss="modal">
                    Отмена
                </button>
            </div>
        </div>
    </div>
</div>