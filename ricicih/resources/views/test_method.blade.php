<from= action></from= '/simpan' methods='post'>
@csrf
<button type = 'submit'> simpan data (post)</button>
</from>

<form action=" /update/1" method="'post">
    @csrf
    @method('PUT')
    <button type ='submit'> update data (PUT)</button>
</form>

<form action="/update2/1" method="POST">
    @csrf
    @method('PATCH')
    <button type="submit"> update data (PATCH)</button>
</form>

