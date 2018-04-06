<div class="form-group {{ $errors->has('date') ? 'has-error' : ''}}">
    <label for="date" class="col-md-4 control-label">{{ 'Date' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="date" type="date" id="date" value="{{ $schedule->date or ''}}" required>
        {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('timeFrom') ? 'has-error' : ''}}">
    <label for="timeFrom" class="col-md-4 control-label">{{ 'Timefrom' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="timeFrom" type="time" id="timeFrom" value="{{ $schedule->timeFrom or ''}}" required>
        {!! $errors->first('timeFrom', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('timeTo') ? 'has-error' : ''}}">
    <label for="timeTo" class="col-md-4 control-label">{{ 'Timeto' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="timeTo" type="time" id="timeTo" value="{{ $schedule->timeTo or ''}}" required>
        {!! $errors->first('timeTo', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
