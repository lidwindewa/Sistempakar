<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <h4 class="text-xl">Petunjuk Umum: <br>
        Pilihlah salah satu jawaban dari pertanyaan - pertanyaan dibawah ini.
    </h4>
    @foreach ($questions as $question)
        <div>{{ $question->question_text }}</div> <!-- Contoh menampilkan teks pertanyaan -->
    @endforeach
</x-layout>
