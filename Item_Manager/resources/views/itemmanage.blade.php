<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Item Manage</title>
</head>

<body>
    <div class="container">
        <h2 class="my-3">Item_Manager</h2>
        <div class="mb-3 w-25">
            <form action="/saveItem" method="post"> 
                {{csrf_field()}}
                <div class="mb-3">
                    <label for="" class="form-label">Item name</label>
                    <input type="text" class="form-control" id="" aria-describedby="" name="name" placeholder="Item name">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Quantity</label>
                    <input type="text" class="form-control" id="" aria-describedby="" name="qty"  placeholder="quantity">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Price</label>
                    <input type="text" class="form-control" id="" aria-describedby="" name="price"  placeholder="price">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Item name</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Price(Rs)</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->itemname}}</td>
                    <td>{{$item->qty}}</td>
                    <td>{{number_format($item->price,2)}}</td>
                    <td><a href="/update/{{$item->id}}" class="btn btn-success">Update</a>&nbsp;&nbsp;<a href="/delete/{{$item->id}}" class="btn btn-danger">Delete</a></td>
                  
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>