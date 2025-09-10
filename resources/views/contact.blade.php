@extends('layout')


@section('content')
<div class="container py-5">
    <h2 class="mb-4">Contact Us</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('contact.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name *</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="form-group">
            <label for="email">Email *</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="form-group">
            <label for="phone">Phone (optional)</label>
            <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
            @error('phone') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="form-group">
            <label for="subject">Subject (optional)</label>
            <input type="text" name="subject" class="form-control" value="{{ old('subject') }}">
            @error('subject') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="form-group">
            <label for="message">Message *</label>
            <textarea name="message" rows="5" class="form-control" required>{{ old('message') }}</textarea>
            @error('message') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
</div>
@endsection
