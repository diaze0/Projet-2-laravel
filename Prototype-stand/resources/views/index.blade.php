
    <button> <a href="add">add</a> </button>

@foreach ($data as $row)
<div>
    Id : {{ $row->id }} 
    Name : {{ $row->name }}
    <a href="/delete?id={{ $row->id }}">Delete </a> 
    <a href="/update_promotion/{{ $row->id }}">/ Edit </a> 
    <br>
</div>  
@endforeach