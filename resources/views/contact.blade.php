@extends('layout')

@section('title', 'Contact Page')

@section('content')
    <h1>Contact Page</h1>

    <hr>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div>
                <form>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}">
                    </div>

                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea type="text" name="message" id="message" class="form-control">
                            {{ old('message') }}
                        </textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-default">Contact</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop