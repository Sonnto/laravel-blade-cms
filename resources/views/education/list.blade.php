@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Education</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Institute</th>
            <th>Qualification</th>
            <th>Location</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Content</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach($education as $education): ?>
            <tr>
                <td>{{$education->institute}}</td>
                <td>{{$education->qualification}}</td>
                <td>{{$education->location}}</td>
                <td>{{ \Carbon\Carbon::parse($education->started_at)->format('d/m/Y')}}</td>
                <td>{{ \Carbon\Carbon::parse($education->ended_at)->format('d/m/Y')}}</td>
                <td>{{$education->content}}</td>
                <td><a href="/console/education/edit/{{$education->id}}">Edit</a></td>
                <td><a href="/console/education/delete/{{$education->id}}">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="/console/education/add" class="w3-button w3-green">New Education</a>

</section>

@endsection