  
    <form enctype="multipart/form-data"  action="/submit" method="POST">
    @csrf
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <br>
        <input type="submit" value="Enviar">
    </form>
