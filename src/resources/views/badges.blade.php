<!DOCTYPE html>
<html>
<head>
    <title>List of badges</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/badges/cover.css">
</head>
<body>
    <div class="container">

      <div class="masthead clearfix">
        <div class="inner">
          <h3 class="masthead-brand">Badges <span class="badge">&</span></h3>

        </div>
      </div>

      <div class="inner cover">
        <h1 class="cover-heading">List of available badges.</h1>
        <p class="lead">This site is to present you how to use Badges package. You don't need to look into code all the time, just look here.</p>
        <div class="row">
            <div class="col-md-12">
                <h4 style="padding-bottom: 20px;">Link badge</h4>
                <div class="col-md-4">
                    <pre><?php echo "{{ Badge::link('#','Messages', 43) }}" ?></pre>
                </div>
                <div class="col-md-6">
                    <pre>{{ Blade::compileString(Badge::link('#','Messages', 43)) }}</pre>
                </div>
                <div class="col-md-2" style="margin-top: 10px">
                    {{ Badge::link('#','Messages', 43) }}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4 style="padding-bottom: 15px; padding-top: 15px;">Button badges</h4>
                <section >
                    <div class="col-md-4">
                        <pre><?php echo "{{ Badge::primary('Messages', 43) }}" ?></pre>
                    </div>
                    <div class="col-md-6">
                        <pre>{{ Blade::compileString(Badge::primary('Messages', 43)) }}</pre>
                    </div>
                    <div class="col-md-2" style="margin-top: 10px">
                        {{ Badge::primary('Messages', 43) }}
                    </div>
                </section>
                <section >
                    <div class="col-md-4">
                        <pre><?php echo "{{ Badge::info('Messages', 43) }}" ?></pre>
                    </div>
                    <div class="col-md-6">
                        <pre>{{ Blade::compileString(Badge::info('Messages', 43)) }}</pre>
                    </div>
                    <div class="col-md-2" style="margin-top: 10px">
                        {{ Badge::info('Messages', 43) }}
                    </div>
                </section>
                <section >
                    <div class="col-md-4">
                        <pre><?php echo "{{ Badge::danger('Messages', 43) }}" ?></pre>
                    </div>
                    <div class="col-md-6">
                        <pre>{{ Blade::compileString(Badge::danger('Messages', 43)) }}</pre>
                    </div>
                    <div class="col-md-2" style="margin-top: 10px">
                        {{ Badge::danger('Messages', 43) }}
                    </div>
                </section>
                <section >
                    <div class="col-md-4">
                        <pre><?php echo "{{ Badge::warning('Messages', 43) }}" ?></pre>
                    </div>
                    <div class="col-md-6">
                        <pre>{{ Blade::compileString(Badge::warning('Messages', 43)) }}</pre>
                    </div>
                    <div class="col-md-2" style="margin-top: 10px">
                        {{ Badge::warning('Messages', 43) }}
                    </div>
                </section>
                <section >
                    <div class="col-md-4">
                        <pre><?php echo "{{ Badge::success('Messages', 43) }}" ?></pre>
                    </div>
                    <div class="col-md-6">
                        <pre>{{ Blade::compileString(Badge::success('Messages', 43)) }}</pre>
                    </div>
                    <div class="col-md-2" style="margin-top: 10px">
                        {{ Badge::success('Messages', 43) }}
                    </div>
                </section>

            </div>
        </div>
      </div>

      <div class="mastfoot">
        <div class="inner">
          <p>@2016 Badges.</p>
        </div>
      </div>

    </div>
</body>
</html>