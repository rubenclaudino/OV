<!-- start: TAB CONTENT -->
<div class="tab-content panel" style="border-radius: 1px">

    @include('patients.partials.personal_details_tab')
    @include('patients.partials.dental_plan_tab')
    {{--
    @include('patients.partials.health_tab')
    @include('patients.partials.orto_tab')
    @include('patients.partials.prosthetics_tab')
	--}}
    @include('patients.partials.exams_tab')
    @include('patients.partials.button_interactions')
</div>
<!-- start: TAB CONTENT -->