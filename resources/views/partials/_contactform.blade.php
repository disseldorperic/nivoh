<section class="white" id="contactformulier">
    <h2>Contact opnemen</h2>
    <form class="ajax-request contactform" action="/form/contact" method="POST">
        <div class="row">
            <div class="col-md-12 column">
                {!! csrf_field() !!}

                <div class="alert alert-danger" role="alert" style="display:none"></div>
                <div class="alert alert-success" role="alert" style="display:none"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 column">
                <div class="form-group">
                    <input type="text" class="form-control" name="organisatie" placeholder="Organisatie">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 column">
                <div class="form-group">
                    <input type="text" class="form-control" name="naam" placeholder="Naam">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 column">
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="E-mailadres">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 column">
                <div class="form-group">
                    <textarea class="form-control" name="bericht" placeholder="Vraag"></textarea>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-default">Versturen <i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
    </form>
</section>