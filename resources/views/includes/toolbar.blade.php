<div class="toolbar row">
    <div class="col-sm-6 hidden-xs">
        <div class="page-header">
            <h1>{{ $title }}
                <small>{{ $subtitle }}</small>
            </h1>
        </div>
    </div>
    <div class="col-sm-6 col-xs-12">
        <a href="#" class="back-subviews">
            <i class="fa fa-chevron-left"></i> BACK
        </a>
        <a href="#" class="close-subviews">
            <i class="fa fa-times"></i> CLOSE
        </a>

        <div class="toolbar-tools pull-right">
            <!-- start: TOP NAVIGATION MENU -->
            <ul class="nav navbar-right">
                <!-- start: TO-DO DROPDOWN -->
                <li>
                    <a href="calendar.php" class="show-calendar MyToolbar">
                        <i class="fa fa-calendar"></i>
                    </a>
                </li>
                <li>
                    <a href="#newFullEvent" class="new-event MyToolbar">
                        <i class="fa fa-user-plus"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true"
                       href="#">
                        <span class="messages-count badge badge-default hide">3</span> <i class="fa fa-envelope"></i>
                        MESSAGES
                    </a>
                    <ul class="dropdown-menu dropdown-light dropdown-messages">
                        <li>
                            <span class="dropdown-header"> You have 9 messages</span>
                        </li>
                        <li>
                            <div class="drop-down-wrapper ps-container">
                                <ul>
                                    <li class="unread">
                                        <a href="javascript:;" class="unread">
                                            <div class="clearfix">
                                                <div class="thread-image">
                                                    <img src="./assets/images/avatar-2.jpg" alt="">
                                                </div>
                                                <div class="thread-content">
                                                    <span class="author">Nicole Bell</span>
                                                    <span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
                                                    <span class="time"> Just Now</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" class="unread">
                                            <div class="clearfix">
                                                <div class="thread-image">
                                                    <img src="./assets/images/avatar-3.jpg" alt="">
                                                </div>
                                                <div class="thread-content">
                                                    <span class="author">Steven Thompson</span>
                                                    <span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
                                                    <span class="time">8 hrs</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <div class="clearfix">
                                                <div class="thread-image">
                                                    <img src="./assets/images/avatar-5.jpg" alt="">
                                                </div>
                                                <div class="thread-content">
                                                    <span class="author">Kenneth Ross</span>
                                                    <span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
                                                    <span class="time">14 hrs</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="view-all">
                            <a href="pages_messages.html">
                                See All
                            </a>
                        </li>
                    </ul>
                </li
                <li class="menu-search">
                    <a href="#" class="MyToolbar">
                        <i class="fa fa-search"></i>
                    </a>
                    <!-- start: SEARCH POPOVER -->
                    <div class="popover bottom search-box transition-all">
                        <div class="arrow"></div>
                        <div class="popover-content">
                            <!-- start: SEARCH FORM -->
                            <form class="" id="searchform" action="#">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
															<span class="input-group-btn">
																<button class="btn btn-main-color btn-squared"
                                                                        type="button">
                                                                    <i class="fa fa-search"></i>
                                                                </button> </span>
                                </div>
                            </form>
                            <!-- end: SEARCH FORM -->
                        </div>
                    </div>
                    <!-- end: SEARCH POPOVER -->
                </li>
            </ul>
            <!-- end: TOP NAVIGATION MENU -->
        </div>
    </div>
</div>
