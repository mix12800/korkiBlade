<tr>
    <th>
        {{ $key + 1  }}
    </th>
    <td>
        {{ $course->name }}

    </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>
        <div class="btn-group" role="group">
            <button
                type="button"
                class="btn btn-dark"
                data-bs-toggle="modal"
                data-bs-target="#EditModal{{ $course->id }}">
                Изменить <i class="bi bi-pencil"></i>
            </button>
            <button
                type="button"
                class="btn btn-danger"
                data-bs-toggle="modal"
                data-bs-target="#DelModal{{ $course->id }}">
                Удалить <i class="bi bi-trash"></i>
            </button>
        </div>
    </td>
</tr>

<!-- Модальное окно Удалить курс -->
<div
    class="modal fade"
    id="DelModal{{ $course->id }}"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">
                    Удалить курс: {{ $course->name }}?
                </h1>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Закрыть"></button>
            </div>
            <div class="modal-footer">
                <a href="{{ route('courseDel', $course->id) }}" type="button" class="btn btn-danger btn-lg w-100">
                    Удалить
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

<!-- Модальное окно Изменить курс -->
<div
    class="modal fade"
    id="EditModal{{ $course->id }}"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">
                    Педактирование курса: {{ $course->name }}
                </h1>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Закрыть"></button>
            </div>
            <form action="{{ route('courseEdit', $course->id) }}" method="post">
                <div class="modal-body">
                    <input type="text" class="form-control @error('name') is-invalid  @enderror" name="name" value="{{ $course->name }}" placeholder="Назвение" />
                    @error('name')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-dark w-100">Сохранить</button>
                </div>
            </form>
        </div>
    </div>
</div>