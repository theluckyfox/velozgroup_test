<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>BillsApp</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ URL::asset('css/normalize.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/index.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/media.css') }}">

        <!-- Scripts -->
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="{{ URL::asset('js/index.js') }}"></script>

        
    </head>
    <body>
        <div id="edit-modal" class="modal" >
            <form class='form' id="edit-form">
                <section>
                    <label for="form-field-vendor">Vendor</label>
                    <input type="text" name="vendor" id="form-field-vendor" required>
                </section>
                <section>
                    <label for="form-field-price">Price</label>
                    <input type="number" name="price" id="form-field-price" min="10.0" max="10000.0" step="1.5" value="10.0" required>
                </section>
                <section>
                    <label for="form-field-category">Category</label>
                    <select id="form-field-category">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                    </select>
                </section>
                <section>
                    <label for="form-field-ispaid">Paid</label>
                    <input type="checkbox" name="paid" id="form-field-ispaid" >
                </section>
                <section class="button-section">
                    <button class="button-add" type="submit">Add bill</button>
                    <button class="button-cancel" type="button">Cancel</button>
                </section>
            </form>          
        </div>
        <div id="delete-modal" class="modal" >
            <div class="form">
                <p>Are you shure you want to delete this bill?</p>
                <button class="button-delete">Yes</button>
                <button class="button-cancel">No</button>
            </div>            
        </div>        
        <main id="main">            
            @include('layouts.bills')
            <div class="buttons">
                <button id="add-bill">Add Bill</button>
            </div>
        </main>
    </body>
</html>
