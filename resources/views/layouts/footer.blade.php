@php
$data_commit = shell_exec("git log -1 --pretty=format:'%ci' --abbrev-commit");

$data_arr = explode(' ', $data_commit);
array_pop($data_arr);
$data_arr[0] = str_replace("'", "", $data_arr[0]);
$data_commit = implode(' ', $data_arr);
$data_commit = Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$data_commit)->format('d/m/Y H:i:s');

@endphp



<footer class="main-footer">
    Version 1.0.0.2 | Data última atualização: {{ $data_commit }}
    Copyright &copy; {!! \Carbon\Carbon::now()->format("Y")!!}. Powered by.
    <h3>Ricardo Lucas</h3>
</footer>
