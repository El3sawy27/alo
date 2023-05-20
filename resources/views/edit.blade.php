
<style>
    body{
        background-color: gray;
    }
    h1{
        text-align: center;
    }
    form{
        width: 50%;
        margin: auto;
        border: 3px solid black;
        border-radius: 10px;
        padding: 1vw;
        text-align: center;
    }
    form input{
        width: 80%;
        padding:1vw;
        border: 1px solid black;
        border-radius: 4px;
    }
    form button{
        padding: .5vw;
        border: none;
        color:white;
        background-color: black;
        border-radius: 4px;
        font-size: 22px;
        font-weight: 600;
        cursor: pointer;
    }
</style>
<h1>Edit Posts</h1>

<form action="{{route('postupdate',$post->id)}}" method="post">

<input type="hidden" name="_token" value="{{ csrf_token() }}" />
<input type="text" name="fname" value="{{$post->fname}}"><br><br>
<input type="text" name="lname" value="{{$post->lname}}"><br><br>
<button type="submit">Edit</button>

<!-- <input type="hidden" name="_token" value="{{ csrf_token() }}" />
<input type="text" name="fname" value="{{$post->fname}}"><br><br>
<input type="text" name="lname" placeholder="Enter last name"><br><br>
<button type="submit">submit</button> -->



</form>

