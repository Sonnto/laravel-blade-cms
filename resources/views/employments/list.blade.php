@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Employment</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Title</th>
            <th>Employer</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Content</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach($employments as $employment): ?>
            <tr>
                <td>{{$employment->title}}</td>
                <td>{{$employment->employer}}</td>
                <td>{{ \Carbon\Carbon::parse($employment->started_at)->format('d/m/Y')}}</td>
                <td>{{ \Carbon\Carbon::parse($employment->ended_at)->format('d/m/Y')}}</td>
                <td>{{$employment->content}}</td>
                <td><a href="/console/employments/edit/{{$employment->id}}">Edit</a></td>
                <td><a href="/console/employments/delete/{{$employment->id}}">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="/console/employments/add" class="w3-button w3-green">New Employment</a>

</section>

@endsection