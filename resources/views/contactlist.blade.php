<div class = "container">
    <div class = "row">
        <div class = "col-md-6 offset-md-3">
            <div class ="card">
                <div class = "card-header">
                    <p>@lang('main.contact_department')</p>
                </div>
                <div class ="card-body">
                    @if (Session::has('message sent'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('message sent') }}
                        </div>
                    @endif
                    <form method="post" action="{{ route('contact.send') }}" enctype="multipart/form-data">
                    @csrf
                        <div class ="form-group">
                            <label for = "name">@lang('main.first_name')</label>
                            <input type="text" name="name" class ="form-control" required />
                        </div>
                        <div class ="form-group">
                            <label for = "email">@lang('main.email')</label>
                            <input type="email" name="email" class ="form-control" required />
                        </div>
                        <div class ="form-group">
                            <label for = "phone">@lang('main.phone')</label>
                            <input type="text" name="phone" class ="form-control" required />
                        </div>
                        <div class ="form-group">
                            <label for = "msg">@lang('main.message')</label>
                            <textarea name="msg" class="form-control"></textarea>
                        </div>
                        <div class ="form-group">
                            <label for = "msg">@lang('main.upload_file')</label>
                            <input type="file" name="image"  required />
                        </div>
                        <input type="submit" class ="btn btn-primary float-right" value="Submit"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

