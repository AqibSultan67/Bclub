<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News - Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            display: flex;
            height: 100vh;
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            flex: 1;
            transition: margin-left 0.3s ease;
        }
        .editor {
            height: 300px;
        }

    </style>
</head>
<body>
    @extends('admin.dashboard')
    @section('news_edit')
    <div class="content" id="content">
        <div class="container mt-5">
            <h2>Edit News</h2>
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form id="editNewsForm">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="content" class="mb-2">Content</label>
                    <div id="editor" class="editor"></div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Update</button>
            </form>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
        <script src="https://cdn.quilljs.com/1.3.7/quill.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            // Set up CSRF token for AJAX requests
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            const quill = new Quill('#editor', {
                theme: 'snow',
                modules: {
                    toolbar: [
                        [{ header: [1, 2, false] }],
                        ['bold', 'italic', 'underline', 'strike'],
                        [{ list: 'ordered' }, { list: 'bullet' }],
                        [{ color: [] }, { background: [] }],
                        ['clean']
                    ]
                },
                placeholder: 'Type your news content here...'
            });

            // Set initial content without displaying HTML tags
            const initialContent = `{!! addslashes($news->content) !!}`; // Use Blade syntax to safely escape
            quill.clipboard.dangerouslyPasteHTML(0, initialContent); // Load HTML into the editor

            // Handle form submission with AJAX
            $('#editNewsForm').on('submit', function(e) {
                e.preventDefault();

                const content = quill.root.innerHTML; // Get content directly from the editor

                $.ajax({
                    url: "{{ route('news.update', $news->id) }}",
                    type: 'POST',
                    data: {
                        _token: $('input[name="_token"]').val(),
                        _method: 'PUT',
                        content: content // Send content directly
                    },
                    success: function(response) {
                        alert(response.message); // Show success message
                        window.location.href = "{{ route('news.index') }}"; // Redirect after success
                    },
                    error: function(xhr) {
                        const errors = xhr.responseJSON.errors;
                        let errorMessage = 'Validation errors:\n';
                        for (const key in errors) {
                            errorMessage += errors[key].join('\n') + '\n';
                        }
                        alert(errorMessage);
                    }
                });
            });
        </script>
    </div>
    @endsection
</body>
</html>
