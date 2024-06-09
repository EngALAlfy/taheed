@extends("layouts.admin")

@section("title", "Profile")

@section("page_title", "Profile")

@section("page_subtitle", "User Profile data")

@push("page_actions")
    @if(auth()->user()->role == "admin")
        <a href="{{route("admin.profile.edit")}}" class="btn btn-warning float-right" data-toggle="tooltip"
           data-placement="left" title="Edit profile">
            <i class="icon-edit"></i>
        </a>
    @endif
@endpush

@section("content")
    <div class="row gutters">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4 text-center">
                        <h3 class="my-2">{{ $user->name }}</h3>
                        <p class="text-muted mb-4">{{ $user->email }}</p>
                    </div>
                    <div class="form-group">
                        <label for="role">{{__('Role')}}</label>
                        <input type="text" class="form-control" id="role" value="{{ $user->role }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="phone">{{__('Phone')}}</label>
                        <input type="text" class="form-control" id="phone" value="{{ $user->phone }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="created_at">Joined On</label>
                        <input type="text" class="form-control" id="created_at" value="{{ $user->created_at->format('F j, Y') }}" readonly>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
