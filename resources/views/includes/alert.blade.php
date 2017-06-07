@if($_alert)

    <!--alert-->
    <div id="feedbackAlert" class="alert alert-{{ $_alert['context'] or 'info' }} alert-dismissible fade in hidden" role="alert">

        <!--close button-->
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <!--title-->
        <strong id="feedbackAlertTitle">{{ $_alert['title'] or 'Alert' }}</strong>

        <!--message-->
        <span id="feedbackAlertMessage">{!! $_alert['message'] or null !!}</span>

    </div>

@endif
