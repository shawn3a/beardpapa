<div class="row">
    <div class="col-sm-12 content">
        <section class="col-sm-12 policy">
            <div class="col-sm-12 title">
                <h1>Our Policy</h1>
            </div>
            <div class="col-sm-12 summary">
                <h4>$PolicySummary</h4>
            </div>
            <div class="col-sm-5 no-padding images">
                <% loop $PolicyImages %>
                    <div class="col-sm-12">
                        <img src="$Filename" class="img-responsive">
                    </div>
                <% end_loop %>
            </div>
            <div class="col-sm-7 no-padding detail">
                $PolicyDetail
            </div>
        </section>

        <section class="col-sm-12 recipe">
            <div class="col-sm-12 title">
                <h1>Our Recipes</h1>
            </div>
            <div class="col-sm-12 summary">
                <h4>$RecipeSummary</h4>
            </div>
            <div class="col-sm-12 no-padding images">
                <% loop $RecipeImages %>
                    <div class="col-sm-4">
                        <img src="$Filename" class="img-responsive">
                    </div>
                <% end_loop %>
            </div>
            <div class="col-sm-12 no-padding detail">
                $RecipeDetail
            </div>
        </section>

        <section class="col-sm-12 reputation">
            <div class="col-sm-12 title">
                <h1>Our Reputation</h1>
            </div>
            <div class="col-sm-12 summary">
                <h4>$ReputationSummary</h4>
            </div>
            <div class="col-sm-12 no-padding images">
                <% loop $ReputationImages %>
                    <div class="col-sm-4">
                        <img src="$Filename" class="img-responsive">
                    </div>
                <% end_loop %>
            </div>
            <div class="col-sm-12 no-padding detail">
                $ReputationDetail
            </div>
        </section>
    </div>
</div>