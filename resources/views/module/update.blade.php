<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Module</title>
</head>
<style>
    label{
        display: block;
    }
</style>
<body>
    <div>
        <h2>Update Module</h2>
        <hr>
        <form action="{{url('module/postUpdate')}}" method="POST">
            @csrf
            <div>
                <label for="">id</label>
                <input type="text" name="id" id="id" required value="{{$module->id}}">
            </div>
            <div>
                <label for="">short name</label>
                <input type="text" name="sname" id="sname" required value="{{$module->sname}}">
            </div>
            <div>
                <label for="">long name</label>
                <input type="text" name="lname" id="lname" required value="{{$module->lname}}">
            </div>
            <div>
                <label for="">hours</label>
                <input type="number" name="hours" id="hours" required min="0" max="1000" value="{{$module->hours}}">
            </div>
            <div>
                <label for="">fee</label>
                <input type="number" name="fee" id="fee" required min="0" max="1000" value="{{$module->fee}}">
            </div>
            <div>
                <input type="submit" name="btnSubmit" id="btnSubmit">
                <input type="reset" name="btnReset" id="btnReset">
            </div>
        </form>
    </div>
</body>
</html>