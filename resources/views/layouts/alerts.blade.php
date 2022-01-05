@if ($errors->any())
    <div class="remove-margin-left">
        <ul>
            @foreach ($errors->all() as $error)
                <div class="remove-list alert-dashboard">
                    <li>
                        <div class="application-alert-danger">{{ $error }}<div>
                    </li>
                </div>
            @endforeach
        </ul>
    </div>
@endif

@if (session()->has('success_report'))
    <div class="application-alert-success alert-dashboard">
        <!-- <a class="close" data-dismiss="alert" href="#">×</a> -->
        <!-- <h4 class="alert-heading">Success!</h4> -->
        <h6>{{ session()->get('success_report') }}</h6>
    </div>
    <br />
@endif


@if (session()->has('failure_report'))
    <div class="application-alert-danger alert-dashboard">
        <!-- <a class="close" data-dismiss="alert" href="#">×</a> -->
        <!-- <h4 class="alert-heading">Error!</h4> -->
        <h6>{{ session()->get('failure_report') }}</h6>
    </div>
    <br />
@endif
