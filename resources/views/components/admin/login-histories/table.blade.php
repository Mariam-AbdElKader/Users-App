<div class="bg-gray-800 p-6 rounded-lg shadow-lg mt-8 max-w-4xl mx-auto">
     <div class="flex justify-between items-center mb-4">
         {{-- <input type="text" placeholder="Search..." class="w-1/3 px-4 py-2 bg-gray-700 rounded-md" /> --}}
         {{-- <select class="px-4 py-2 bg-gray-700 rounded-md">
                <option>10</option>
                <option>20</option>
                <option>50</option>
            </select> --}}
     </div>
     <table class="w-full text-left">
         <thead>
             <tr class="bg-gray-700">
                 <th class="py-3 px-4">Ip</th>
                 <th class="py-3 px-4">Logged At</th>
                 <th class="py-3 px-4">User Agent</th>
             </tr>
         </thead>
         <tbody>
             @foreach ($user->loginHistories as $login)
                 <x-admin.table.login-histories-row :login="$login" />
             @endforeach
         </tbody>
     </table>
 </div>
