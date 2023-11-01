<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Module</title>
</head>
<body>
    <div>
        <h2>List of Module</h2>
        <hr>
        <a href="{{url('module/create')}}">Create New Module</a>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>short</th>
                    <th>long</th>
                    <th>hours</th>
                    <th>fee</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($modules as $item)
                <tr>
                    <th> {{$item->id}}</th>
                    <th>{{$item->sname}}</th>
                    <th>{{$item->lname}}</th>
                    <th>{{$item->hours}}</th>
                    <th>{{$item->fee}}</th>
                    <th>
                        <a href="{{url('module/update')}}">Update</a> |
                        <a href="{{url("module/delete/{$item->id}")}}"
                            onclick="return agree()"
                            >Delete</a>                        
                    </th>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        function agree(){
            return confirm('are u sure');
        }
    </script>

</body>
</html>