<form action="{{ route ('set_language', $lang) }}" method="POST">
    @csrf
    <li class="text-white-50" type="submit">
        <a>{{ $nation }}</a>
    </li>
</form>
