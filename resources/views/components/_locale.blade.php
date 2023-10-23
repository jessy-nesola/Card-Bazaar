<form action="{{ route ('set_language', $lang) }}" method="POST">
    @csrf
    <button class="btn btn-secondary" type="submit">
        <span>{{ $nation }}</span>
    </button>
</form>
