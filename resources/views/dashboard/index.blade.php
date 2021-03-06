@extends('layouts.user.master')

@section('content')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Quick Actions</h3>

            {!! Form::open(array('action' => array('WeightsController@store') )) !!}

            <div class="form-group form-inline">
                {!! Form::label('date', 'Weight:') !!}
                {!! Form::text('date', \Carbon\Carbon::now(), array('id' => 'date', 'class' => 'date form-control', 'size'=>16, 'placeholder' => 'Select date...')) !!}
                {!! Form::text('weight', null, array('size' => 3, 'class' => 'form-control')) !!}
                {!! Form::submit('Add', ['class' => 'btn btn-large btn-success']) !!}
            </div>

            {!! Form::close() !!}

            <p><strong>Add Exercise</strong></p>

            {!! Form::open(array('action' => array('ActivitiesController@store'), 'class' => 'form-inline' )) !!}

            Date: {!! Form::text('activity_date', \Carbon\Carbon::now(), array('size' => 16, 'class' => 'date form-control')) !!}
            Duration: {!! Form::text('duration', null, array('size' => 3, 'class' => 'form-control')) !!}
            Distance: {!! Form::text('distance', null, array('size' => 3, 'class' => 'form-control')) !!}
            <button id="timeconvert">R</button>
            {!! Form::select('activity_type_id', array($activity_types), null, array('size' => 1, 'class' => 'form-control')) !!}

            Notes: {!! Form::text('notes', null, array('size' => 10, 'class' => 'form-control')) !!}
            {!! Form::submit('Add', ['class' => 'btn btn-large btn-success']) !!}

            {!! Form::close() !!}

            <p><strong>Quick Exercise</strong></p>
            Madingley:

                {!! Form::open(array('action' => array('RepeatActivityController@applyToLoggedInUser', 2), 'style' => 'display: inline !important;', 'class' => 'form-inline' )) !!}
                {!! Form::submit('Morning Bike', ['class' => 'btn btn-sm']) !!}
                {!! Form::close() !!}

                {!! Form::open(array('action' => array('RepeatActivityController@applyToLoggedInUser', 3),  'style' => 'display: inline !important;', 'class' => 'form-inline' )) !!}
                {!! Form::submit('Evening Bike', ['class' => 'btn btn-sm']) !!}
                {!! Form::close() !!}

                {!! Form::open(array('action' => array('RepeatActivityController@applyToLoggedInUser', 3), 'style' => 'display: inline !important;', 'class' => 'form-inline' )) !!}
                {!! Form::submit('Morning Walk', ['class' => 'btn btn-sm']) !!}
                {!! Form::close() !!}

                {!! Form::open(array('action' => array('RepeatActivityController@applyToLoggedInUser', 3), 'style' => 'display: inline !important;', 'class' => 'form-inline' )) !!}
                {!! Form::submit('Evening Walk', ['class' => 'btn btn-sm']) !!}
                {!! Form::close() !!}
            <br />
            River:

                {!! Form::open(array('action' => array('RepeatActivityController@applyToLoggedInUser', 2), 'style' => 'display: inline !important;',  'class' => 'form-inline' )) !!}
                {!! Form::submit('Morning Bike', ['class' => 'btn btn-sm']) !!}
                {!! Form::close() !!}

                {!! Form::open(array('action' => array('RepeatActivityController@applyToLoggedInUser', 3), 'style' => 'display: inline !important;', 'class' => 'form-inline' )) !!}
                {!! Form::submit('Evening Bike', ['class' => 'btn btn-sm']) !!}
                {!! Form::close() !!}

                {!! Form::open(array('action' => array('RepeatActivityController@applyToLoggedInUser', 3), 'style' => 'display: inline !important;', 'class' => 'form-inline' )) !!}
                {!! Form::submit('Morning Walk', ['class' => 'btn btn-sm']) !!}
                {!! Form::close() !!}

                {!! Form::open(array('action' => array('RepeatActivityController@applyToLoggedInUser', 3), 'style' => 'display: inline !important;', 'class' => 'form-inline' )) !!}
                {!! Form::submit('Evening Walk', ['class' => 'btn btn-sm']) !!}
                {!! Form::close() !!}
            <br />
            Observatory:

                {!! Form::open(array('action' => array('RepeatActivityController@applyToLoggedInUser', 2), 'style' => 'display: inline !important;', 'class' => 'form-inline' )) !!}
                {!! Form::submit('Evening Bike', ['class' => 'btn btn-sm']) !!}
                {!! Form::close() !!}

                {!! Form::open(array('action' => array('RepeatActivityController@applyToLoggedInUser', 3), 'style' => 'display: inline !important;', 'class' => 'form-inline' )) !!}
                {!! Form::submit('Evening Walk', ['class' => 'btn btn-sm']) !!}
                {!! Form::close() !!}

            Wests:
                {!! Form::open(array('action' => array('RepeatActivityController@applyToLoggedInUser', 3), 'style' => 'display: inline !important;',    'class' => 'form-inline' )) !!}
                {!! Form::submit('Wests Walk', ['class' => 'btn btn-sm']) !!}
                {!! Form::close() !!}


            <p><strong>Add Eats</strong></p>

            {!! Form::open(array('action' => array('EatsController@store'), 'class' => 'form-inline' )) !!}

            {!! Form::text('eaten', \Carbon\Carbon::now(), array('size' => 3, 'size'=>16, 'class' => 'date form-control')) !!}
            Amt: {!! Form::text('amount', null, array('size' => 3, 'class' => 'form-control')) !!}
            {!! Form::select('amount_type', array('S'=>'g', 'P'=>'#', 'L'=>'ml'), null, array('size' => 1, 'class' => 'form-control')) !!}
            {!! Form::text('food', null, array('size' => 50, 'id' => 'food', 'class' => 'typeahead form-control')) !!}
            {!! Form::hidden('food_id', null, array('id' => 'food_id')) !!}
            {!! Form::submit('Add', ['class' => 'btn btn-large btn-success']) !!}

            {!! Form::close() !!}


        </div>
        <div class="box-body">


        </div><!-- /.box-body -->
    </div><!-- /.box -->



    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Recent Stats</h3>

        <div class="box-body">

            <table id="example1" class="table table-bordered table-striped table-responsive dt-responsive">
                <thead>
                <tr>
                    <th>Date</th>
                    <th>Weight (kg)</th>
                    <th>BMR</th>
                    <th>In</th>
                    <th>Out</th>
                    <th>Total</th>
                    <th>+/-</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($stats as $stat)
                    <tr>
                        <td>{{ \Carbon\Carbon::parse($stat['date'])->toFormattedDateString() }}</td>
                        <td>{{ number_format($stat['weight'],1) }}</td>
                        <td>{{ number_format($stat['bmr_m'],1) }}</td>
                        <td>{{ number_format($stat['cal_in'],0) }}</td>
                        <td>{{ number_format($stat['cal_out'],0) }}</td>
                        <td>{{ number_format(($stat['cal_in'] - $stat['cal_out']),0) }}</td>
                        <td>{{ number_format(($stat['cal_in'] - $stat['cal_out'] - $stat['bmr_m']),0) }}</td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Project Name</th>
                    <th>Collections</th>
                </tr>
                </tfoot>

            </table>



        </div><!-- /.box-body -->
    </div><!-- /.box -->
        </div>


    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Recent Weight</h3>

            <div class="box-body">

                <table id="example1" class="table table-bordered table-striped  table-responsive dt-responsive">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Weight (kg)</th>
                        <th>BMI</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($weights as $weight)
                        <tr>
                            <td>{{  \Carbon\Carbon::parse($weight['date'])->toFormattedDateString()  }}</td>
                            <td>{{ number_format($weight['weight'],1) }}</td>
                            <td>{{ number_format(\Foodbag\Body\Calculator::bmi($weight['weight'], $user['height']),1) }}</td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>



            </div><!-- /.box-body -->
        </div><!-- /.box -->

    </div>

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Recent Eats</h3>

            <div class="box-body">

                <table id="example1" class="table table-bordered table-striped  table-responsive dt-responsive">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Food Class</th>
                        <th>Food</th>
                        <th>Amount</th>
                        <th class="right">Cals</th>
                        <th>Fat</th>
                        <th>Protein</th>
                        <th>Carbs</th>
                        <th>Calcium</th>
                        <th>Salt</th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($eats as $eat)
                        <tr>
                            <td>{{ \Carbon\Carbon::parse($eat['eaten'])->toFormattedDateString()  }}</td>
                            <td></td>
                            <td>{{ $eat->food['name']  }}</td>
                            <td>{{ $eat['amount']  }} {{ $eat->getUnit()  }}</td>
                            <td>{{ number_format($eat->getCalories(),0)  }}</td>
                            <td>{{ number_format($eat->food['fat'],1)  }}</td>
                            <td>{{ number_format($eat->food['protein'],1)  }}</td>
                            <td>{{ number_format($eat->food['carbs'],1)  }}</td>
                            <td>{{ number_format($eat->food['calcium'],1)  }}</td>
                            <td>{{ number_format($eat->food['salt'],1)  }}</td>
                            <td></td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>

            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>


    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Recent Exercise</h3>

            <div class="box-body">

                <table id="example1" class="table table-bordered table-striped  table-responsive dt-responsive">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Duration</th>
                        <th>Calories</th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($activities as $activity)
                        <tr>
                            <td>{{ \Carbon\Carbon::parse($activity['activity_date'])->toFormattedDateString() }}</td>
                            <td>{{ $activity->type['name']  }}</td>
                            <td>{{ $activity['duration']  }}</td>
                            <td>{{ number_format($activity->getMetRateValue(95),0)  }}</td>

                            <td></td>

                        </tr>
                    @endforeach
                    </tbody>

                </table>



            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
@stop



@section('footer-script')

    @include('scripts.dates')
    @include('scripts.foods-typeahead')

@stop
