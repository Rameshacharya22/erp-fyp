@php( $logout_url = View::getSection('logout_url') ?? config('adminlte.logout_url', 'logout') )

@if (config('adminlte.use_route_url', false))
    @php( $logout_url = $logout_url ? route($logout_url) : '' )
@else
    @php( $logout_url = $logout_url ? url($logout_url) : '' )
@endif

@php($user = \Illuminate\Support\Facades\Auth::user())
@php($attendance = \App\Models\Attendance::where('user_id', $user->id)->whereDate('date', \Carbon\Carbon::now())->first())


<li class="nav-item pr-2">
    <a class="btn btn-default btn-flat border rounded text-center m-auto p-auto"><i
            class="fa fa-fw fa-calendar-alt"></i></a>
</li>

<li class="nav-item pr-2">

    <a class="btn btn-default btn-flat  border rounded float-right " href="#"
       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="fa fa-fw fa-power-off text-red"></i>
    </a>
    <form id="logout-form" action="{{ $logout_url }}" method="POST" style="display: none;">
        @if(config('adminlte.logout_method'))
            {{ method_field(config('adminlte.logout_method')) }}
        @endif
        {{ csrf_field() }}
    </form>
</li>

{{--@dd($attendance)--}}

@if($user->role == "User")
    @if($attendance &&  $attendance->status=="pending")
        <li class="nav-item d-flex flex-column">
            <a class="btn btn-danger border-0 rounded float-right text-white p-auto m-auto"
               href="{{route('clock-in', ['userId' => $user->id])}}">
                <i class="fa fa-fw pr-1 fa-clock"></i>Clock Out
            </a>
            {{--        <span><small>ClockIn:{{$attendance?->clock_in}}</small></span>--}}
        </li>
    @else
        <li class="nav-item">
            <a class="btn btn-primary border-0 rounded float-right text-white p-auto m-auto"
               href="{{route('clock-in', ['userId' => $user->id, 'clockIn' => true])}}">
                <i class="fa fa-fw pr-1 fa-clock"></i>Clock In
            </a>
        </li>
    @endif

@endif
