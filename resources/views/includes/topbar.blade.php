<div id="slidingbar-area">

    <div id="slidingbar">

        <div class="row">

            <!-- start: SLIDING BAR THIRD COLUMN -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <h2>My Info</h2>

                    <address class="margin-bottom-40">
                        {{Auth::user()->name}}
                        <br>
                        Email:
                        <a href="mailto:{{Auth::user()->email}}">
                             {{Auth::user()->email}}
                        </a>
                    </address>
            </div>
            <!-- end: SLIDING BAR THIRD COLUMN -->
        </div>

        <div class="row">

            <!-- start: SLIDING BAR TOGGLE BUTTON -->
            <div class="col-md-12 text-center">
                <a href="#" class="sb_toggle"><i class="fa fa-chevron-up"></i></a>
            </div>
            <!-- end: SLIDING BAR TOGGLE BUTTON -->

        </div>

    </div>

</div>
