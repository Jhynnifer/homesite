<div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title" id="feedbackModalTitle">{!! $_modal['title'] or 'Info' !!}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">
                <p id="feedbackModalMessage">
                    {!! $_modal['message'] or null !!}

                    <br/><br/>

                    @forelse($_modal['fields'] as $field)
                        {{ implode('<br />', $field) }}<br/>
                    @empty

                    @endforelse
                </p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times-circle"></i> Close</button>
            </div>

        </div>
    </div>
</div>
