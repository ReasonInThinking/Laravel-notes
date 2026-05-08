@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="/handler" method="post">
    {{--  Cross-Site Request Forgery --}}
    @csrf
    <input type="text" name="mood" value="{{ old('mood') }}" placeholder="hello">
    @error('mood')
    <div style="color: red;">{{ $message }}</div>
    @enderror
    <button type="submit">Click</button>
</form>
