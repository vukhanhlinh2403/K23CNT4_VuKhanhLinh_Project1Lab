<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>#if statement</title>
</head>
<body>
    <h1>#if statement</h1>
    @verbatim
        <pre>
            @if(count($array)===1)
                i have one element
                @elseif(count($array)>1)
                    i have multiple element!
                @else
                    i don't have any element!
            @endif
        </pre>
    @endverbatim
    <h1>mang: @{{$array}}</h1>
    @if(count($array)===1)
            i have one element
        @elseif(count($array)>1)
            i have multiple element!
        @else
            i don't have any element!
    @endif
</body>
</html>