<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<h1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Student List</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('student.create')}}">Register a Student</a>
        </div>
        <table border="1">
            <tr>
                <th>No.</th>
                <th>StudentID</th>
                <th>Name</th>
                <th>Course</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($students as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->studentID}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->course}}</td>
                    <td>
                        <a href="{{route('student.edit', ['student' => $student])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('student.delete',['student'=>$student])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>