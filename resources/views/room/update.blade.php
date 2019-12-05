<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.partials.head')
</head>
<body>
@include('layout.partials.nav')

<div class="py-5 bg-light">

    <div class="container">
        <form action="{{route('room.update')}}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <label>Title</label>
                <input name="title" type="text" class="form-control" placeholder="Title">
            </div>

            <div class="form-group">
                <label>Type</label>
                <select class="form-control" name="type">
                    <option value="hall">Hall</option>
                    <option value="store">Store</option>
                </select>
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>

@yield('content')
@include('layout.partials.footer')
@include('layout.partials.footer-scripts')
</body>
</html>