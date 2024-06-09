@extends("layouts.admin")

@section("title", "Users")

@section("page_title", "User Details")

@section("content")
    <div class="row gutters">
        <div class="col-12">
            <div class="card">
                <div class="card-body"> <!-- Center align content -->

                    <div class="form-group">
                        <label for="name">{{__('Name')}}</label>
                        <input type="text" class="form-control" id="name" value="{{ $user->name }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="email">{{__('Email')}}</label>
                        <input type="email" class="form-control" id="email" value="{{ $user->email }}" readonly>
                    </div>


                    <div class="form-group">
                        <label for="phone_number">{{__('Phone')}}</label>
                        <input type="text" class="form-control" id="phone_number" value="{{ $user->phone }}" readonly>
                    </div>


                    <div class="form-group">
                        <label for="role">{{__('Role')}}</label>
                        <input type="text" class="form-control" id="role" value="{{ $user->role }}" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
