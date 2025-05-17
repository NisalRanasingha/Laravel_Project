<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
    <div class="mb-3 w-25">
            <form action="/updateitem/{{$item->id}}" method="post"> 
                {{csrf_field()}}
                <div class="mb-3">
                    <label for="" class="form-label">Item name</label>
                    <input type="text" value="{{$item->itemname}}" class="form-control" id="" aria-describedby="" name="name" placeholder="Item name" >
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Quantity</label>
                    <input type="text" class="form-control" id="" aria-describedby="" name="qty"  placeholder="quantity" value="{{$item->qty}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Price</label>
                    <input type="text" class="form-control" id="" aria-describedby="" name="price"  placeholder="price" value="{{$item->price}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
</body>
</html>