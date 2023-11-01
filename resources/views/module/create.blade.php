<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Module</title>
</head>
<style>
    label{
        display: block;
    }
</style>
<body>
    <div>
        <h2>Create Module</h2>
        <hr>
        <form action="{{url('module/postCreate')}}" method="POST">
            @csrf
            <div>
                <label for="">short name</label>
                <input type="text" name="sname" id="sname" required>
            </div>
            <div>
                <label for="">long name</label>
                <input type="text" name="lname" id="lname" required>
            </div>
            <div>
                <label for="">hours</label>
                <input type="number" name="hours" id="hours" required min="0" max="1000">
            </div>
            <div>
                <label for="">fee</label>
                <input type="number" name="fee" id="fee" required min="0" max="1000">
            </div>
            <div>
                <input type="submit" name="btnSubmit" id="btnSubmit">
                <input type="reset" name="btnReset" id="btnReset">
            </div>
        </form>
    </div>
</body>
</html>