@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <ul id="dashboard">
        <li><a href="/console/education/list">Manage Education</a></li>
        <li><a href="/console/employments/list">Manage Employments</a></li>
        <li><a href="/console/entries/list">Manage Entries</a></li>
        <li><a href="/console/projects/list">Manage Projects</a></li>
        <li><a href="/console/types/list">Manage Types</a></li>
        <li><a href="/console/users/list">Manage Users</a></li>
        <li><a href="/console/logout">Log Out</a></li>
    </ul>

</section>

@endsection
