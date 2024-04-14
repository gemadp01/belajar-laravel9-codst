<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>{{ __('Welcome to this page!') }}</h1>

    <p>Locale: {{ App::getLocale() }}</p>
    <a href="{{ route('set_locale', 'en') }}">English</a>
    <a href="{{ route('set_locale', 'id') }}">Indonesia"></a>

    @if (Auth::check())
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit">Logout</button>
    </form>
    <p>{{ __('Name') }}: {{ $user->name }}</p>
    <p>{{ __('Email') }}: {{ $user->email }}</p>
    <p>{{ __('Role') }}: {{ $user->role }}</p>
    <p>ID: {{ $id }}</p>
    @else
    <a href="{{ route('login') }}">Login</a>
    <a href="{{ route('register') }}">Register</a>
    @endif

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>{{ __('Nama') }}</th>
                <th>{{ __('Score') }}</th>
                <th>{{ __('Action') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>
                    <a href="{{ route('show', $student->id) }}">{{ $student->name }}</a>
                </td>
                <td>{{ $student->score }}</td>
                <td>
                    <form action="{{ route('edit', $student) }}" method="get">
                        <button type="submit">{{ __('edit') }}</button>
                    </form>
                    <form action="{{ route('delete', $student) }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit">{{ __('delete') }}</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ __('Current page') }}: {{ $students->currentPage() }} <br>
    {{ __('Total data') }}: {{ $students->total() }} <br>
    {{ __('Data per Page') }}: {{ $students->perPage() }} <br>

    {{ $students->links('pagination::bootstrap-4') }}
</body>

</html>