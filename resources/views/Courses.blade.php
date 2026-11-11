<!DOCTYPE html>
<html lang="en">
<x-head />

<body>
    <x-header />

    <div class="p-3">
        <button
            class="btn btn-dark"
            data-bs-toggle="modal"
            data-bs-target="#AddModal">
            Добавить курс
        </button>
    </div>

    <div class="p-5">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Назвение</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th scope="col">Действие</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $key => $course)
                <x-courses-page :course="$course" :key="$key" />
                @endforeach

            </tbody>
        </table>
    </div>

    

    <!-- Модальное окно Добавить курс -->
    <div
        class="modal fade"
        id="AddModal"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        Добавить курс
                    </h1>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Закрыть"></button>
                </div>
                <form action="{{ route('coursesAdd') }}" method="post">
                    <div class="modal-body">
                        <input type="text" class="form-control @error('name') is-invalid  @enderror" name="name" value="{{ old('value') }}" placeholder="Назвение" />
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

    <x-script />
</body>

</html>