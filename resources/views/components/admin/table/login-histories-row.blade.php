<tr class="border-b border-gray-700 hover:bg-gray-700">
    <td class="py-3 px-4">{{ $login->ip_address }}</td>
    <td class="py-3 px-4">{{ $login->created_at->diffForHumans() }}</td>
    <td class="py-3 px-4">{{ $login->user_agent }}</td>
</tr>
