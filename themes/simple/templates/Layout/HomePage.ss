<div class="row">
    <div class="col-sm-12 content">
        <div class="col-sm-12 top">
            <ul class="col-sm-4 no-padding events">
                <% loop $getEventsContainer(8) %>
                    <li class="event col-sm-12 ellipsis">
                        <% if $Title %>
                            <a href="" class="event-link">
                                <span>$Title</span>
                            </a>
                        <% end_if %>
                    </li>
                <% end_loop %>
                <li class="title">News / Events</li>
            </ul>
            <div class="col-sm-8 no-padding flexslider">
                <ul class="slides">
                    <% loop $Events.limit(8) %>
                        <li><img src="$Image.Filename"></li>
                    <% end_loop %>
                </ul>
            </div>
        </div>

        <div class="col-sm-12 shops">
            <div class="col-sm-4 no-padding title">
                <h1>Shops Information</h1>
            </div>
            <% loop $Shops %>
                <div class="col-sm-12 shop no-padding">
                    <div class="col-sm-4 no-padding">
                        <div class="logo col-sm-12 col-xs-12 no-padding">
                            <img src="/themes/simple/images/logo.png" class="col-sm-8 col-xs-8 no-padding">
                        </div>
                        <ul class="info col-sm-12">
                            <li class="info-item">
                                Address: $Address
                            </li>
                            <li class="info-item">
                                Phone: $Phone
                            </li>
                            <li class="info-item">
                                Email: $Email
                            </li>
                            <li class="info-item">
                                Website: <a href="$Website">$Website</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-8 google-map">
                        $GoogleMap
                    </div>
                </div>
            <% end_loop %>
        </div>

    </div>
</div>