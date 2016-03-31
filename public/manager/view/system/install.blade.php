<?php
/**
 * HONAKO APPLICATION
 * By: Hoiyen
 * Ver: 0.0.1
 * Last Update: 28/02/2016
 *
 * Domain: 
 * Manager
 *
 * Type:
 * Template
 * 
 * Description:
 * Login page
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Hoiyen <hoiyen.2000@gmail.com>">

  <title>System Installation</title>

  <!-- FONTS -->
  {{ Html::style('public/manager/assets/css/font-awesome.css') }}
  {{ Html::style('public/manager/assets/css/font.css') }}

  <!-- CORE -->
  {{ Html::style('public/manager/assets/css/style.css') }}
  {{ Html::style('public/manager/assets/css/custom.css') }}
  {{ Html::script('public/manager/assets/js/modernizr.js') }}
</head>

<body class="signwrapper">

  <div class="sign-overlay"></div>
  <div class="signpanel"></div>

  <div class="signup">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel">
          <div class="panel-heading">
            <h4 class="panel-title">System Installation</h4>
          </div>
          <div class="panel-body">
            @if ( count($errors) > 0 )
            <div class="alert alert-danger">
              @foreach ($errors->all() as $error)
              {{ $error }}
              @endforeach
            </div>
            @endif
            {{ Form::open([ 'route' => 'manager.login' ]) }}
            <div class="row">
              <div class="col-md-6">
                <h4>Database setup</h4>
                <p class="help-block">Please set database information here.</p>
              </div>
              <div class="col-md-6">
                <div class="form-group mb10">
                  <label>Hostname:</label>
                  {{ Form::text('hostname', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group mb10">
                  <label>Database:</label>
                  {{ Form::text('database', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group mb10">
                  <label>Username:</label>
                  {{ Form::text('username', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group mb10">
                  <label>Password:</label>
                  {{ Form::text('password', null, ['class' => 'form-control']) }}
                </div>
              </div>
            </div>
            <hr class="invisible">
            <div class="form-group">
              <button class="btn btn-success btn-quirk btn-block">Install</button>
            </div>
            {{ Form::close() }}
            <hr class="invisible">
            <center>{!! FOOTPRINT !!}</center>
          </div>
        </div><!-- panel -->
      </div>
    </div>
  </div>
  {{ Html::script('public/manager/assets/js/jquery-2.1.4.min.js') }}
</body>
</html>