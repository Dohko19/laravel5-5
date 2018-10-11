@extends('layouts.master')

@section('content')
    <table class="table table-bordered" id="users">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
    </table>
@stop

@push('scripts')
<script>
$(function() {
    $('#users').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('datatables.data') !!}',
       " columns": [
            { data: 'id_usu'},
            { data: 'nombre'},
            { data: 'email'},
            { data: 'created_at'},
            { data: 'updated_at'}
        ]
    });
});
</script>
@endpush