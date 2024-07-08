<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <article>
        <div>Ini About</div>
        @foreach ($abouts as $about)
            <div>{{ explode("\n", $about->body)[0] }}</div> <!-- Menampilkan baris pertama dari teks -->
        @endforeach
    </article>
</x-layout>
