@foreach($data as $row)
<tr>
    @foreach($row->toArray() as $key => $value)
    <td>
        @if(in_array($key, ['created_at', 'updated_at'])) 
            {{ date('d M, Y', strtotime($value)) }}
        @elseif(str_contains($value, "assets"))
            <a href="{{ asset($value) }}" class="btn btn-sm btn-primary" target="_blank">View</a>
        @else
            {{ (strlen($value) > 100)?substr($value, 0, 100). '...':$value }}
        @endif
    </td>
    @endforeach

    <td>
        <div class="action-list">
            <a class="btn btn-secondary btn-sm"
                href="{{ route('lead.show', ['type' => $type, 'id' => $row->id]) }}">
                <i class="fas fa-eye"></i>
            </a>
            <a class="btn btn-danger btn-sm " data-toggle="modal"
                data-target="#confirm-delete" href="javascript:;"
                data-href="{{ route('lead.destroy', ['type' => $type, 'id' => $row->id]) }}">
                <i class="fas fa-trash-alt"></i>
            </a>
        </div>
    </td>
</tr>
@endforeach
