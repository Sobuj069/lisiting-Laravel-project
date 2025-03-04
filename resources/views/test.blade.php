@php
$fruitees = ["apple", "banana", "Orange", "avocado"];
@endphp

<script>
    var data = @json($fruitees);
    data.forEach(function(element) {
        console.log(element);
    });
</script>
