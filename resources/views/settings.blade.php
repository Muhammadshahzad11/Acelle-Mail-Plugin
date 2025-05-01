@extends('layouts.default')

@section('content')
<div class="container">
    <h1>RotaryMail Scheduler Settings</h1>

    <form action="{{ route('rotarymail.save_settings') }}" method="POST">
        @csrf

        <div class="card">
            <div class="card-body">
                <h4>Throttling Limits</h4>

                <div class="row">
                    <div class="col-md-6">
                        <label>Min emails/minute</label>
                        <input type="number" name="min_per_minute"
                               value="{{ $settings['min_per_minute'] }}" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label>Max emails/minute</label>
                        <input type="number" name="max_per_minute"
                               value="{{ $settings['max_per_minute'] }}" class="form-control">
                    </div>
                </div>

                <!-- Repeat for hour/day settings -->

                <div class="mt-3">
                    <label class="checkbox">
                        <input type="checkbox" name="enable_threading"
                               {{ $settings['enable_threading'] ? 'checked' : '' }}>
                        Enable Threaded Sending
                    </label>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Save Settings</button>
    </form>
</div>
@endsection