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
                          <th class="text-uppercase text-secondary text-lg font-weight-bold opacity-7">Name</th>
                          
                          <th class="text-center text-uppercase text-secondary text-lg font-weight-bold opacity-7">Email</th>
                          <th class="text-center text-uppercase text-secondary text-lg font-weight-bold opacity-7">Role</th>
                          <th class="text-center text-uppercase text-secondary text-lg font-weight-bold opacity-7">Actions</th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            
                            <td class="text-center">{{ $user->email }}</td>
                            <td class="text-center">User</td>
                            <td class="text-center">
                                
                                </a>
                                 
                                </form>
                            </td>
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
  