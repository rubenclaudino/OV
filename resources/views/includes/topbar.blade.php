<div id="slidingbar-area">
    <div id="slidingbar">
        <div class="row">
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
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="#" class="sb_toggle"><i class="fa fa-chevron-up"></i></a>
            </div>
        </div>
    </div>
</div>
