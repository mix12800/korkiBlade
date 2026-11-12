  <div class="p-5">
      <table class="table table-hover">
          <thead>
              <tr>
                  <th scope="col">#</th>
                  <th scope="col">Курс</th>
                  <th scope="col">Ученик</th>
                  <th scope="col">Дата обучения</th>
                  <th scope="col">Способ оплаты</th>
                  <th scope="col">Статус</th>
                  <th scope="col">Отзыв</th>
                  <th scope="col">Действие</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($orders as $key => $order )
              <tr>
                  <th>
                      {{ $key + 1 }}
                  </th>
                  <td>
                      {{ $order->course->name }}
                  </td>
                  <td>
                      {{ $order->user->fio }}
                  </td>
                  <td>
                      {{ date('d.m.Y', strtotime($order->date)) }}
                  </td>
                  <td>
                      @if ($order->pay == 'cash')
                      Наличные
                      @else
                      Переводом по номеру телефона
                      @endif
                  </td>
                  <form action="{{ route('OrderEdit', $order->id) }}" method="post">
                      <td>
                          <select class="form-select mb-3" name="status">
                              <option value="new" @if ($order->status == 'new') selected @endif>Новая</option>
                              <option value="active" @if ($order->status == 'active') selected @endif>Идет обучение</option>
                              <option value="completed" @if ($order->status == 'completed') selected @endif>Обучение завершено</option>
                          </select>
                      </td>
                      <td>
                          <button
                              type="button"
                              @if (!$order->comment)
                              disabled
                              @endif
                              class="btn btn-dark"
                              data-bs-toggle="modal"
                              data-bs-target="#exampleModalComent{{ $order->id }}">
                              Прочитать отзыв
                          </button>
                      </td>
                      <td>
                          <button
                              type="submit"
                              class="btn btn-dark">
                              Сохранить
                          </button>
                      </td>
                  </form>
              </tr>

              <!-- Модальное окно отзыв -->
              <div
                  class="modal fade"
                  id="exampleModalComent{{ $order->id }}"
                  tabindex="-1"
                  aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">
                                  Отзыв от: {{ $order->user->fio }}
                              </h1>
                              <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Закрыть"></button>
                          </div>
                          <div class="modal-body"> {{ $order->comment }} </div>
                      </div>
                  </div>
              </div>
              @endforeach

          </tbody>
      </table>

      <!-- <div class="btn-group btn-group-lg w-50">
          <button
              type="button"
              class="btn btn-dark"
              disabled>
              <i class="bi bi-chevron-double-left"></i>
          </button>
          <button
              type="button"
              class="btn btn-dark"
              disabled>
              <i class="bi bi-chevron-double-right"></i>
          </button>
      </div> -->
  </div>