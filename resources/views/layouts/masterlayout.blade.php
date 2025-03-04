<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite('resources/css/app.css')


</head>
<body>
     
        <div class="sidebar">
            <div class ="log">
                <img src="images/city university.png" alt="" class="logo">
            </div>
            <a href="/">Dashboard</a>
        <a href="scheduling">Scheduling</a>
        <a href="activity">Activity</a>
        <a href="bloodgroup">Blood Group</a>
        <a href="event">Event</a>
        <a href="Information">Information</a>
        <a href="feedback">Feedback</a>
    </div>
    
    <div class="content">
            <article>
                @yield('content')
            </article>
    </div>
</body>
</html>
