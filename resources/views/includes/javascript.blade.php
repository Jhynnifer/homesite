<!--global vars-->
<script>
    var url = '{{ url('') }}/';
    var token = '{{ csrf_token() }}';

</script>

<!--app compiled js-->
<script src="{{ mix('js/all.js') }}"></script>

<!--script stack-->
@stack('scripts')
