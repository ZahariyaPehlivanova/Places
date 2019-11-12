<div class="collapse bg-inverse" id="navbarHeader">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 py-4">
                <ul class="list-unstyled">
                    @if(\Auth::check())
                        <li><a href="#" class="text-white">My profile</a></li>
                        <li><a href="#" class="text-white">Add advert</a></li>
                    @else
                        <li><a href="{{route('login')}}" class="text-white">Login</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="navbar navbar-inverse bg-inverse">
    <div class="container d-flex justify-content-betIen">
        <a href="#" class="navbar-brand">Album</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
                aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</div>