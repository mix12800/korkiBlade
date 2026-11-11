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
                data-bs-target="#AddModal">
                Изменить <i class="bi bi-pencil"></i>
            </button>
            <button
                type="button"
                class="btn btn-danger"
                data-bs-toggle="modal"
                data-bs-target="#DelModal">
                Удалить <i class="bi bi-trash"></i>
            </button>
        </div>
    </td>
</tr>

<!-- Модальное окно Удалить курс -->
<div
    class="modal fade"
    id="DelModal"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">
                    Удалить курс?
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