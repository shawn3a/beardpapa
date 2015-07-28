<div class="row">
    <div class="col-sm-12 content">
        <ul class="col-sm-4 no-padding events">
            <% loop $getEventsContainer(8) %>
                <li class="event col-sm-12 ellipsis">
                    <span>$Title</span>
                </li>
            <% end_loop %>
        </ul>
        <div class="col-sm-8 no-padding flexslider">
            <ul class="slides">
                <% loop $Events.limit(8) %>
                    <li><img src="$Image.Filename"></li>
                <% end_loop %>
            </ul>
        </div>
    </div>
</div>