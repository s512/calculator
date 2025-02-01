@extends('layout')
@section('content')
    <div class="">
        <div class="flex items-start gap-4 rounded-lg bg-zinc-900 p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10">

            <form id="calculatorForm" class="w-full flex flex-col gap-4">
                <input 
                    placeholder="Input A" 
                    name="input_a" 
                    class="px-4 py-2 border border-gray-300 rounded-md text-gray-900 bg-white focus:outline-none focus:ring-2 focus:ring-[#FF2D20]"
                />
                <select 
                    name="operator" 
                    class="px-4 py-2 border border-gray-300 rounded-md text-gray-900 bg-white focus:outline-none focus:ring-2 focus:ring-[#FF2D20]"
                >
                    <option value='+'>Add</option>
                    <option value='-'>Minus</option>
                    <option value='*'>Multiplied by</option>
                    <option value='/'>Divided by</option>
                </select>
                <input 
                    placeholder="Input B" 
                    name="input_b" 
                    class="px-4 py-2 border border-gray-300 rounded-md text-gray-900 bg-white focus:outline-none focus:ring-2 focus:ring-[#FF2D20]"
                />
                <button 
                    type="submit" 
                    class="px-4 py-2 bg-[#FF2D20] text-white rounded-md hover:bg-[#FF2D20]/90 focus:outline-none focus:ring-2 focus:ring-[#FF2D20] focus:ring-offset-2"
                >
                    Calculate!
                </button>
            </form>
        </div>
        <div class="mt-6 flex items-start gap-4 rounded-lg bg-zinc-900 p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10">
            <div>Answer: <span id="result"></span></div>
        </div>
    </div>

    <script>
        document.getElementById('calculatorForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const data = {
                input_a: formData.get('input_a'),
                input_b: formData.get('input_b'),
                operator: formData.get('operator')
            };

            axios.post('/api/calculate', data)
                .then(response => {
                    document.getElementById('result').textContent = response.data.answer;
                })
                .catch(error => {
                    document.getElementById('result').textContent = 'Error: ' + error.response.data.message;
                });
        });
    </script>
@endsection