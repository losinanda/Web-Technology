<x-app-layout>
    <div
    class="antialiased bg-gradient-to-r from-green-400 to-blue-500 text-gray-900 font-sans">
    <div class="flex items-center justify-center h-screen w-screen">
      <div class="w-full bg-white rounded shadow-lg p-8 mx-96">
        <form class="form" method="POST" action="/resultarithmetic">
          <span
            class="block w-full text-2xl uppercase font-bold mb-10 text-center"
            >Total Sum of Arithmetic Sequence</span
          >
          @csrf
          <div class="mb-4 md:w-full">
            <label for="firstterm" class="block text-ss mb-1 md:w-full"
              >Input First Term</label
            >
            <input
              class="w-full border rounded p-2 outline-none focus:shadow-outline"
              type="number"
              name="first_term">
          </div>
          <div class="mb-4 md:w-full">
            <label for="ratio" class="block text-ss mb-1 md:w-full"
              >Input Difference</label
            >
            <input
              class="w-full border rounded p-2 outline-none focus:shadow-outline"
              type="number"
              name="difference">
          </div>
          <div class="mb-4 md:w-full">
            <label for="num_of_terms" class="block text-ss mb-1 md:w-full"
              >Input Number of Terms</label
            >
            <input
              class="w-full border rounded p-2 outline-none focus:shadow-outline"
              type="number"
              name="num_of_terms">
          </div>
          <div class="flex md:w-full justify-center">
            <input
              class="bg-blue-500 hover:bg-blue-700 text-white uppercase text-sm font-semibold my-5 mx-2 px-4 py-2 rounded"
              type="submit">
            </input>
            <input class="bg-red-500 hover:bg-red-700 text-white uppercase text-sm font-semibold my-5 mx-5 px-4 py-2 rounded"
              type="reset">
            </input>
          </div>
        </form>
      </div>
    </div>
  </div>
</x-app-layout>
