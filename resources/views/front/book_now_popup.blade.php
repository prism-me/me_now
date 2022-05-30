<div class="header-appo-main-box">
    <h1>{{ __('messages.Appointment Now!') }}</h1>
    @if (Session::get('message'))
        <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
            {{ Session::get('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    @endif
    <span id="loginerrorreview"></span>
    <form action="{{ url('bookappoinment') }}" method="post">
        {{ csrf_field() }}
        <div class="appo-select-main-box">
            <div class="appo-select-box">
                <select id="department" required class="dropdown" name="department"
                    onchange="getserviceanddoctor(this.value)">
                    <option value="" disabled="disabled" selected="selected">
                        {{ __('messages.Select Services') }}</option>
                    @foreach ($department as $d)
                        <option value="{{ $d->id }}">{{ $d->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="appo-select-box">
                <select id="doctors" required class="dropdown" name="doctors">
                    <option value="" disabled="disabled" selected="selected">-
                        <option value="" disabled="disabled" selected="selected">
                        {{ __('messages.Select Doctor') }}</option>
                    @foreach ($doctor as $d)
                        <option value="{{ $d->id }}">{{ $d->name }}</option>
                    @endforeach
                </select>
            </div>
            {{-- <div class="appo-select-box">
                <select id="service" required class="dropdown" name="service">
                    <option value="" disabled="disabled" selected="selected">-
                        {{ __('messages.Select Services') }}</option>
                </select>
            </div> --}}

        </div>
        <div class="appo-input-main-box">
            <input type="text" required name="name" id="name" placeholder="Your name"
                value="{{ Auth::user() ? Auth::user()->name : '' }}">
            <input type="text" required name="phone_no" id="phone_no" placeholder="Phone number"
                class="appo-right-input" value="{{ Auth::user() ? Auth::user()->phone_no : '' }}">
            <input type="date" required name="app_date" id="app_date" data-date-inline-picker="true"
                min="<?= date('Y-m-d') ?>" placeholder="dd/mm/yyyy">
            <input type="time" required name="app_time" placeholder="Time" class="appo-right-input">
            <textarea rows="3" required name="messages" placeholder="Message"></textarea>
        </div>
        <div class="appo-btn-main-box">
            @if (Auth::id())
                <button type="submit">{{ __('messages.Book Now') }}</button>
            @else
                <button type="button" onclick="changehiddenstatus()" data-toggle="modal"
                    data-target="#myModal">{{ __('messages.Book Now') }}</button>
            @endif

        </div>
    </form>
</div>