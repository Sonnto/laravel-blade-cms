@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Add Education</h2>

    <form method="post" action="/console/education/add" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="institute">Institute:</label>
            <input type="institute" name="institute" id="institute" value="{{old('institute')}}" required>
            
            @if ($errors->first('institute'))
                <br>
                <span class="w3-text-red">{{$errors->first('institute')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="qualification">Qualification:</label>
            <input type="qualification" name="qualification" id="qualification" value="{{old('qualification')}}" required>
            
            @if ($errors->first('qualification'))
                <br>
                <span class="w3-text-red">{{$errors->first('qualification')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="location">Location:</label>
            <input type="location" name="location" id="location" value="{{old('location')}}" required>
            
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
            <input type="date" name="ended_at" id="ended_at" value="{{old('ended_at')}}">
            
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

        <button type="submit" class="w3-button w3-green">Add Education</button>

    </form>

    <a href="/console/education/list">Back to Education List</a>

</section>

@endsection