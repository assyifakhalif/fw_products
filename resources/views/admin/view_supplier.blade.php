  @extends('admin.index')

  @section('content')

  <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h1 class="card-title">TABLE SUPPLIER</h1>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            NAME
                          </th>
                          <th>
                            NAME COMPANY
                          </th>
                          <th>
                            ADDRESS
                          </th>
                          <th>
                            CONTACT
                          </th>
                          <th>
                            TELP
                          </th>
                          <th>
                            INFORMATION
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($data_supplier as $key)
                        <tr>
                            <td>
                                {{ $key-> supplier_id }}
                              </td>
                          <td>
                            {{ $key-> name }}
                          </td>
                          <td>
                            {{ $key-> name_company }}
                          </td>
                          <td>
                            {{ $key-> address }}
                          </td>
                          <td>
                            {{ $key-> contact }}
                          </td>
                          <td>
                            {{ $key-> telp }}
                          </td>
                          <td>
                            {{ $key-> information }}
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
@endsection