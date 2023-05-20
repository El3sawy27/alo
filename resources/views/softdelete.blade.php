<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .tittle{
        text-align: center;
        font-size: 25px;
        font-weight: 700;
        font-family: Georgia, 'Times New Roman', Times, serif;
        margin: 2vw;
    }
    table {
        width: 90%;
        margin: auto;


    }

    table .table-head {
        color: green;
        border: 2px solid black;
    }

    table .table-hhead {
        border: 2px solid black;
        text-align: center;
        padding: 1vw 0vw;
    }

    table .table-main {

        color: green;
        border: 2px solid black;
    }

    table .table-maiin {
        border: 2px solid black;
        text-align: center;
        font-size: 22px;
        font-weight: 700;
        color: black;
        padding: 1vw 0vw;
    }

    .table-main .edti-link {
        text-decoration: none;
        margin-left: 2vw;
        font-size: larger;
        color: green !important;
        font-weight: 700;
        padding: .75vw;
        border: 1px solid black;
        border-radius: 8px;
        transition: 0.4s ease;
    }

    .table-main .edti-link:hover {
        background-color: black;
    }

    .table-main .delete-link:hover {
        background-color: black;
    }

    .table-main .delete-link {
        text-decoration: none;
        font-size: larger;
        color: red !important;
        font-weight: 700;
        padding: .75vw;
        border: 1px solid black;
        border-radius: 8px;
        transition: 0.4s ease;
    }
</style>


    <h1 class="tittle">All Posts:: SoftDeleted</h1>

    <table>
        <tr class="table-head">
            <td class="table-hhead">
                <h1>id</h1>
            </td>
            <td class="table-hhead">
                <h1>Fname</h1>
            </td>
            <td class="table-hhead">
                <h1>Lname</h1>
            </td>
        </tr>
        @foreach($posts as $post)
        <tr class="table-main">
            <td class="table-maiin">{{$post->id}}</td>
            <td class="table-maiin">{{$post->fname}}</td>
            <td class="table-maiin">{{$post->lname}}</td>
            <td><a class="edti-link" href="{{route('restore',$post->id)}}">Restore</a></td>
            <td><a class="delete-link" href="{{route('forcedelete',$post->id)}}">forcedelete</a></td>
        </tr>

        @endforeach

    </table>

</body>

</html>
