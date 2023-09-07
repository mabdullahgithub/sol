@include('admin.layout.admin_navbar')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">User's table</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-lg font-weight-bold opacity-7">ID</th>
                          <th class="text-uppercase text-secondary text-lg font-weight-bold opacity-7">Image</th>
                          
                          <th class="text-center text-uppercase text-secondary text-lg font-weight-bold opacity-7">Title</th>
                          <th class="text-center text-uppercase text-secondary text-lg font-weight-bold opacity-7">Description</th>
                          <th class="text-center text-uppercase text-secondary text-lg font-weight-bold opacity-7">Price</th>
                          <th class="text-center text-uppercase text-secondary text-lg font-weight-bold opacity-7">Category</th>
                          <th class="text-center text-uppercase text-secondary text-lg font-weight-bold opacity-7">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td style="max-width: 5%">
                              <img src="{{ asset('storage/' . $product->image) }}" style="max-width: 50px;" />
                          </td>                            
                            <td class="text-center" style="white-space: normal;">{{ $product->title }}</td>
                            <td class="text-center" style="white-space: normal;">{{ $product->description }}</td>
                            <td class="text-center">{{ $product->price }}</td>
                            <td class="text-center">{{ $product->category }}</td>
                            <td class="text-center">Pending</td>

                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
        </div>
      </div>
    </div>

  </div>
  