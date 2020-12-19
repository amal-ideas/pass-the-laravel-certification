<form method="post" action="/tickets">
{{csrf_field()}}
    <input type="text" name="name" value="Cameron">
    <input type="submit" value="create">
</form>
