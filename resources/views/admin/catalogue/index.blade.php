@extends('layouts_admin.master')

@section('content_admin')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Catalogue Product</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Catalogue</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-outline-primary" data-type="create" onclick="ShowCRUDmodal(this)"><i class="fa fa-plus"></i>Add Catalogue</button>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Picture</th>
                                <th>Name</th>
                                <th>Capacity</th>
                                <th>MOQ</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="catalogue-list">
                            @foreach($catalogues as $catalogue)
                            <tr id="row-{{ $catalogue->id }}">
                                <td>{{$loop->index + 1}}</td>
                                <td>
                                    @if(count($catalogue->catalogue_images) > 0)
                                        <img src="{{ asset('catalogue_images/'.$catalogue->catalogue_images[0]['image']) }}" alt="" height="60px" width="60px">
                                    @endif
                                </td>
                                <td>{{$catalogue->name}}</td>
                                <td>{{$catalogue->quality}}</td>
                                <td>{{$catalogue->moq}}</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-warning mr-2" data-type="edit" data-id="{{$catalogue->id}}" onclick="ShowCRUDmodal(this)"><i class="fa fa-edit"></i> Edit</button>
                                    <button type="button" class="btn btn-sm btn-outline-danger" data-type="delete" data-id="{{$catalogue->id}}" onclick="ShowDeleteModal(this)"><i class="fa fa-trash" ></i> Delete</button>
                                </td>
                            </tr>
                            @endforeach
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>

<!-- Form Modal -->
<div class="modal fade" id="modal-xl">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="crud-header"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="quickForm" autocomplete="off">
                    @csrf
                    <input type="hidden" name="type" id="type">
                    <input type="hidden" name="id" id="cid">
                    
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Product Name</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Product name" autocomplete="off" required>
                                </div>
                                <div class="form-group">
                                    <label for="name">Quality</label>
                                    <input type="text" name="quality" class="form-control" id="quality" placeholder="Standart" autocomplete="off" required>
                                </div>
                                <div class="form-group">
                                    <label for="name">Standart</label>
                                    <input type="text" name="standart" class="form-control" id="standart" placeholder="Standart" autocomplete="off" required>
                                </div>
                                <div class="form-group">
                                    <label for="name">Calorie Value</label>
                                    <input type="text" name="calorie" class="form-control" id="calorie" placeholder="Calorie Value" autocomplete="off" required>
                                </div>
                                <div class="form-group">
                                    <label for="name">Total Mousture</label>
                                    <input type="text" name="mousture" class="form-control" id="mousture" placeholder="Total Mousture " autocomplete="off" required>
                                </div>
                                <div class="form-group">
                                    <label for="name">Ash Content</label>
                                    <input type="text" name="ash" class="form-control" id="ash" placeholder="Ash Content" autocomplete="off" required>
                                </div>
                                <div class="form-group">
                                    <label for="name">Fixed Carbon</label>
                                    <input type="text" name="carbon" class="form-control" id="carbon" placeholder="Fixed Carbon" autocomplete="off" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Burning Time</label>
                                    <input type="text" name="burning" class="form-control" id="burning" placeholder="Burning Time" autocomplete="off" required>
                                </div>
                                <div class="form-group">
                                    <label for="name">Ash Type</label>
                                    <input type="text" name="ashtype" class="form-control" id="ashtype" placeholder="Ash Type" autocomplete="off" required>
                                </div>
                                <div class="form-group">
                                    <label for="name">Size</label>
                                    <input type="text" name="size" class="form-control" id="size" placeholder="Size" autocomplete="off" required>
                                </div>
                                <div class="form-group">
                                    <label for="name">Certificate</label>
                                    <input type="text" name="certificate" class="form-control" id="certificate" placeholder="Certificate" autocomplete="off" required>
                                </div>
                                <div class="form-group">
                                    <label for="name">Packaging</label>
                                    <input type="text" name="packaging" class="form-control" id="packaging" placeholder="Packaging" autocomplete="off" required>
                                </div>
                                <div class="form-group">
                                    <label for="moq">Minimum Order Quantity Produk</label>
                                    <input type="number" name="moq" class="form-control" id="moq" min="1" placeholder="Minimum Order Quantity" required>
                                </div>
        
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">Deskripsi Produk</label>
                            <textarea name="description" id="description" class="form-control" cols="30" rows="10" placeholder="Describe your product like product overview, advantages, specification etc" required></textarea>
                        </div>
                        <div class="form-group">
                            <div class="row mb-5" id="uploaded-image">

                            </div>

                            <label for="image">Upload New Product Picture</label>
                            <div id="actions" class="row">
                                <div class="col-lg-12">
                                    <div class="btn-group w-100">
                                        <span class="btn btn-success col fileinput-button">
                                            <i class="fas fa-plus"></i>
                                            <span>Add Pictures</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
    
                            <div class="table table-striped files" id="previews">
                                <div id="template" class="row mt-2">
                                    <div class="col-auto">
                                        <span class="preview"><img src="data:," alt="" data-dz-thumbnail /></span>
                                    </div>
                                    <div class="col d-flex align-items-center">
                                        <p class="mb-0">
                                            <span class="lead" data-dz-name></span>
                                            (<span data-dz-size></span>)
                                        </p>
                                        <strong class="error text-danger" data-dz-errormessage></strong>
                                    </div>
                                    <div class="col-auto d-flex align-items-center">
                                        <div class="btn-group">
                                            <button data-dz-remove class="btn btn-danger delete">
                                                <i class="fas fa-trash"></i>
                                                <span>Delete</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="upload-image-btn">Upload Picture</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- End of form modal -->

<!-- Delete modal -->
<div class="modal" tabindex="-1" role="dialog" id="delete-modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete Catalogue</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="delete-catalogue">
          @csrf
          <input type="hidden" name="id" id="delete-target">
          <div class="modal-body">
              <center>
                  <h1>
                    Are you sure?
                  </h1>
                  <h4>
                      Any deleted data cannot be undone!
                  </h4>
              </center>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" data-delete-id="">Yes</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          </div>
      </form>
    </div>
  </div>
</div>
<!-- END of delete modal -->

<!-- Loading Modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="loading-modal">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <center>
            <h1 id="heading"></h1>
            <h5 id="body"></h5>
        </center>
      </div>
    </div>
  </div>
</div>
<!-- END of loading modal -->
@endsection
@push('scripts')
@include('admin.catalogue.javascript')
@endpush