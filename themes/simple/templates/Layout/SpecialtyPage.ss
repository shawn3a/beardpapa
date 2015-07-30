<div class="row">
    <div class="col-sm-12 content">
        <section class="col-sm-12">
            <div class="col-sm-12 banner" style="background-image: url('{$BannerImage.Filename}');">
                <div class="banner-container col-sm-12">
                    <div class="col-sm-12 title text-left">
                        <h1>$Slogan</h1>
                    </div>
                    <div class="col-sm-12 description no-padding">
                        $Content
                    </div>
                </div>
            </div>
        </section>
        <% loop $Chapters %>
            <section class="col-sm-12 chapter">
                <div class="col-sm-12 title">
                    <h1>Chapter $Number  <span>$Title</span></h1>
                </div>
                <div class="col-sm-12 banner" style="background-image: url('{$Image.Filename}');">
                    <div class="banner-container">
                        <div class="col-sm-12 summary text-left">
                            <h3>$Summary</h3>
                        </div>
                        <div class="col-sm-12 description no-padding">
                            $Content
                        </div>
                    </div>
                </div>
            </section>
        <% end_loop %>
    </div>
</div>