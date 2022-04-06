<div class="card">
    <div class="card-body box-profile">
        <div class="text-center">
            <img class="profile-user-img img-fluid img-circle"
                 src="{{ url('/img/logo-admin.png') }}"
                 alt="User profile picture">
        </div>

        <h3 class="profile-username text-center">{{ auth::user()->name }}</h3>

        <p class="text-muted text-center">{{ auth::user()->email }}</p>

        <ul class="list-group list-group-unbordered mb-3">
            <li class="list-group-item">
                <b>Administrator</b> <a class="float-right">Thaigunners</a>
            </li>
            <li class="list-group-item">
                <b>Create At</b> <a class="float-right">{{ auth::user()->created_at }}</a>
            </li>
            <li class="list-group-item">
                <b>Update At</b> <a class="float-right">{{ auth::user()->updated_at }}</a>
            </li>
            <li class="list-group-item">
                <b><i class="fas fa-envelope mr-1 text-danger"></i> Email</b><a class="float-right">TG.Thaigunners@gmail.com</a>
            </li>
            <li class="list-group-item">
                <b><i class="fas fa-phone-alt mr-1 text-primary"></i> Telephone</b><a class="float-right links">02-2222222</a>
            </li>
            <li class="list-group-item">
                <b><i class="fab fa-line mr-1 text-success"></i> Line</b><a class="float-right">@TG</a>
            </li>
        </ul>
    </div>
    <!-- /.card-body -->
</div>
