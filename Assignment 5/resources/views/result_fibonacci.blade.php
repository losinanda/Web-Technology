<x-app-layout>
    <div
    class="antialiased bg-gradient-to-r from-green-400 to-blue-500 text-gray-900 font-sans">
    <div class="flex items-center justify-center h-screen w-screen">
      <div class="w-full bg-white rounded shadow-lg p-8 mx-96">
        <div>
          <span
            class="block w-full text-2xl uppercase font-bold mb-10 text-center"
            >Fibonacci Sequence</span
          >
          <div class="mb-4 md:w-full">
            <div class="block text-s mb-1 md:w-full">Sequence 1</div>
            <div class="w-full border rounded p-5">
              <p class="break-normal text-justify -m-3" id="seq1"> {{ $seq1 }}</p>
            </div>
          </div>
          <div class="mb-4 md:w-full">
            <div class="block text-s mb-1 md:w-full">Sequence 2</div>
            <div class="w-full border rounded p-5">
              <p class="break-normal text-justify -m-3" id="seq2"> {{ $seq2 }}</p>
            </div>
          </div>
          <div class="mb-4 md:w-full">
            <div class="block text-s mb-1 md:w-full">limit</div>
            <div class="w-full border rounded p-5">
              <p class="break-normal text-justify -m-3" id="limit"> {{ $n }}</p>
            </div>
          </div>
          <div class="mb-4 md:w-full">
            <div class="block text-s mb-1 md:w-full">Result</div>
            <div class="w-full border rounded p-5">
              <p class="break-normal text-justify -m-3" id="result"> {{ $result }}</p>
            </div>
          </div>
          <div class="flex md:w-full justify-center">
            <a
              class="bg-blue-500 hover:bg-blue-700 text-white uppercase text-sm font-semibold my-5 mx-2 px-4 py-2 rounded"
              id="back" href="{{ route('inputfibonacci') }}">
              Back
            </a>
            {{-- <button
              class="bg-red-500 hover:bg-red-700 text-white uppercase text-sm font-semibold my-5 mx-5 px-4 py-2 rounded"
              id="reset">
              Reset
            </button> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
