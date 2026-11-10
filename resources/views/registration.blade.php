<!DOCTYPE html>
<html lang="en">

<x-head />

<body>
    <form action="{{ route("reg") }}" method="post" class="form">
        <div class="mb-3 form-title">
            <h2>Регистрация</h2>
        </div>

        <div class="form-floating mb-3">
            <input
                type="text"
                class="form-control focus-ring focus-ring-dark  @error('fio') is-invalid @enderror"
                id="fio"
                name="fio"
                value="{{ old('fio') }}"
                placeholder="fio" />
            <label for="fio">ФИО</label>

            @error('fio')
            <p class="invalid-feedback">
                {{ $message  }}
            </p>
            @else
            <div class="form-text">Символы кириллицы и пробелы</div>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input
                type="tel"
                class="form-control focus-ring focus-ring-dark @error('phone') is-invalid @enderror"
                name="phone"
                value="{{ old('phone') }}"
                id="phone"
                placeholder="phone" />
            <label for="phone">Телефон</label>
            @error("phone")
            <p class="invalid-feedback">
                {{ $message  }}
            </p>
            @else
            <div class="form-text">Формат: 8(XXX)XXX-XX-XX</div>
            @enderror

        </div>

        <div class="form-floating mb-3">
            <input
                type="text"
                class="form-control @error('email') is-invalid @enderror"
                id="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="email" />
            <label for="email">Адрес электронной почты</label>
            @error("email")
            <p class="invalid-feedback">
                {{ $message  }}
            </p>
            @enderror

        </div>

        <div class="form-floating mb-3">
            <input
                type="text"
                class="form-control focus-ring focus-ring-dark @error('login') is-invalid  @enderror"
                id="login"
                name="login"
                value="{{ old('login') }}"
                placeholder="login" />
            <label for="login">Логин</label>
            @error("login")
            <p class="invalid-feedback">
                {{ $message  }}
            </p>
            @else
            <div class="form-text">Латиница и цифры, не менее 6 символов</div>
            @enderror
            
        </div>

        <div class="form-floating mb-3">
            <input
                type="password"
                class="form-control focus-ring focus-ring-dark border @error('password') is-invalid @enderror"
                id="password"
                name="password"
                placeholder="password" />
            <label for="password">Пароль</label>
            @error('password')
             <p class="invalid-feedback">
                {{ $message  }}
            </p>
            @else
            <div class="form-text">Минимум 8 символов</div>
            @enderror
        </div>

        <button class="btn btn-dark btn-lg w-100 mb-3">
            Создать пользователя
        </button>

        <div class="link-form mb-1">
            Уже зарегистрированы? <a href="{{ route('index') }}">Авторизация</a>
        </div>
    </form>

    <x-script />
</body>

</html>