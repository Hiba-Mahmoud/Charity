@extends('../layouts/dashboard')
@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Medical Services/</span> Create</h4>
        <div class="row">
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Create New Medical Service</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('medical.store')}}" method="post">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="name">Title <span class="required-star">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="main-image">Main Image</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="main-image" name="mainImages" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="otherImages">Other Images</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="otherImages" name="otherImages" multiple />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="description">Description <span class="required-star">*</span></label>
                                <div class="col-sm-10">
                                    <textarea id="description" class="form-control trumbowyg-box" name="description"></textarea>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection