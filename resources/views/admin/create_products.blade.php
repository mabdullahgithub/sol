@include('admin.layout.admin_navbar')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Create Products</h6>
                    </div>
                </div>
                
            <style>
                .form-control {
    background-color: lightgray;
}

.form-control:focus {
    background-color: lightgray;
    /* You can add other styles as needed */
}
#cat {
    width: 15%; /* Make the select box full width */
    padding: 10px; /* Add some padding for better spacing */
    border: 1px solid #ccc; /* Add a border for visual separation */
    background-color: lightgray; /* Set the background color to light gray */
    color: #333; /* Set the text color */
    border-radius: 5px; /* Add rounded corners */
}

#cat option {
    background-color: white; /* Set the background color of options to white */
    color: #333; /* Set the text color of options */
}

#cat:focus {
    outline: none; /* Remove the default focus outline */
    box-shadow: 0 0 5px rgba(81, 203, 238, 1); /* Add a subtle box-shadow when focused */
}

                </style>
                <div class="card-body px-4 pb-4">
                    <form action="{{ route('admin.store_product') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="title" class="form-label text-uppercase text-secondary text-lg font-weight-bold opacity-7">Title</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>

                <div class="mb-3">
                        <label for="category" class="form-label text-uppercase text-secondary text-lg font-weight-bold opacity-7">Category</label>
                        
                    <div>

                        <select class="col-2" id="cat" name="category" required>
                            <option value="Solar Pannel">Solar Pannel</option>
                            <option value="Battery">Battery</option>
                            <option value="Inverter">Inverter</option>
                            
                        </select>
                    </div>
                </div>
                        <div class="mb-3">
                            <label for="description" class="form-label text-uppercase text-secondary text-lg font-weight-bold opacity-7">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label text-uppercase text-secondary text-lg font-weight-bold opacity-7">Price</label>
                            <input type="number" class="form-control" id="price" name="price" required>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label text-uppercase text-secondary text-lg font-weight-bold opacity-7">Image</label>
                            <div class="col-2">
                                <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Create Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
