<!DOCTYPE html>
<html>
<head>
    <title>List of badges</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <style type="text/css">
        /*
         * Globals
         */
        section{
          padding: 10px 0;
        }
        /* Links */
        a,
        a:focus,
        a:hover {
          color: #fff;
        }

        /* Custom default button */
        .btn-default,
        .btn-default:hover,
        .btn-default:focus {
          color: #333;
          text-shadow: none; /* Prevent inheritence from `body` */
          background-color: #fff;
          border: 1px solid #fff;
        }


        /*
         * Base structure
         */

        html,
        body {
          height: 100%;
          background-color: #333;
        }
        body {
          color: #fff;
          text-align: center;
          text-shadow: 0 1px 3px rgba(0,0,0,.5);
        }

        /* Extra markup and styles for table-esque vertical and horizontal centering */
        .site-wrapper {
          display: table;
          width: 100%;
          height: 100%; /* For at least Firefox */
          min-height: 100%;
          -webkit-box-shadow: inset 0 0 100px rgba(0,0,0,.5);
                  box-shadow: inset 0 0 100px rgba(0,0,0,.5);
        }
        .site-wrapper-inner {
          display: table-cell;
          vertical-align: top;
        }
        .cover-container {
          margin-right: auto;
          margin-left: auto;
        }

        /* Padding for spacing */
        .inner {
          padding: 30px;
        }


        /*
         * Header
         */
        .masthead-brand {
          margin-top: 10px;
          margin-bottom: 10px;
        }

        .masthead-nav > li {
          display: inline-block;
        }
        .masthead-nav > li + li {
          margin-left: 20px;
        }
        .masthead-nav > li > a {
          padding-right: 0;
          padding-left: 0;
          font-size: 16px;
          font-weight: bold;
          color: #fff; /* IE8 proofing */
          color: rgba(255,255,255,.75);
          border-bottom: 2px solid transparent;
        }
        .masthead-nav > li > a:hover,
        .masthead-nav > li > a:focus {
          background-color: transparent;
          border-bottom-color: #a9a9a9;
          border-bottom-color: rgba(255,255,255,.25);
        }
        .masthead-nav > .active > a,
        .masthead-nav > .active > a:hover,
        .masthead-nav > .active > a:focus {
          color: #fff;
          border-bottom-color: #fff;
        }

        @media (min-width: 768px) {
          .masthead-brand {
            float: left;
          }
          .masthead-nav {
            float: right;
          }
        }


        /*
         * Cover
         */

        .cover {
          padding: 0 20px;
        }
        .cover .btn-lg {
          padding: 10px 20px;
          font-weight: bold;
        }


        /*
         * Footer
         */

        .mastfoot {
          color: #999; /* IE8 proofing */
          color: rgba(255,255,255,.5);
        }


        /*
         * Affix and center
         */

        @media (min-width: 768px) {
          /* Start the vertical centering */
          .site-wrapper-inner {
            vertical-align: middle;
          }
          /* Handle the widths */
          .masthead,
          .mastfoot,
          .cover-container {
            width: 100%; /* Must be percentage or pixels for horizontal alignment */
          }
        }



    </style>
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
                    <pre>{{{ Blade::compileString(Badge::link('#','Messages', 43)) }}}</pre>
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
                        <pre>{{{ Blade::compileString(Badge::primary('Messages', 43)) }}}</pre>
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
                        <pre>{{{ Blade::compileString(Badge::info('Messages', 43)) }}}</pre>
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
                        <pre>{{{ Blade::compileString(Badge::danger('Messages', 43)) }}}</pre>
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
                        <pre>{{{ Blade::compileString(Badge::warning('Messages', 43)) }}}</pre>
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
                        <pre>{{{ Blade::compileString(Badge::success('Messages', 43)) }}}</pre>
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