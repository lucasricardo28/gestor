<!-- jQuery 3 -->
{{ Html::script('new_template/dist/js/jquery.min.js') }}


<!-- v4.0.0-alpha.6 -->
{{ Html::script('plugins/bootstrap-4/js/bootstrap.min.js') }}

<!-- template -->
{{ Html::script('new_template/dist/js/adminkit.js') }}

<!-- iCheck -->
{{ Html::script('new_template/dist/plugins/iCheck/icheck.min.js') }}

<!-- Bootstrap WYSIHTML5 -->
{{ Html::script('new_template/dist/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}

<!-- Dropzone -->
{{ Html::script('new_template/dist/plugins/dropzone-master/dropzone.js') }}

{{ Html::script('https://cdn.jsdelivr.net/npm/sweetalert2') }}
{{ Html::script('//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js') }}
{{ Html::script('plugins/jQuery-Mask-Plugin/dist/jquery.mask.js') }}


{{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js') }}
{{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/i18n/pt-BR.js') }}



<script type="application/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
<script type="application/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/locale/pt-br.js"></script>

<script>


$.fn.select2.defaults.set('theme', 'bootstrap');
$.fn.select2.defaults.set('language', 'pt-br');
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

@include('errors._check')

@yield('scripts')
