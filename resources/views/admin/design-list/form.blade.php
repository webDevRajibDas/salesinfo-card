
<h4>{{ isset($designList) ? 'Edit' : 'Add New' }}</h4>
<form class="ecommerce-form action-buttons-fixed" action="{{ isset($designList) ? route('admin.design-list.update', $designList->id) : route('admin.design-list.store') }}" method="post" enctype="multipart/form-data">>
    @csrf
    @if (isset($designList))
        @method('PUT')
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row">
        <div class="col">
            <section class="card card-modern card-big-info mt-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-2-5 col-xl-1-5">
                            <i class="card-big-info-icon bx bx-slider"></i>
                            <h2 class="card-big-info-title"> Details</h2>
                            <p class="card-big-info-desc">Add here the category description with all details and necessary information.</p>
                        </div>
                        <div class="col-lg-3-5 col-xl-4-5">
                            <div class="form-group row align-items-center mb-3">
                                <label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Title</label>
                                <div class="col-lg-7 col-xl-6">
                                    <textarea class="form-control" name="title" id="titleTextarea1" rows="3"></textarea>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label for="formFileLg" class="form-label col-lg-5 col-xl-3 control-label text-lg-end mb-0"> Product image</label>
                                <div class="col-lg-7 col-xl-6">
                                    <input class="form-control form-control-lg" id="formFileLg" type="file" name="image" required>
                                    <small class="form-text text-muted">Only JPEG, PNG, JPG, or GIF files allowed, max size 4MB.</small>
                                </div>
                            </div>

                            <div class="form-group row align-items-center pb-3">
                                <label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Design No</label>
                                <div class="col-lg-7 col-xl-6">
                                    <input type="number" class="form-control form-control-modern @error('design_no') is-invalid @enderror" name="design_no" value="{{ old('design_no', $designList->design_no ?? '') }}" required>
                                </div>
                            </div>

                            <!-- Status -->
                            <div class="form-group row">
                                <label class="col-lg-5 col-xl-3 control-label text-lg-end pt-2 mt-1 mb-0">Status</label>
                                <div class="col-lg-7 col-xl-6">
                                    <select class="form-control" id="status" name="status" required>
                                        <option value="1" {{ (isset($designList) && $designList->status == 1) ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ (isset($designList) && $designList->status == 0) ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="row action-buttons">
        <div class="col-12 col-md-auto">
            <button type="submit" class="submit-button btn btn-primary btn-px-4 py-3 d-flex align-items-center font-weight-semibold line-height-1" data-loading-text="Loading...">
                <i class="bx bx-save text-4 me-2"></i>
                @if (isset($designList))
                    Update
                @else
                    Save
                @endif
            </button>
        </div>

        <div class="col-12 col-md-auto px-md-0 mt-3 mt-md-0">
            <a href="{{route('admin.design-list.index')}}" class="cancel-button btn btn-light btn-px-4 py-3 border font-weight-semibold text-color-dark text-3">Cancel</a>
        </div>
        <div class="col-12 col-md-auto ms-md-auto mt-3 mt-md-0 ms-auto">
            <a href="#" class="delete-button btn btn-danger btn-px-4 py-3 d-flex align-items-center font-weight-semibold line-height-1">
                <i class="bx bx-trash text-4 me-2"></i> Delete
            </a>
        </div>
    </div>
</form>