<div class="p-5">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Курс</th>
                <th scope="col">Дата обучения</th>
                <th scope="col">Способ оплаты</th>
                <th scope="col">Статус</th>
                <th scope="col">Отзыв</th>
                <th scope="col">Действие</th>
            </tr>
        </thead>

        <tbody>



            @foreach ($myOrders as $key => $myOrder)
            <tr>
                <th>{{ $key + 1  }}</th>
                <td>{{ $myOrder->course->name }}</td>
                <td>
                    {{ date('d.m.Y', strtotime($myOrder->date))  }}
                </td>
                <td>
                    @if ($myOrder->pay == 'cash')
                    Наличные
                    @else
                    Переводом по номеру телефона
                    @endif

                </td>
                <td>
                    @if ($myOrder->status == 'new')
                    <span
                        class="badge text-bg-primary">Новая</span>
                    @elseif($myOrder->status == 'active')
                    <span
                        class="badge text-bg-success">Идет обучение</span>
                    @else
                    <span
                        class="badge text-bg-secondary">Обучение завершено</span>
                    @endif
                </td>
                <td>
                    @if ($myOrder->comment)
                    <button
                        class="btn btn-dark"
                        disabled>
                        Отправлен
                    </button>
                    @else
                    <button
                        class="btn btn-dark"
                        data-bs-toggle="modal"
                        @if ($myOrder->status != 'completed')
                        disabled
                        @endif
                        data-bs-target="#exampleModalComent{{ $myOrder->id }}">
                        Написать отзыв
                    </button>
                    @endif


                </td>
                <td>
                    <button
                        class="btn btn-danger"
                        data-bs-toggle="modal"
                        @if ($myOrder->status != 'new')
                        disabled
                        @endif
                        data-bs-target="#exampleModalDelOrder{{ $myOrder->id }}">
                        <i class="bi bi-x-octagon"></i> Отменить заявку
                    </button>
                </td>
            </tr>

            <!-- Модальное окно Отмена -->
            <div
                class="modal fade"
                id="exampleModalDelOrder{{ $myOrder->id }}"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1
                                v-if="order.course"
                                class="modal-title fs-5"
                                id="exampleModalLabel">
                                Отменить заявку на курс: {{ $myOrder->course->name }} ?
                            </h1>
                            <button
                                type="button"
                                class="btn-close"
                                id="closeDelOrede"
                                data-bs-dismiss="modal"
                                aria-label="Закрыть"></button>
                        </div>
                        <div class="modal-body">
                            <label for="exampleFormControlTextarea1" class="form-label">Вы можете отменить заявку на курс, пока её не принял
                                администратор.</label>
                        </div>
                        <div class="modal-footer">
                            <a
                                href="{{ route('OrderDel', $myOrder->id) }}"
                                type="button"
                                class="btn btn-danger btn-lg w-100">
                                Да отменить
                            </a>
                            <button
                                type="button"
                                data-bs-dismiss="modal"
                                class="btn btn-dark btn-lg w-100">
                                Закрыть окно
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Модальное окно отзыв -->
            <div
                class="modal fade"
                id="exampleModalComent{{ $myOrder->id }}"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1
                                class="modal-title fs-5"
                                id="exampleModalLabel">
                                Оставьте отзыв о курсе: {{ $myOrder->course->name }}
                            </h1>
                            <button
                                type="button"
                                class="btn-close"
                                id="closeCommebtAdd"
                                data-bs-dismiss="modal"
                                aria-label="Закрыть"></button>
                        </div>
                        <form action="{{ route('OrderСomment', $myOrder->id) }}" method="post">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label
                                        for="exampleFormControlTextarea1"
                                        class="form-label">Текст отзыва</label>
                                    <textarea
                                        class="form-control focus-ring focus-ring-dark border @error('comment') is-invalid  @enderror"
                                        id="exampleFormControlTextarea1"
                                        name="comment"
                                        placeholder="Отзыв..."
                                        rows="3"></textarea>
                                    @error('comment')
                                    <p class="invalid-feedback">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button
                                    type="submit"
                                    class="btn btn-dark btn-lg w-100">
                                    Отправить
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach

        </tbody>
    </table>
</div>

<!-- <div class="btn-group btn-group-lg w-50 p-5 pt-0">
    <button
        type="button"
        class="btn btn-dark">
        <i class="bi bi-chevron-double-left"></i>
    </button>
    <button
        type="button"
        class="btn btn-dark">
        <i class="bi bi-chevron-double-right"></i>
    </button>
</div> -->