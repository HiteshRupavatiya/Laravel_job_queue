<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <style>
        tr>td {
            padding: 10px;
        }

        span {
            color: red;
        }
    </style>
</head>

<body>
    <h1 align="center">Register</h1>
    @if(Session::has('success'))
        <span style="color: green">{{Session::get('success')}}</span>
    @endif
    <table align="center" border="1">
        <form action="{{ route('user.register') }}" method="post">
            @csrf
            <tr>
                <td>
                    <label for="userName">Username : </label>
                </td>
                <td>
                    <input type="text" name="name" id="" autofocus value="{{ old('name') }}"
                        placeholder="Name">
                    <br>
                    @error('name')
                        <span>{{ $message }}</span>
                    @enderror
                </td>
            </tr>
            <tr>
                <td>
                    <label for="userEmail">Email : </label>
                </td>
                <td>
                    <input type="email" name="email" id="" autofocus value="{{ old('email') }}"
                        placeholder="Email">
                    <br>
                    @error('email')
                        <span>{{ $message }}</span>
                    @enderror
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">Password : </label>
                </td>
                <td>
                    <input type="password" name="password" id="" autofocus value="{{ old('password') }}">
                    <br>
                    @error('password')
                        <span>{{ $message }}</span>
                    @enderror
                </td>
            </tr>
            <tr>
                <td>
                    <label for="confirm_password">Confirm Password : </label>
                </td>
                <td>
                    <input type="password" name="confirm_password" id="" autofocus
                        value="{{ old('confirm_password') }}">
                    <br>
                    @error('confirm_password')
                        <span>{{ $message }}</span>
                    @enderror
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Register" autofocus>
                </td>
            </tr>
        </form>
    </table>
</body>

</html>
