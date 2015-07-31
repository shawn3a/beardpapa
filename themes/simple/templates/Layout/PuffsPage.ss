<div class="row">
    <div class="col-sm-12 content">
        <% loop $Puffs %>
            <div class="col-sm-12 category">
                <div class="col-sm-12 category-header">
                    <img src="$MainImage.Filename" class="category-thumb" >
                    <a href="" class="detail-link" id="{$ID}">
                        <span>
                            Know more about $Title
                            <i class="fa fa-caret-right" ></i>
                            <i class="fa fa-caret-right" ></i>
                            <i class="fa fa-caret-right" ></i>
                        </span>
                    </a>
                    <div class="description-container">
                        <div class="description">
                            $Description
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 no-padding">
                    <% loop $TestImages %>
                        <div class="col-sm-3 col-xs-6 puff">
                            <div class="thumb-container col-sm-12">
                                <div style="background-image: url('{$FileName}')" class="col-sm-12 puff-thumb"></div>
                            </div>
                        </div>
                    <% end_loop %>
                </div>
            </div>
        <% end_loop %>
    </div>
</div>