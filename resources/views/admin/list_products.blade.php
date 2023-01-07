  @extends('admin.index')

  @section('content')

  <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h1 class="card-title">TABLE PRODUCTS</h1>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            ID PRODUCTS
                          </th>
                          <th>
                            NAME PRODUCTS
                          </th>
                          <th>
                            BRAND
                          </th>
                          <th>
                            BUY_PRICE
                          </th>
                          <th>
                            SALE_PRICE
                          </th>
                          <th>
                            COMMENT
                          </th>
                          <th>
                            ACTION
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($data_product as $key)
                        <tr>
                            <td>
                                {{ $key-> products_id }}
                              </td>
                          <td>
                            {{ $key-> name }}
                          </td>
                          <td>
                            {{ $key-> brand }}
                          </td>
                          <td>
                            {{ $key-> buy_price }}
                          </td>
                          <td>
                            {{ $key-> sale_price }}
                          </td>
                          <td>
                            {{ $key-> comment }}
                          </td>
                          <td><button type="button" onclick="window.location.href='{{ url('products/delete/'.$key->products_id) }}';" class="btn btn-danger">Hapus</button><br>
                            <button type="button" onclick="window.location.href='{{ url('products/edit/'.$key->products_id) }}';" class="btn btn-warning">Edit</button></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
@endsection