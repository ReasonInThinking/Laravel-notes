<form action="/handler" method="post">
    {{--  Cross-Site Request Forgery --}}
    @csrf
    <input type="text" name="mood" value="{{ old('mood') }} placeholder="hello">
    <button type="submit">Click</button>
</form>
