@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Add Employment</h2>

    <form method="post" action="/console/employments/add" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="title">Title:</label>
            <input type="title" name="title" id="title" value="{{old('title')}}" required>
            
            @if ($errors->first('title'))
                <br>
                <span class="w3-text-red">{{$errors->first('title')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="employer">Employer:</label>
            <input type="employer" name="employer" id="employer" value="{{old('employer')}}" required>
            
            @if ($errors->first('employer'))
                <br>
                <span class="w3-text-red">{{$errors->first('employer')}}</span>
            @endif
        </div>
        
        <div class="w3-margin-bottom">
            <label for="location">Location:</label>
            <input type="location" name="location" id="location" value="{{old('location')'}}" required>
            
            @if ($errors->first('location'))
                <br>
                <span class="w3-text-red">{{$errors->first('location')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="started_at">Start Date:</label>
            <input type="date" name="started_at" id="started_at" value="{{old('started_at')}}" required>
            
            @if ($errors->first('started_at'))
                <br>
                <span class="w3-text-red">{{$errors->first('started_at')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="ended_at">End Date:</label>
            <input type="date" name="ended_at" id="ended_at" value="{{old('ended_at')}}" required>
            
            @if ($errors->first('ended_at'))
                <br>
                <span class="w3-text-red">{{$errors->first('ended_at')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="content">Content:</label>
            <textarea name="content" id="content" required>{{old('content')}}</textarea>

            @if ($errors->first('content'))
                <br>
                <span class="w3-text-red">{{$errors->first('content')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Add Employment</button>

    </form>

    <a href="/console/employments/list">Back to Employment List</a>

</section>

@endsection