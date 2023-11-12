@if (Session::has('message'))
    <script>
        toastr.options = {
            "closeButton": true,
            "newestOnTop": true,
            "positionClass": "toast-top-right",
        };

        @php
            $message = Session::get('message');
            $type = isset($message['type']) ? $message['type'] : 'info';
            $content = isset($message['content']) ? $message['content'] : '';
        @endphp

        toastr["{{ $type }}"]("{{ $content }}");
    </script>
@endif