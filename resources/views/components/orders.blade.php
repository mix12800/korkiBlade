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

          </tbody>
      </table>
      <div class="btn-group btn-group-lg w-50">
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
      </div>
  </div>

  <!-- Модальное окно отзыв -->
  <div
      class="modal fade"
      id="exampleModalComent"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">
                      Отзыв от:
                  </h1>
                  <button
                      type="button"
                      class="btn-close"
                      data-bs-dismiss="modal"
                      aria-label="Закрыть"></button>
              </div>
              <div class="modal-body"> order.comment </div>
          </div>
      </div>
  </div>