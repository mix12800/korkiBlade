<!DOCTYPE html>
<html lang="en">
<x-head />

<body>
    <x-header />

    <form action="{{ route('OrderAdd') }}" method="post" class="form">
        <div class="mb-3 form-title">
            <h2>Формирование заявки</h2>
        </div>
        <div class="form-floating mb-3">
            <input
                type="date"
                class="form-control focus-ring focus-ring-dark border @error('date') is-invalid  @enderror"
                id="date"
                name="date"
                value="{{ old('date') }}"
                placeholder="date" />
            <label for="date">Желаемая дата начала обучения</label>
            @error('date')
            <p class="invalid-feedback">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="mb-3">
            <select
                name="course_id"
                class="form-select form-select-lg @error('course_id') is-invalid  @enderror"
                aria-label=".form-select-lg пример">
                <option>Наименование курса</option>
                @foreach ($courses as $course)
                <option value="{{ $course->id }}">
                    {{ $course->name }}
                </option>
                @endforeach
            </select>
            @error('course_id')
            <p class="invalid-feedback">
                {{ $message }}
            </p>
            @enderror
        </div>

        <div class="mb-3">
            <p>Удобный способ оплаты</p>
            <input
                type="radio"
                class="btn-check"
                name="pay"
                id="success-outlined"
                value="cash"
                checked
                autocomplete="off" />
            <label class="btn btn-outline-dark m-1" for="success-outlined">наличными</label>
            <input
                type="radio"
                class="btn-check"
                name="pay"
                id="danger-outlined"
                value="translation"
                autocomplete="off" />
            <label class="btn btn-outline-dark m-1" for="danger-outlined">переводом по номеру телефона</label>
        </div>
        <button
            type="submit"
            class="btn btn-dark btn-lg w-100">
            Отправить
        </button>

    </form>

    <x-script />

</body>

</html>