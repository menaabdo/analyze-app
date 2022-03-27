<x-app-layout>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                 <form action="{{  route('check') }}">
                 <input style='float:right' type='radio'name='a1' value='I’m not financially stable and I need help'>
                  <label style='float:right' class="ml-3">لست مستقرا ماديا واحتاج مساعدة</label>
                  <br>
                  <input  style='float:right;' type='radio'name='a1' value='I’m financially stable and I need advice on getting more from my investments'>

                  <label style='float:right' class="ml-3 "> انا مستقر ماديا واحتاج نصائح لزيادة الدخل                  </label>
                    <br>
                    <x-button style='float:right' type='submit' class="ml-3">
                    ارسل
                </x-button>
                 </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
