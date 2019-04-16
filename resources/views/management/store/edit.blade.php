@extends('management.layouts.main')

@section('title', 'Store Edit')

@section('nav_store', 'active')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm border border-primary rounded my-5 p-5">
            <form method="POST" action="{{ route('admin.store.update') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control" value="@isset($store) {{ $store->address }} @endisset">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" class="form-control" value="@isset($store) {{ $store->phone }} @endisset">
                </div>
                <div class="form-group mt-5">
                    <p>(If it is not open on the day,please set both open time and close time as 00:00.)</p>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Sunday</label>
                    <label for="sun_open" class="col-sm-2">Open time</label>
                    <div class="col-sm-3">
                        <input type="text" name="sun_open_hh" class="form-control col-sm-5 d-inline-block" value="@isset($store) {{ substr($store->sun_open, 0, 2) }} @endisset">
                        :
                        <input type="text" name="sun_open_mm" class="form-control col-sm-5 d-inline-block" value="@isset($store) {{ substr($store->sun_open, 3, 2) }} @endisset">
                    </div>
                    <label for="sun_close" class="col-sm-2">Close time</label>
                    <div class="col-sm-3">
                        <input type="text" name="sun_close_hh" class="form-control col-sm-5 d-inline-block" value="@isset($store) {{ substr($store->sun_close, 0, 2) }} @endisset">
                        :
                        <input type="text" name="sun_close_mm" class="form-control col-sm-5 d-inline-block" value="@isset($store) {{ substr($store->sun_close, 3, 2) }} @endisset">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Monday</label>
                    <label for="mon_open" class="col-sm-2">Open time</label>
                    <div class="col-sm-3">
                        <input type="text" name="mon_open_hh" class="form-control col-sm-5 d-inline-block" value="@isset($store) {{ substr($store->mon_open, 0, 2) }} @endisset">
                        :
                        <input type="text" name="mon_open_mm" class="form-control col-sm-5 d-inline-block" value="@isset($store) {{ substr($store->mon_open, 3, 2) }} @endisset">
                    </div>
                    <label for="mon_close" class="col-sm-2">Close time</label>
                    <div class="col-sm-3">
                        <input type="text" name="mon_close_hh" class="form-control col-sm-5 d-inline-block" value="@isset($store) {{ substr($store->mon_close, 0, 2) }} @endisset">
                        :
                        <input type="text" name="mon_close_mm" class="form-control col-sm-5 d-inline-block" value="@isset($store) {{ substr($store->mon_close, 3, 2) }} @endisset">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Tuesday</label>
                    <label for="tue_open" class="col-sm-2">Open time</label>
                    <div class="col-sm-3">
                        <input type="text" name="tue_open_hh" class="form-control col-sm-5 d-inline-block" value="@isset($store) {{ substr($store->tue_open, 0, 2) }} @endisset">
                        :
                        <input type="text" name="tue_open_mm" class="form-control col-sm-5 d-inline-block" value="@isset($store) {{ substr($store->tue_open, 3, 2) }} @endisset">
                    </div>
                    <label for="tue_close" class="col-sm-2">Close time</label>
                    <div class="col-sm-3">
                        <input type="text" name="tue_close_hh" class="form-control col-sm-5 d-inline-block" value="@isset($store) {{ substr($store->tue_close, 0, 2) }} @endisset">
                        :
                        <input type="text" name="tue_close_mm" class="form-control col-sm-5 d-inline-block" value="@isset($store) {{ substr($store->tue_close, 3, 2) }} @endisset">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Wednesday</label>
                    <label for="wed_open" class="col-sm-2">Open time</label>
                    <div class="col-sm-3">
                        <input type="text" name="wed_open_hh" class="form-control col-sm-5 d-inline-block" value="@isset($store) {{ substr($store->wed_open, 0, 2) }} @endisset">
                        :
                        <input type="text" name="wed_open_mm" class="form-control col-sm-5 d-inline-block" value="@isset($store) {{ substr($store->wed_open, 3, 2) }} @endisset">
                    </div>
                    <label for="wed_close" class="col-sm-2">Close time</label>
                    <div class="col-sm-3">
                        <input type="text" name="wed_close_hh" class="form-control col-sm-5 d-inline-block" value="@isset($store) {{ substr($store->wed_close, 0, 2) }} @endisset">
                        :
                        <input type="text" name="wed_close_mm" class="form-control col-sm-5 d-inline-block" value="@isset($store) {{ substr($store->wed_close, 3, 2) }} @endisset">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Thursday</label>
                    <label for="thu_open" class="col-sm-2">Open time</label>
                    <div class="col-sm-3">
                        <input type="text" name="thu_open_hh" class="form-control col-sm-5 d-inline-block" value="@isset($store) {{ substr($store->thu_open, 0, 2) }} @endisset">
                        :
                        <input type="text" name="thu_open_mm" class="form-control col-sm-5 d-inline-block" value="@isset($store) {{ substr($store->thu_open, 3, 2) }} @endisset">
                    </div>
                    <label for="thu_close" class="col-sm-2">Close time</label>
                    <div class="col-sm-3">
                        <input type="text" name="thu_close_hh" class="form-control col-sm-5 d-inline-block" value="@isset($store) {{ substr($store->thu_close, 0, 2) }} @endisset">
                        :
                        <input type="text" name="thu_close_mm" class="form-control col-sm-5 d-inline-block" value="@isset($store) {{ substr($store->thu_close, 3, 2) }} @endisset">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Friday</label>
                    <label for="fri_open" class="col-sm-2">Open time</label>
                    <div class="col-sm-3">
                        <input type="text" name="fri_open_hh" class="form-control col-sm-5 d-inline-block" value="@isset($store) {{ substr($store->fri_open, 0, 2) }} @endisset">
                        :
                        <input type="text" name="fri_open_mm" class="form-control col-sm-5 d-inline-block" value="@isset($store) {{ substr($store->fri_open, 3, 2) }} @endisset">
                    </div>
                    <label for="fri_close" class="col-sm-2">Close time</label>
                    <div class="col-sm-3">
                        <input type="text" name="fri_close_hh" class="form-control col-sm-5 d-inline-block" value="@isset($store) {{ substr($store->fri_close, 0, 2) }} @endisset">
                        :
                        <input type="text" name="fri_close_mm" class="form-control col-sm-5 d-inline-block" value="@isset($store) {{ substr($store->fri_close, 3, 2) }} @endisset">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Saturday</label>
                    <label for="sat_open" class="col-sm-2">Open time</label>
                    <div class="col-sm-3">
                        <input type="text" name="sat_open_hh" class="form-control col-sm-5 d-inline-block" value="@isset($store) {{ substr($store->sat_open, 0, 2) }} @endisset">
                        :
                        <input type="text" name="sat_open_mm" class="form-control col-sm-5 d-inline-block" value="@isset($store) {{ substr($store->sat_open, 3, 2) }} @endisset">
                    </div>
                    <label for="sat_close" class="col-sm-2">Close time</label>
                    <div class="col-sm-3">
                        <input type="text" name="sat_close_hh" class="form-control col-sm-5 d-inline-block" value="@isset($store) {{ substr($store->sat_close, 0, 2) }} @endisset">
                        :
                        <input type="text" name="sat_close_mm" class="form-control col-sm-5 d-inline-block" value="@isset($store) {{ substr($store->sat_close, 3, 2) }} @endisset">
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection