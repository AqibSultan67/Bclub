<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.quilljs.com/1.3.7/quill.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            display: flex;
            height: 100vh;
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
        }
        .sidebar {
            width: 250px;
            background-color: #343a40;
            color: #fff;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 20px;
            z-index: 1000;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
            flex: 1;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        #editor {
            height: 300px;
        }
    </style>
</head>
<body>
   @extends('admin.dashboard')
   @section('news_create')

    <div class="content" id="content">
        <div class="container mt-5">
            <h2>Add News</h2>
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

            <form id="newsForm">
                @csrf
                <div class="form-group">
                    <label for="content" class="mb-2">Content</label>
                    <div id="editor"></div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Add</button>
                <button type="button" id="debugButton" class="btn btn-secondary mt-3">Check Content</button>
            </form>
        </div>

        <script>
            // Load Quill editor
            const quill = new Quill('#editor', {
                theme: 'snow',
                modules: {
                    toolbar: [
                        [{ header: [1, 2, false] }],
                        ['bold', 'italic', 'underline', 'strike'],
                        ['link', 'image', 'blockquote'],
                        [{ list: 'ordered' }, { list: 'bullet' }],
                        [{ color: [] }, { background: [] }],
                        ['clean']
                    ]
                },
                placeholder: 'Type your news content here...'
            });

            // Handle form submission with AJAX
            document.getElementById('newsForm').onsubmit = function(e) {
                e.preventDefault();  // Prevent default submission

                const content = quill.root.innerHTML;  // Get content from Quill editor

                // Ensure content is not empty
                if (!content.trim()) {
                    alert('Please write some content before submitting.');  // Alert user
                    return; // Stop form submission
                }

                // Submit the HTML content
                $.ajax({
                    url: "{{ route('news.store') }}",  // Your route here
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',  // CSRF token
                        content: content // Send HTML content
                    },
                    success: function(response) {
                        alert('News created successfully!');
                        window.location.href = "{{ route('news.index') }}";  // Redirect after success
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
            };
        </script>
    </div>
    @endsection
</body>
</html>
