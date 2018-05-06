<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body> 
    <h1>All Users</h1>
    
    @foreach($users as $user)
    <li>{{ $user->name }}</li>
    @endforeach

    <form method="POST" action="/users">
        {{ csr f_field() }}
        <p>
            <input type="text" name="name" placeholder="Name" required>
        </p>
        <p>
            <input type="email" name="email" placeholder="Email Address" required>
        </p>
        <p>
            <input type="password" name="password" placeholder="Password" required>
        </p>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
