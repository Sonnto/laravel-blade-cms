@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Education</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Institute</th>
            <th>Qualification</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Content</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach($eudcation as $education): ?>
            <tr>
                <td>{{$education->institute}}</td>
                <td>{{$education->qualification}}</td>
                <td>{{ \Carbon\Carbon::parse($education->started_at)->format('d/m/Y')}}</td>
                <td>{{ \Carbon\Carbon::parse($education->ended_at)->format('d/m/Y')}}</td>
                <td>{{$education->content}}</td>
                <td><a href="/console/eudcation/edit/{{$education->id}}">Edit</a></td>
                <td><a href="/console/eudcation/delete/{{$education->id}}">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="/console/eudcation/add" class="w3-button w3-green">New Education</a>

</section>

@endsection