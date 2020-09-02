    <a class="btn btn-xs btn-primary" href="{{ route('projects.show', $row->id) }}">
        View
    </a>

    <a class="btn btn-xs btn-info" href="{{ route('projects.edit', $row->id) }}">
        Edit
    </a>

    <form action="{{ route('projects.destroy', $row->id) }}" method="POST" onsubmit="return confirm('{Are You sure?');" style="display: inline-block;">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" class="btn btn-xs btn-danger" value="delete">
    </form>
