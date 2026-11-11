<form action="{{ route('auth') }}" method="post" class="form">
    <div class="mb-3 form-title">
        <h2>Авторизация</h2>
    </div>

    <div class="form-floating mb-3">
        <input
            type="text"
            class="form-control focus-ring focus-ring-dark border @error('login') is-invalid  @enderror"
            name="login"
            id="login"
            value="{{ old('login') }}"
            placeholder="login" />
        <label for="login">Логин</label>
        @error('login')
        <p class="invalid-feedback">
            {{ $message }}
        </p>
        @enderror
    </div>
    <div class="form-floating mb-3">
        <input
            type="password"
            class="form-control focus-ring focus-ring-dark border @error('login') is-invalid  @enderror"
            name="password"
            id="password"
            value="{{ old('password') }}"
            placeholder="password" />
        <label for="password">Пароль</label>
        @error('password')
        <p class="invalid-feedback">
            {{ $message }}
        </p>
        @enderror
    </div>

    <button class="btn btn-dark btn-lg w-100 mb-3">Войти</button>

    <div class="link-form mb-1">
        Ещё не зарегистрированы? <a href="{{ route('regPage') }}">Регистрация</a>
    </div>
</form>