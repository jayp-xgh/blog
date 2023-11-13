@if ($message = Session::get('error'))
    <script>
        alert("{{ $message }}");
    </script>
@endif

<form action="{{ route('login.auth') }}" method="POST">
    @csrf

    User
    <input type="email" name="email">
    <br>
    Password
    <input type="password" name="password">

    <button type="submit">submit</button>
 </form>