@extends('backend.pages.setting.pages.page_layout')
@section('page_content')
    <div class="card">
        <div class="card-header">
            <h4 class="m-0">Get In Touch Info</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.setting.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for=""> Office Address <span class="fw-bolder text-danger">*</span></label>
                    <input type="hidden" name="types[]" value="get_office_address">
                    <input type="text" name="get_office_address" value="{{ setting('get_office_address')  }}" class="form-control" id="" placeholder="Office Address" required>
                </div>
                <div class="mb-3">
                    <label for="">Telephone Number<span class="fw-bolder text-danger">*</span></label>
                    <input type="hidden" name="types[]" value="get_telephone_number">
                    <input type="text" name="get_telephone_number" value="{{ setting('get_telephone_number')  }}" class="form-control" id="" placeholder="Telephone Number" required>
                </div>
                <div class="mb-3">
                    <label for=""> Mail Address <span class="fw-bolder text-danger">*</span></label>
                    <input type="hidden" name="types[]" value="get_mail_address">
                    <input type="text" name="get_mail_address" value="{{ setting('get_mail_address')  }}" class="form-control" id="" placeholder="Mail Address" required>
                </div>

                <div class="mb-3">
                    <label for=""> Google Map <span class="fw-bolder text-danger">*</span></label>
                    <input type="hidden" name="types[]" value="google_map">
                    <input type="text" name="google_map" value="{{ setting('google_map')  }}" class="form-control" id="" placeholder="Google Map" required>
                </div>
                <div class="my-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    </div>
@endsection
